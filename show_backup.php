<?php
session_start();
$con = mysqli_connect("localhost","root","","test");
if(mysqli_connect_error())
{
    error_log("Failed to connect to database: " . mysqli_connect_error());
    echo"<script>
    alert('Cannot connect to db');
    window.location.href='add_to_cart_new.php';
    </script>";
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(isset($_POST['show']))
    {
        $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
        $mobile_number = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : '';
        $email_id = isset($_POST['email_id']) ? $_POST['email_id'] : '';
        
        $insert_query1 = "INSERT INTO `order_manager`(`username`, `mobile_no`, `email`) VALUES ('$user_name','$mobile_number','$email_id')";
        if(mysqli_query($con,$insert_query1))
        {
            $order_id=mysqli_insert_id($con);
            $insert_query2= "INSERT INTO `user_orders`(`order_id`, `scrap_name`, `price`, `quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$insert_query2);
            
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$order_id,$scrap_name,$price,$quantity);
                
                foreach($_SESSION['card'] as $key => $value)
                {
                    $scrap_name=$value['Scrap_name'];
                    $price=$value['Price'];
                    $quantity=$value['Quantity'];
                    mysqli_stmt_execute($stmt); // Execute the prepared statement inside the loop
                }
                unset($_SESSION['card']);
                echo "<script>
                         if(confirm('Do you want to swap with items')) {
                             window.location.href='item_exchange.php';
                         } else {
                             window.location.href='schedule.php';
                         }
                     </script>";

            }
            
            else
            {
                error_log("SQL Prepared error: " . mysqli_error($con));
                echo"<script>
                alert('SQL Prepared error');
                window.location.href='add_to_cart_new.php';
                </script>";
            }
        }
        
        
        else
        {
            error_log("SQL error: " . mysqli_error($con));
            echo"<script>
            alert('SQL error');
            window.location.href='add_to_cart_new.php';
            </script>";
        }           
    }       
}

?>
