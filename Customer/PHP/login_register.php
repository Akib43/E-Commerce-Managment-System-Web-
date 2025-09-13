<?php
session_start();
require_once 'config.php';

// REGISTER
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Check if email already exists
    $checkEmail = $conn->query("SELECT Customer_Email FROM customer_table WHERE Customer_Email = '$email'");

    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered';
        $_SESSION['active_form'] = 'register';
    } else {
        $conn->query("INSERT INTO customer_table (Customer_Name, Customer_Email, Customer_Password, Customer_Role) 
                      VALUES ('$name', '$email', '$password', '$role')");
        $_SESSION['register_success'] = 'Registration successful! Please login.';
    }

    header("Location: ../View/login.php");
    exit();
}

// LOGIN
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM customer_table WHERE Customer_Email = '$email'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['Customer_Password'])) {
            // Save info in session
            $_SESSION['id'] = $user['Customer_ID'];
            $_SESSION['name'] = $user['Customer_Name'];
            $_SESSION['email'] = $user['Customer_Email'];
            $_SESSION['role'] = $user['Customer_Role'];

            setcookie("id", $user['Customer_ID'], time() + 86400, "/");

            // Redirect by role
            if ($user['Customer_Role'] === 'admin') {
                header("Location: ../View/admin.php");
            } elseif ($user['Customer_Role'] === 'user') {
                header("Location: ../View/index.html");
            } elseif ($user['Customer_Role'] === 'hr') {
                header("Location: ../View/hr.php");
            } else {
                header("Location: ../View/delivery_man.php");
            }
            exit();
        }
    }

    // Wrong login
    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: ../View/login.php");
    exit();
}
