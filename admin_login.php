<?php
require "connection.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
        <style>
        /* Bordered form */
        form {
            border: 3px solid #f1f1f1;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Full-width inputs */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        /* Set a style for the login button */
        #sbtn,#cbtn{
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }
        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }
        /* Avatar image */
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        /* Add padding to containers */
        .container {
            padding: 16px;
        }
        /* The "Forgot password" text */
        span.psw {
            float: right;
            padding-top: 16px;
        }
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <form action="" method="POST"> <!-- Ensure that the form action points to add_to_cart_new.php -->
    <div class="imgcontainer">
        <img src="img/logo.jpeg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="AdminName" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="AdminPassword" required>
        <br>
       <!-- <label>
            <input type="checkbox" checked="checked" name="terms_and condition"><a href="terms_of_services.php">I agree terms and conditions</a>
        </label>!-->
        <button type="submit" name="Signin" class="submitbtn" id="sbtn" value="submit">Login</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <input type="button" value="Cancel"  id="cbtn" class="cancelbtn">
    </div>
</form>
<?php

if(isset($_POST['Signin']))
{
    $query="SELECT * FROM `admin` WHERE `admin_name`='$_POST[AdminName]' AND `admin_pwd`='$_POST[AdminPassword]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location: admin_panel.php");
    }else{
        echo"<script>alert('incorrect password')</script>";
    }


}
?>

</body>
</html>
