<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e-commerce-managment-system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection Falied". $conn -> connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        $eId = $_POST['empId'];
        $eInc = $_POST['increment'];
        $ePDate = $_POST['payday'];

        $sql = "UPDATE employee_salary_table SET Employee_Salary_Increment_percentage = $eInc,Employee_Salary_Update= $ePDate WHERE Employee_ID = $eId";

        if($conn -> query($sql) === TRUE){
            echo "<script>alert('Updated');</script>";
        }
        else{
            echo "Error: ". $sql . "<br>" . $conn -> error;
        }
    }