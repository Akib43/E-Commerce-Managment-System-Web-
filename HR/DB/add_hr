<?php
include "config.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $joining = $_POST["joining"];

    $sql = "INSERT INTO hr (name, email, number, password, address, joining) VALUES ('$name', '$email', '$number', '$password', '$address', '$joining')";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        echo "Failed: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
