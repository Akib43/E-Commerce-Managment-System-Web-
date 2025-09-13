<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $available = $_POST['available'];
    $stock = $_POST['stock'];
    $details = $_POST['details'];

    $sql = "INSERT INTO `product_table`(`Product_ID`, `Product_Name`, `Product_Category`, `Product_Type`, `Product_Price`, `Product_Available`, `Product_Stocked`, `Product_Details_1`) VALUES ('[id]','[name]','[category]','[type]','[price]','[available]','[stock]','[details]')";

    if ($conn->query($sql) === FALSE) {
        echo "Failed: " . $conn->error;
    }
    $conn->close();
}
?>
