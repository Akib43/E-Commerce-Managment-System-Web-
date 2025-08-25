<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            body {
                width: 100%;
                height: 100vh;
                font-family: Arial, Helvetica, sans-serif;
                display: flex;
                justify-content: center;
            }

            form {
                
                border: 3px solid #f1f1f1;
                text-align: center;
                margin: auto;
                width: 300px;
                padding-top: 40px;
                padding-bottom: 40px;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 10px;
            }
            
            input[type=email], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                align-items: center;
            }
            button {
                background-color: black;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                width: 100%;
                align-content: center;
            }
            a{
                color: black;
            }
        </style>
    </head>
    <body>
            <form method="POST" action="">
                <!-- Image stored in customers Assets-->
                <img src="Customer\Assets\Image\UserIconLoginPage.png" alt="Logo" style="width:100px; height:100px;"/>
                <input type="email" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
                <button type="submit">Login</button>
                <h4>New here.<a href="register.php"> Register</a></h4>
            </form>

            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $mail = $_POST['email'];
                    $pass = $_POST['password'];

                    if(empty($mail) || empty($pass)){
                        echo "<script>alert('Please fill in all fields');</script>";
                    }
                    else{
                        if(preg_match("/^[a-zA-Z0-9._]+@(gmail\.com|yahoo\.com|emial\.com)$/",$mail)){
                                header("Location: Customer/View/home.php");
                                //if($pass == ){}

                        }else if(preg_match("/^[a-zA-Z0-9._]+@(accountant\.com)$/",$mail)){
                                header("Location: Accountant/View/home.php");
                                //if($pass == ){}
                        }else if(preg_match("/^[a-zA-Z0-9._]+@(hr\.com)$/",$mail)){
                                header("Location: HR/View/home.php");
                                //if($pass == ){}
                        }else if(preg_match("/^[a-zA-Z0-9._]+@(deliveryman\.com)$/",$mail)){
                                header("Location: DeliveryMan/View/home.php");
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
    </body>
</html>