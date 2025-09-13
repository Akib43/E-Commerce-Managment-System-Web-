<?php
    include 'ServerStart.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $currentpass = $_POST['currentpass'];
        $newpass = $_POST['newpass'];
        $confirmpass = $_POST['confirmpass'];
        
        $id = $_COOKIE['id'];

        if($newpass != $confirmpass) {
            echo "<script>alert('Pass Mismatch');</script>";
        } else {
            $sql = "SELECT password FROM Employee_Table WHERE Employee_Id='$id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row['password'] != $currentpass) {
                echo "<script>alert('Current Password is incorrect.');</script>";
            } else {
                $sql = "UPDATE Employee_Table SET Employee_password='$newpass' WHERE Employee_Id='$id'";
                if(mysqli_query($conn, $sql)) {
                    echo "<script>alert(Password Changed);</script>";
                } else {
                    echo "<script>alert('Password Not Set');</script>";
                }
            }
        }
    }

?>