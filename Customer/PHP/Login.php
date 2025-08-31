<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mail = $_POST['email'];
        $pass = $_POST['password'];

        if(empty($mail) || empty($pass)){
           echo "<script>alert('Please fill all the fields');</script>";
        }
        else{
            if(preg_match("/^[a-zA-Z0-9._]+@(gmail\.com|yahoo\.com|emial\.com)$/",$mail)){
                header("Location: ../View/home.php");
               //if($pass == ){}

            }else if(preg_match("/^[a-zA-Z0-9._]+@(accountant\.com)$/",$mail)){
                header("Location: ../../Accountant/View/AccountantDashboard.php");
                //if($pass == ){}
            }else if(preg_match("/^[a-zA-Z0-9._]+@(hr\.com)$/",$mail)){
                header("Location: ../../HR/View/home.php");
                //if($pass == ){}
            }else if(preg_match("/^[a-zA-Z0-9._]+@(deliveryman\.com)$/",$mail)){
                header("Location: ../../DeliveryMan/View/home.php");
                //if($pass == ){}
            }else{
                echo "<script>alert('Invalid email format');</script>";
            }
        }
    }
                    
    else{
        echo "<script>console.log('server fail');</script>";
    }
?>