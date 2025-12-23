<?php
require("connection.php");
session_start();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

<style>
table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
}
th, td {
    border: 1px solid #ddd;
    padding: 8px;
    vertical-align: top;
}
th {
    background-color: #f2f2f2;
}

/* Sticky header */
thead th {
    position: sticky;
    top: 0;
    background-color: #f2f2f2;
    z-index: 5;
}

/* Header */
.header {
    background: #03AC13;
    display: flex;
    justify-content: space-between;
    padding: 10px 60px;
    color: white;
}

button {
    padding: 8px 12px;
    cursor: pointer;
}
</style>
</head>

<body>

<div class="header">
    <h1>Admin Panel</h1>
    <form method="POST">
        <button name="Logout">Logout</button>
    </form>
</div>

<?php
/*if (isset($_POST['Logout'])) {
    session_destroy();
    header("location: admin_login.php");
    exit;
}*/
?>

<div class="container">
<table>

<thead>
<tr>
    <th>Order ID</th>
    <th>Customer Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Status</th>
    <th>Scrap Orders</th>
    <th>Item Exchange</th>
    <th>Schedule</th>
</tr>
</thead>

<tbody>

<?php
/* ✅ LATEST ORDERS FIRST */
$orderManagerQuery = "SELECT * FROM order_manager ORDER BY id DESC";
$orderManagerResult = mysqli_query($con, $orderManagerQuery);

while ($order = mysqli_fetch_assoc($orderManagerResult)) {

    /* ✅ STATUS RESOLUTION (PRIORITY BASED) */
    $statusCheck = mysqli_query(
        $con,
        "SELECT status FROM user_orders WHERE order_id='{$order['id']}'"
    );

    $order_status = "UNKNOWN";
    $hasCart = false;
    $hasScheduled = false;

    while ($s = mysqli_fetch_assoc($statusCheck)) {
        if ($s['status'] === 'CART') $hasCart = true;
        if ($s['status'] === 'SCHEDULED') $hasScheduled = true;
    }

    if ($hasCart) $order_status = "CART";
    else if ($hasScheduled) $order_status = "SCHEDULED";

    $statusColor = $order_status === 'SCHEDULED' ? 'green' : 'orange';

    echo "<tr>
        <td>{$order['id']}</td>
        <td>{$order['username']}</td>
        <td>{$order['mobile_no']}</td>
        <td>{$order['email']}</td>
        <td><strong style='color:$statusColor'>$order_status</strong></td>";

    /* 🧾 SCRAP ITEMS */
    echo "<td>
        <table>
        <tr><th>Scrap</th><th>Price</th><th>Qty</th><th>Image</th></tr>";

    $scrapQuery = mysqli_query(
        $con,
        "SELECT * FROM user_orders WHERE order_id='{$order['id']}'"
    );

    while ($scrap = mysqli_fetch_assoc($scrapQuery)) {
        $img = $scrap['file']
            ? "images/{$scrap['file']}"
            : "images/no-image.png";

        echo "<tr>
            <td>{$scrap['scrap_name']}</td>
            <td>{$scrap['price']}</td>
            <td>{$scrap['quantity']}</td>
            <td><img src='$img' width='50'></td>
        </tr>";
    }

    echo "</table></td>";

    /* 🔁 ITEM EXCHANGE */
    echo "<td>
        <table>
        <tr><th>Item</th><th>Price</th><th>Qty</th></tr>";

    $itemQuery = mysqli_query(
        $con,
        "SELECT * FROM item_exchange WHERE item_id='{$order['id']}'"
    );

    while ($item = mysqli_fetch_assoc($itemQuery)) {
        echo "<tr>
            <td>{$item['item_name']}</td>
            <td>{$item['item_price']}</td>
            <td>{$item['item_quantity']}</td>
        </tr>";
    }

    echo "</table></td>";

    /* 📅 SCHEDULE */
    echo "<td>
        <table>
        <tr><th>Address</th><th>Date</th></tr>";

    $scheduleQuery = mysqli_query(
        $con,
        "SELECT * FROM schedule WHERE schedule_id='{$order['id']}'"
    );

    while ($sch = mysqli_fetch_assoc($scheduleQuery)) {
        echo "<tr>
            <td>{$sch['address']}</td>
            <td>{$sch['date']}</td>
        </tr>";
    }

    echo "</table></td></tr>";
}
?>

</tbody>
</table>
</div>

</body>
</html>
