<?php
    session_start();
    include 'ServerStart.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $currentpass = $_POST['old_pass'];
        $newpass = $_POST['new_pass'];
        $confirmpass = $_POST['confirm_pass'];

        $id = $_SESSION['id'];

        if($newpass != $confirmpass) {
            echo "<script>alert('Pass Mismatch');</script>";
        } else {
            $sql = "SELECT Employee_Password FROM Employee_Table WHERE Employee_ID='$id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row['Employee_Password'] == $currentpass) {
                $sql1 = "UPDATE Employee_Table SET Employee_Password='$newpass' WHERE Employee_ID='$id'";
                if($conn->query($sql1) == TRUE) {
                    header("Location: ../View/Profile.php");
                    echo "<script>alert(Password Changed);</script>";
                } else {
                    echo "<script>alert('Password Not Set');</script>";
                };
            } else {
                echo "<script>alert('Current Password is incorrect.');</script>";
            }
        }
    }

?>