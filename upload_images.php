<?php
session_start();
$con = mysqli_connect("localhost","root","","test");

if(mysqli_connect_error()) {
    error_log("Failed to connect to database: " . mysqli_connect_error());
    echo "<script>
          alert('Cannot connect to db');
          window.location.href='add_to_cart_demo.php';
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $scrap_name = isset($_POST['scrap_name']) ? $_POST['scrap_name'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : 0; // Assuming default price is 0 if not provided
        $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1; // Assuming default quantity is 1 if not provided

        $target_dir = "images/"; // Specify the directory where you want to store the files
        $file_name = basename($_FILES['image']['name']);
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // File uploaded successfully, now insert into database
            $insert_query = "INSERT INTO `user_orders` (`scrap_name`, `price`, `quantity`, `file`) VALUES ('$scrap_name', '$price', '$quantity', '$file_name')";
            if(mysqli_query($con, $insert_query)) {
                $_SESSION['uploaded_image'][$scrap_name] = $file_name; // Store image name in session
                echo "<script>
                     alert('Image added successfully');
					 window.location.href='add_to_cart_demo.php';
                 </script>";
            } else {
                error_log("SQL error: " . mysqli_error($con));
                echo "<script>
                      alert('SQL error');
                      window.location.href='add_to_cart_demo.php';
                      </script>";
            }
        } else {
            error_log("Failed to upload file");
            echo "<script>
                  alert('Failed to upload file');
                  window.location.href='add_to_cart_demo.php';
                  </script>";
        }
    } else {
        // Handle error if file upload failed or if no file was uploaded
        echo "<script>
              alert('Error uploading file');
              window.location.href='add_to_cart_demo.php';
              </script>";
    }
}
?>
