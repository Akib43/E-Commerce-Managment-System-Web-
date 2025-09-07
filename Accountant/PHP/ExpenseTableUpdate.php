<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e-commerce-managment-db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection Falied". $conn -> connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {    
        $ename = $_POST['expensename'];
        $eprice = $_POST['expenseammount'];
        $edept = $_POST['department'];
        $ereason = $_POST['expensereason'];
        $eapdate = $_POST['approvedate'];
        $eapby = $_POST['approvedby'];
        $ercdate = $_POST['receiveddate'];
        $ercby = $_POST['receivedby'];
        
        echo $ename . $eprice . $edept . $ereason . $eapdate . $eapby . $ercdate .$ercby;

        $sql = "INSERT INTO expense_table  (Expense_Name, Expense_Ammount, Allocated_Department, Expense_Reason, Expense_Approved_Date, Expense_Approved_By, Expense_Received_Date, Expense_Received_By) VALUES ('$ename', '$eprice', '$edept', '$ereason', '$eapdate', '$eapby', '$ercdate', '$ercby')";

        if($conn -> query($sql) === TRUE){
            echo "<script>alert('Updated');</script>";
        }
        else{
            echo "Error: ". $sql . "<br>" . $conn -> error;
        }
    }

?>