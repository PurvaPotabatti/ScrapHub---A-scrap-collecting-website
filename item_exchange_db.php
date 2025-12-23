<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "test");

if(mysqli_connect_error()) {
    error_log("Failed to connect to database: " . mysqli_connect_error());
    echo "<script>
          alert('Cannot connect to db');
          window.location.href='item_exchange_demo_cart.php';
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_db'])) {
   
    
    
        $item_id = $_SESSION['id'];
        $insert_query2 = "INSERT INTO `item_exchange`(`item_id`, `item_name`, `item_price`, `item_quantity`) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($con,$insert_query2);
        
        if($stmt) {
            mysqli_stmt_bind_param($stmt,"isii",$item_id,$item_name,$item_price,$item_quantity);
            
            foreach($_SESSION['item_card'] as $key => $value) {
                $item_name = $value['item_name'];
                $item_price = $value['item_price'];
                $item_quantity = $value['item_quantity'];
                
                mysqli_stmt_execute($stmt); // Execute the prepared statement inside the loop
            }
            unset($_SESSION['item_card']);
            echo "<script>
                 alert('Item details added successfully');
				 window.location.href='schedule.php';
             </script>";

        } else {
            error_log("SQL Prepared error: " . mysqli_error($con));
            echo "<script>
                  alert('SQL Prepared error');
                  window.location.href='item_exchange_demo_cart.php';
                  </script>";
        }
    } else {
        error_log("SQL error: " . mysqli_error($con));
        echo "<script>
              alert('SQL error');
              window.location.href='item_exchange_demo.php';
              </script>";
    }           


?>
