<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Database Connection
include 'db.php';

// Fetch stock levels
$sql = "SELECT * FROM stocks";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock Management - EZ Leather Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2 class="text-center">Stock Management</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Product</th>
                <th>White Stock</th>
                <th>Black Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo $row['white_stock']; ?></td>
                <td><?php echo $row['black_stock']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
