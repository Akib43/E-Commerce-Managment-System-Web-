<?php
include'start.php';

$data = json_decode(file_get_contents("php://input"));
$orderId = $data->orderId;
$status = $data->status;

$sql = "UPDATE Customer_Order_Table SET Order_Status = ? WHERE Order_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $orderId);

if=($stmt->execute()){
    echo "Order status updated to '$status'";

} else{
    echo "Error update status.";
}


$stmt->close();
$conn->close();
?>
