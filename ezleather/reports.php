<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Database Connection
include 'db.php';

// Fetch total orders & revenue
$sql = "SELECT product, SUM(white_qty + black_qty) AS total_qty, SUM(white_qty * 5 + black_qty * 5) AS total_sales FROM bookings GROUP BY product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales Reports - EZ Leather Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2 class="text-center">Sales Reports</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Product</th>
                <th>Total Quantity Sold</th>
                <th>Total Sales (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo $row['total_qty']; ?></td>
                <td>₱<?php echo number_format($row['total_sales'], 2); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
