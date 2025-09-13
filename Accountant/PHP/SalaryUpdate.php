<?php
    include 'ServerStart.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        $eId = $_POST['empId'];
        $eInc = $_POST['increment'];
<<<<<<< HEAD
<<<<<<< HEAD
        // $ePDate = $_POST['payday'];
=======
>>>>>>> 68759c3640016379d6d59e04d2b8075778975297

        $sql = "UPDATE employee_table SET Employee_Increment_percent = $eInc , Last_Paid = CURRENT_DATE() WHERE Employee_ID = $eId";
=======

        $sql = "UPDATE employee_table SET Employee_Increment_percent = $eInc ,Last_Paid = CURRENT_DATE() WHERE Employee_ID = $eId";
>>>>>>> MridulAli

        if($conn -> query($sql) === TRUE){
            header("Location: ../View/CompanySalary.php");
        }
        else{
            echo "Error: ". $sql . "<br>" . $conn -> error;
        }
    }

    $conn -> close();
?>