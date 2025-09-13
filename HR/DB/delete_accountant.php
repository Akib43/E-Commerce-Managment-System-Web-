<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $sql = "DELETE FROM Employee_Table WHERE Employee_Department='Accountant' AND Employee_ID='$id'";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    header("Location:../View/employee.php");
    $conn->close();
}

?>