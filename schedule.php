<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Pick Up</title>
    <link rel="stylesheet" href="css/schedule.css">

    <style>
        .btn.schedule-btn {
            background-color: #03AC13;
            border: none;
            color: white;
            padding: 15px 0;
            text-align: center;
            text-decoration: none;
            display: block;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Pick Up Schedule</h1>

        <form action="#" method="POST" onsubmit="return showSuccessAlert()">
            
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="t3" required>
            </div>

            <div class="form-group">
                <label for="date">Pick Up Date:</label>
                <input type="date" id="date" name="t4" required>
            </div>

            <input type="submit" class="btn schedule-btn" value="Schedule Pick Up" name="submit"/>
        </form>
    </div>

<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {

        $address = $_POST['t3'];
        $_SESSION['address'] = $address;

        $date = $_POST['t4'];
        $_SESSION['date'] = $date;

        $schedule_id = $_SESSION['id'];

        $sql = "INSERT INTO `schedule`(`schedule_id`, `address`, `date`) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "iss", $schedule_id, $address, $date);

            if (mysqli_stmt_execute($stmt)) {

    // ✅ FINALIZE ORDER (CART → SCHEDULED)
    mysqli_query(
        $conn,
        "UPDATE user_orders 
         SET status = 'SCHEDULED' 
         WHERE order_id = '{$_SESSION['id']}' 
         AND status = 'CART'"
    );

    echo "<script>
            window.location.href='invoice.php';
          </script>";
}
 else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>
</body>

<!-- JavaScript for Date Restriction -->
<script>
    // Disable past dates and allow only next 30 days
    window.onload = function () {
        const dateInput = document.getElementById("date");

        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');

        const minDate = `${yyyy}-${mm}-${dd}`;

        const maxDateObj = new Date(today);
        maxDateObj.setDate(maxDateObj.getDate() + 30);

        const maxYYYY = maxDateObj.getFullYear();
        const maxMM = String(maxDateObj.getMonth() + 1).padStart(2, '0');
        const maxDD = String(maxDateObj.getDate()).padStart(2, '0');

        const maxDate = `${maxYYYY}-${maxMM}-${maxDD}`;

        dateInput.setAttribute("min", minDate);
        dateInput.setAttribute("max", maxDate);
    };

    function showSuccessAlert() {
        alert("New record inserted successfully!");
        return true;
    }
</script>
</html>
