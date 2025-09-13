<?php
session_start();
require_once 'config.php';

// REGISTER
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $checkEmail = $conn->prepare("SELECT Customer_Email FROM customer_table WHERE Customer_Email = '$email'");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered';
        $_SESSION['active_form'] = 'register';
    } else {
        $insert = $conn->prepare("INSERT INTO customer_table (Customer_Name, Customer_Email, Customer_Password, Customer_Role) VALUES (?, ?, ?, ?)");
        $insert->bind_param("ssss", $name, $email, $password, $role);
        $insert->execute();
    }

    header("Location: ../View/login.php");
    exit();
}

// LOGIN
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = ("SELECT * FROM customer_table WHERE Customer_Email = '$email'");
    $result=$conn->query($stmt);
    // $stmt->bind_param("s", $email);
    // $stmt->execute();
    // $result = $stmt->get_result();
if($result->num_rows > 0){ echo "okay"; $user = $result->fetch_assoc();
    // if ($result()->num_rows > 0) {
    //     $user = $result()->fetch_assoc();

        if (password_verify($password, $user['Customer_Password'])) {
            $_SESSION['name'] = $user['Customer_Name'];
            $_SESSION['email'] = $user['Customer_Email'];
            setcookie("id", $user['Customer_ID'], time() + 86400, "/");

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

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: ../View/login.php");
    exit();
}
?>
