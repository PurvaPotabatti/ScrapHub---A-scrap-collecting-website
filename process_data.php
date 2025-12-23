<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Get data from page 2
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    // Process image upload
    $image_name = $_FILES['image']['name'];
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["image"]["name"]);
    // move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    // Insert data into the sample table
    $conn = new mysqli("localhost", "root", "", "test");
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO sample (name, age, file) VALUES ('$name', '$age', '$image_name')";
    
    if ($conn->query($sql) === TRUE) 
    {
        echo "New record inserted successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
