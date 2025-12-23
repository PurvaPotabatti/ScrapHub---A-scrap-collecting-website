<?php
require("connection.php");
session_start();
// if(!isset($_SESSION['AdminLoginId'])){
	// header("location: admin_login.php");
// }
session_regenerate_id(true);

?>
<html>
<head>
<title>Admin Panel</title>
<style>
	/* Add border to table */
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
    }
    /* Add border to table cells */
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    /* Add gray background color to header */
    th {
        background-color: #f2f2f2;
    }
div.header{
	background-attachment: fixed;
	background:#03AC13;
	display:flex;
	justify-content:space-between;
	padding:0px 60px;
	align-items:center;
}
button{
	padding:8px 12px;
}
	</style>

</head>
<body>
<div class="header">
	<h1>Admin Panel <!--<?php //echo $_SESSION['AdminLoginId'] ; ?>!--></h1> 
	<form method="POST">
<button name="Logout">LogOut</button>
</form>
<?php
if(isset($_POST['Logout'])){
	session_destroy();
	header("location: admin_login.php");
}

?>
</div>
<div class="container">
 <div class="row">
   <div class="col-lg-12">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Order id</th>
          <th scope="col">Customer name</th>
          <th scope="col">Phone no</th>
          <th scope="col">Address</th>
          <th scope="col">Orders</th>
		  <th scope="col">Swap with Item</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $select_query1 = "SELECT * FROM `order_manager`"; 
        $user_result = mysqli_query($con,$select_query1);
        if($user_result) {
            while($user_fetch = mysqli_fetch_assoc($user_result))
            {
                echo "
                <tr>
                  <td>$user_fetch[id]</th>
                  <td>$user_fetch[username]</td>
                  <td>$user_fetch[mobile_no]</td>
                  <td>$user_fetch[email]</td>
                  <td>
                     <table class='table table-dark'>
                        <thead>
                          <tr>
                            <th scope='col'>Scrap name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Quantity</th>
                            <th scope='col'>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                ";  
                $select_query2 = "SELECT * FROM `user_orders` WHERE order_id='$user_fetch[id]'";
                $order_result = mysqli_query($con, $select_query2);
                if($order_result) {
                    while($order_fetch = mysqli_fetch_assoc($order_result))
{
    $image_name = $order_fetch['file']; // Assuming 'file' is the column name for the image name
    $image_path = "images/$image_name"; // Assuming images are stored in 'images' folder
    echo "
    <tr>
        <td>$order_fetch[scrap_name]</td>
        <td>$order_fetch[price]</td>
        <td>$order_fetch[quantity]</td> 
        <td><img src='$image_path' alt='Image' style='width:50px; height:50px' ></td>                 
    </tr>
    ";
}

                } else {
                    echo "Error in fetching orders: " . mysqli_error($con);
                }
                echo "
                        </tbody>
                    </table>
                  </td>
                </tr>
                ";
            }
        } else {
            echo "Error in fetching users: " . mysqli_error($con);
        }
        
      ?>
        
      </tbody>
    </table>
   </div>
 </div>
</div>
</body>
</html>
