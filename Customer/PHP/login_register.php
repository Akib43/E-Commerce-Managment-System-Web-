<?php session_start();
require_once 'config.php';
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $checkEmail = $conn->query("SELECT Customer_Email FROM customer_table WHERE Customer_Email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered';
        $_SESSION['active_form'] = 'register';
    } else {
        $conn->query("INSERT INTO customer_table (Customer_Name, Customer_Email, Customer_Password, Customer_Role) VALUES ('$name', '$email', '$password', '$role')");
    }
    session_unset();
    header("location:../View/login.php");
    exit();
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM customer_table WHERE Customer_Email = '$email' ");
    if ($result->num_rows > 0) {
        echo "okay";
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            setcookie("id", $user['id'], time() + 86400, "/");
            if ($user['role'] === 'admin') {
                header("Location:../View/admin.php");
            } else if ($user['role'] === 'user') {
                header("Location:../View/index.html");
            } else if ($user['role'] === 'hr') {
                header("Location:../View/hr.php");
            } else {
                header("Location:../View/delivery_man.php");
            }
            exit();
        }
    }
    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    session_unset();
    header("location:../login.php");
    exit();
}
