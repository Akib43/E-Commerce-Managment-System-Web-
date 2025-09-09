<?php

include 'ServerStart.php';

$sql = "SELECT Employee_ID, Employee_Name, Employee_Dept, Employee_Base_Salary, Employee_Increment_Percentage, Employee_salary FROM company_salary_table";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["Employee_ID"]. " - Name: " . $row["Employee_Name"]. " - Dept: " . $row["Employee_Dept"]. " - Base Salary: " . $row["Employee_Base_Salary"]. " - Increment Percentage: " . $row["Employee_Increment_Percentage"]. " - Salary: " . $row["Employee_salary"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
