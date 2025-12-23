<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <h2>Upload Your Image:</h2>
    <form action="" method="post" enctype="multipart/form-data" target="_self">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" name="upload" value="Upload Image">
    </form>
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

if(isset($_POST['upload'])) {
    if (isset($_FILES['image'])) {
        // Form 2: Upload image and insert its path into the database
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
            $sql = "INSERT INTO userdata (image_path) VALUES ('$image_path')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Image uploaded successfully');</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            }
        } 
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
}

$conn->close();
?>
