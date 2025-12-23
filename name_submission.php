<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <h2>Enter Your Name:</h2>
    <form action="" method="post" target="_self">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="submit"name="submit" value="Submit Name">
    </form>
    <hr>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = ""; // Change this if you have set a password for your database
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $sql = "INSERT INTO userdata (name) VALUES ('$name')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Name inserted successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    }
}

$conn->close();
?>
