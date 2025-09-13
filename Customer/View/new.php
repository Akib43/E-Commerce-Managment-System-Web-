<?php
if (isset($_COOKIE["id"])) {
    echo $_COOKIE["id"];
    $id = $_COOKIE["id"];
    include '../PHP/config.php';

    $sql = "SELECT * FROM customer_table WHERE Customer_ID = '$id' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            echo "<script>
        document.getElementById('name').innerHTML = '{$rows['Customer_Name']}';
        document.getElementById('email').innerHTML = '{$rows['Customer_Email']}';
        document.getElementById('id').innerHTML = '{$rows['Customer_ID']}';
    </script>";
        }
        // header("Location:show.php");
    }

}
?>