<?php
$host = "localhost"; //db er server ke store kora
$username = "root"; // db username ke store kora
$password = ""; // db password ke store kora
$dbname = "e-commerce"; // db name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
