<?php

session_start();
Include 'config.php';

if (isset($_POST['register'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists
    $checkEmail = $conn->query("SELECT * FROM customer_table WHERE Customer_Email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered';
        $_SESSION['active_form'] = 'register';
    }
     else {
        // Insert new user
        $conn->query("INSERT INTO customer_table 
            (Customer_Name, Customer_Email, Customer_Password) 
            VALUES 
            ('$name', '$email', '$password')");
    }

    session_unset();
    header("location:../View/login.php");
    exit();
}

// login
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail     = $_POST['email'];
    $password = $_POST['password'];

    if (preg_match("/^[a-zA-Z0-9._]+@(gmail\.com|yahoo\.com|email\.com)$/", $mail)) {
        $sql = "SELECT * FROM customer_table WHERE Customer_Email = '$mail'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc(); // fetch only one row
            
             setcookie("id", $row['Customer_ID'], time()+86400, "/");

            // set session
            $_SESSION['id']    = $row['Customer_ID'];
            $_SESSION['name']  = $row['Customer_Name'];
            $_SESSION['email'] = $row['Customer_Email'];

            // check password (plain text match, since you didn’t use hash here)
            if ($password === $row['Customer_Password']) {
                header("Location: ../View/index.html");
                exit();
            } else {
                echo "<script>alert('Invalid password');</script>";
            }
        } else {
            echo "<script>alert('Email not found');</script>";
        }
    }

else{
            $sql = "SELECT * FROM employee_table WHERE Employee_Email = '$mail'";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                $row = $result->fetch_assoc();
                setcookie("id", $row['Employee_ID'], time()+86400, "/");
                    $_SESSION['id'] = $row['Employee_ID'];
                    $_SESSION['name'] = $row['Employee_Name'];
                    $_SESSION['email'] = $row['Employee_Email'];
                    // $password = $row['Customer_Password'];
               

            if ($password === $row['Employee_Password']) {
                if(preg_match("/^[a-zA-Z0-9._]+@(accountant\.com)$/",$mail)){
                    header("Location: ../../Accountant/View/AccountantDashboard.php");
                }else if(preg_match("/^[a-zA-Z0-9._]+@(hr\.com)$/",$mail)){
                    header("Location: ../../HR/View/dashboard.html");
                }else if(preg_match("/^[a-zA-Z0-9._]+@(deliveryman\.com)$/",$mail)){
                    header("Location: ../../DeliveryMan/View/home.php");
                }else{
                    echo "<script>alert('Invalid email format');</script>";
                }
            }
        }
        
    }
exit();
}
   
?>

