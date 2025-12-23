<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <form action="process_data.php" method="post" enctype="multipart/form-data">
        <?php
        // Get the name and age from page 1
        $name = $_POST['name'];
        $age = $_POST['age'];
        ?>
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="age" value="<?php echo $age; ?>">
        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
