<?php 
session_start();

if(isset($_POST['submit_btn'])) {
    // Check if the form fields are set before accessing them
    if(isset($_POST['user_name']) && isset($_POST['mobile_number']) && isset($_POST['email_id'])) {
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['mobile_number'] = $_POST['mobile_number'];
        $_SESSION['email_id'] = $_POST['email_id'];
        // Redirect to add_to_cart_demo.php upon successful login
        echo "<script>
        alert('Login successful');
        window.location.href='add_to_cart_demo.php'; 
        </script>";
        exit;
    } else {
        // Handle the case where form fields are not set
        echo "<script>
        alert('Login failed: Please fill in all the fields');
        window.location.href='cpp_login_demo.php'; 
        </script>";
        exit;
    }
}
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
        input[type="email"] {
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
    <form action="cpp_login_demo.php" method="post">
        <div class="imgcontainer">
            <img src="img/logo.jpeg" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="user_name" required>
        
            <label for="mobile"><b>Mobile Number</b></label>
            <input type="text" placeholder="Enter Mobile Number" name="mobile_number" required pattern="[0-9]{10}" title="Please enter a 10-digit mobile number">
        
            <label for="email"><b>Email Address</b></label>
            <input type="email" placeholder="Enter Email Address" name="email_id" required>
        
            <br>
        
            <label>
                <input type="checkbox" name="terms_and_condition" required/> I agree to terms and conditions
            </label>
            <br>
            <button type="submit" name="submit_btn" class="submitbtn" id="sbtn">Login</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <input type="button" value="Cancel"  id="cbtn" class="cancelbtn">
        </div>
    </form>
</body>
</html>
