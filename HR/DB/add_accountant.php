<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $joining = $_POST["joining"];

    $sql = "INSERT INTO ACC (Name, Number, Email, Password, Address, Joining) VALUES ('$name', '$number', '$email', '$password', '$address', '$joining')";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    else{
        echo "New record created successfully";
    }
    $conn->close();
}
?>
