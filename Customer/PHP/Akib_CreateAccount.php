<?php

$host="localhost";
$user="root" ;
$pass=""  ;
$dbname="e-commerce-managment-system" ;
 
$conn = new mysqli($host,$user,$pass,$dbname);
 
$success= $error = "";
if($_SERVER["REQUEST_METHOD"]=="POST")    
{
    $username=$_POST["fullname"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    if (empty($username)|| empty($password) || empty($email))
    {
    
        $error= "Fill the form";
    
    }
    
else
{
    // $hash_pass= password_hash($password, PASSWORD_DEFAULT) ;
    $sql= "INSERT INTO customer (Customer_Name,Customer_Email,Customer_Pass) VALUES ('$username', '$email', '$password')";
    
    if($conn -> query($sql)===TRUE)
    {
        echo "Registration Successfull and you can do the login";
    }
    
    else{
    
        $error = "error". $conn-> error;
    
    }
    
    
    }
 
 
}
 
 
?>