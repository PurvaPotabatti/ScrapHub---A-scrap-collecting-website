<?php
$conn = new mysqli("localhost", "root", "", "test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM sample";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
        // Display the image
        $image_path = "img/" . $row["file"]; // Assuming images are stored in a directory named "uploads"
        echo '<img src="' . $image_path . '" alt="Image" style="max-width: 200px; max-height: 200px;">';
        echo "<br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
