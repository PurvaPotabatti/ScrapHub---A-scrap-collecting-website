<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "test");

if (mysqli_connect_error()) {
    echo "<script>alert('Cannot connect to db');</script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['show'])) {

    $user_name = $_POST['user_name'];
    $mobile_number = $_POST['mobile_number'];
    $email_id = $_POST['email_id'];

    // Insert into order_manager
    $insert_query1 = "INSERT INTO order_manager (username, mobile_no, email) VALUES ('$user_name','$mobile_number','$email_id')";

    if (mysqli_query($con, $insert_query1)) {

        $order_id = mysqli_insert_id($con);
        $_SESSION['id'] = $order_id;

        // Insert cart items into user_orders with status CART
        $insert_query2 = "INSERT INTO user_orders (order_id, scrap_name, price, quantity, status) VALUES (?,?,?,?,?)";

        $stmt = mysqli_prepare($con, $insert_query2);

        if ($stmt) {

            $status = 'CART';
            mysqli_stmt_bind_param(
                $stmt,
                "isiis",
                $order_id,
                $scrap_name,
                $price,
                $quantity,
                $status
            );

            foreach ($_SESSION['card'] as $value) {
                $scrap_name = $value['Scrap_name'];
                $price = $value['Price'];
                $quantity = $value['Quantity'];
                mysqli_stmt_execute($stmt);
            }

            // Clear session cart AFTER inserting into DB
            unset($_SESSION['card']);

            echo "<script>
                alert('Scrap details added successfully');
                window.location.href='scrap_image.php';
            </script>";

        } else {
            echo "<script>alert('SQL prepare error');</script>";
        }
    }
}
?>
