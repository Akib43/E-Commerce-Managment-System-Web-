<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "e-commerce-management-db"; 

$conn = new mysqli($host, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>