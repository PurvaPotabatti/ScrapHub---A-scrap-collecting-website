<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link rel="stylesheet" href="css/Invoice.css">

    <style>
/* Action buttons container */
.invoice-actions {
    margin-top: 40px;
    text-align: center;
}

/* Common button styling */
.invoice-btn {
    background-color: #6ab04c;   /* ScrapHub green */
    color: #ffffff;
    border: none;
    padding: 12px 28px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 6px;
    cursor: pointer;
    margin: 0 10px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

/* Hover effect */
.invoice-btn:hover {
    background-color: #5d9942; /* darker green */
    transform: translateY(-2px);
}

/* Hide buttons when printing */
@media print {
    .invoice-actions {
        display: none;
    }
}
</style>


</head>
<body>

<div class="container invoice">
    <div class="invoice-header">
        <div class="ui left aligned grid">
            <div class="row">
                <div class="left floated left aligned six wide column">
                    <div class="ui">
                        <h1 class="ui header pageTitle">
                            ScrapHub <small class="ui sub header">Invoice</small>
                        </h1>
                        <h4 class="ui sub header invDetails">
                            NO: <?php echo $_SESSION['id']; ?> |
                            Date: <?php echo date('m/d/Y'); ?>
                        </h4>
                    </div>
                </div>

                <div class="right floated left aligned six wide column">
                    <div class="ui">
                        <div class="column two wide right floated">
                            <img class="logo" src="img/logo.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPANY & CUSTOMER DETAILS -->
    <div class="ui segment cards">

        <div class="ui card">
            <div class="content">
                <div class="header">Company Details</div>
            </div>
            <div class="content">
                <ul>
                    <li><strong>Name:</strong> ScrapHub</li>
                    <li><strong>Address:</strong> GP, Solapur</li>
                    <li><strong>Phone:</strong> (+61)404123123</li>
                    <li><strong>Email:</strong> scraphub@123.com</li>
                    <li><strong>Contact:</strong> Rishita Gojgekar</li>
                </ul>
            </div>
        </div>

        <div class="ui card customercard">
            <div class="content">
                <div class="header">Customer Details</div>
            </div>
            <div class="content">
                <ul>
                    <li><strong>Name:</strong> <?php echo $_SESSION['user_name']; ?></li>
                    <li><strong>Address:</strong> <?php echo $_SESSION['address']; ?></li>
                    <li><strong>Phone:</strong> <?php echo $_SESSION['mobile_number']; ?></li>
                    <li><strong>Email:</strong> <?php echo $_SESSION['email_id']; ?></li><br>
                    <li><strong>Pickup Date:</strong> <?php echo $_SESSION['date']; ?></li><br>
                    <li><strong>Scrap to be sold:</strong></li>
                </ul>
            </div>

            <!-- SCRAP TABLE -->
            <div class="content">
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Scrap Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Scrap Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $scrap_total = 0;
                        $select_query2 = "SELECT * FROM user_orders WHERE order_id='{$_SESSION['id']}' AND status='SCHEDULED'";

                        $order_result = mysqli_query($con, $select_query2);

                        if ($order_result) {
                            while ($order_fetch = mysqli_fetch_assoc($order_result)) {
                                $scrap_total += ($order_fetch['price'] * $order_fetch['quantity']);
                                $image_path = "images/" . $order_fetch['file'];

                                echo "
                                <tr>
                                    <td>{$order_fetch['scrap_name']}</td>
                                    <td>{$order_fetch['price']}</td>
                                    <td>{$order_fetch['quantity']}</td>
                                    <td>
                                        <img src='$image_path' style='width:50px;height:50px'>
                                    </td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <div id="totalAmount">
                    <?php echo "Total scrap amount = " . $scrap_total; ?>
                </div>
            </div>

            <!-- ITEM EXCHANGE -->
            <div class="content">
                <ul>
                    <li><strong>Item to be swapped with:</strong></li>
                </ul>

                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $item_total = 0;
                        $select_query3 = "SELECT * FROM item_exchange WHERE item_id='{$_SESSION['id']}'";
                        $item_result = mysqli_query($con, $select_query3);

                        if ($item_result) {
                            while ($item_fetch = mysqli_fetch_assoc($item_result)) {
                                $item_total += ($item_fetch['item_price'] * $item_fetch['item_quantity']);

                                echo "
                                <tr>
                                    <td>{$item_fetch['item_name']}</td>
                                    <td>{$item_fetch['item_price']}</td>
                                    <td>{$item_fetch['item_quantity']}</td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <div id="totalAmount">
                    <?php echo "Total swap with item amount = " . $item_total; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔘 ACTION BUTTONS -->
    <div class="invoice-actions">
    <button class="invoice-btn" onclick="window.print()">
        Print Invoice
    </button>

    <button class="invoice-btn" onclick="goHome()">
        Go to Home
    </button>
</div>



</div>

<script>
function goHome() {
    <?php $_SESSION['invoice_completed'] = true; ?>
    window.location.href = "index.php";
}
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
