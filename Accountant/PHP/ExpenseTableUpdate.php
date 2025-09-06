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

    }

?>