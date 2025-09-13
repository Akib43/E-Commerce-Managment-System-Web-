<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $details = $_POST['details'];
    $warranty = $_POST['warranty'];

    $sql = "INSERT INTO product (Name, Price, Quantity, Details, Warranty) VALUES ('$name', '$price', '$quantity', '$details', '$warranty',)";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    $conn->close();
}
?>
