<?php
session_start();

/* 🔐 SESSION CHECK */
if (!isset($_SESSION['id'])) {
    echo "<script>
        alert('Session expired. Please add items again.');
        window.location.href='categories_demo.php';
    </script>";
    exit;
}

/* 🔌 DB CONNECTION */
$con = mysqli_connect("localhost", "root", "", "test");
if (!$con) {
    die("DB Connection failed");
}

$order_id = $_SESSION['id'];

/* 📦 FETCH CURRENT CART ITEMS ONLY */
$query = "
    SELECT scrap_name 
    FROM user_orders 
    WHERE order_id = '$order_id'
    AND status = 'CART'
";

$result = mysqli_query($con, $query);

$scrap_items = [];
while ($row = mysqli_fetch_assoc($result)) {
    $scrap_items[] = $row['scrap_name'];
}

/* ❌ SAFETY CHECK */
if (count($scrap_items) === 0) {
    echo "<script>
        alert('No scrap items found.');
        window.location.href='categories_demo.php';
    </script>";
    exit;
}

/* 📤 IMAGE UPLOAD HANDLER */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($scrap_items as $scrap) {

        if (!empty($_FILES[$scrap]['name'])) {

            $filename = time() . "_" . basename($_FILES[$scrap]['name']);
            $target = "images/" . $filename;

            move_uploaded_file($_FILES[$scrap]['tmp_name'], $target);

            mysqli_query(
                $con,
                "UPDATE user_orders 
                 SET file = '$filename'
                 WHERE order_id = '$order_id'
                 AND scrap_name = '$scrap'
                 AND status = 'CART'"
            );
        }
    }

    /* 🔁 EXCHANGE CONFIRMATION */
    echo "<script>
        var choice = confirm('Do you want to exchange your scrap with items?');
        if (choice) {
            window.location.href = 'item_exchange_demo.php';
        } else {
            window.location.href = 'schedule.php';
        }
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload Scrap Images</title>

<link rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

<style>
body {
    background:#f4f6f5;
}
.container {
    margin-top:50px;
    background:#fff;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,0.1);
}
h2 {
    color:#6ab04c;
}
.upload-btn {
    background:#6ab04c;
    color:#fff;
    border:none;
    padding:10px 25px;
    border-radius:6px;
}
.upload-btn:hover {
    background:#5d9942;
}
</style>
</head>

<body>

<div class="container">
    <h2>Upload Images for Selected Scrap Items</h2>

    <form method="POST" enctype="multipart/form-data">

        <?php foreach ($scrap_items as $item): ?>
            <div class="form-group">
                <label><strong><?= htmlspecialchars($item) ?></strong></label>
                <input type="file"
                       name="<?= htmlspecialchars($item) ?>"
                       class="form-control-file"
                       accept="image/*"
                       required>
            </div>
        <?php endforeach; ?>

        <button class="upload-btn">Upload Images</button>
    </form>
</div>

</body>
</html>
