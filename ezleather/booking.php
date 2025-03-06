<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

include 'db.php';

// Fetch all bookings
$sql = "SELECT b.id, u.username, b.product, b.white_qty, b.black_qty, b.status, b.order_date 
        FROM bookings b 
        JOIN users u ON b.user_id = u.id 
        ORDER BY b.order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2 class="text-center">Manage Bookings</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Product</th>
                <th>White Qty</th>
                <th>Black Qty</th>
                <th>Total</th>
                <th>Status</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo $row['white_qty']; ?></td>
                <td><?php echo $row['black_qty']; ?></td>
                <td><?php echo $row['white_qty'] + $row['black_qty']; ?></td>
                <td>
                    <span class="badge bg-<?php echo ($row['status'] == 'Pending') ? 'warning' : (($row['status'] == 'Approved') ? 'success' : 'danger'); ?>">
                        <?php echo $row['status']; ?>
                    </span>
                </td>
                <td><?php echo $row['order_date']; ?></td>
                <td>
                    <form method="POST" action="update_booking.php">
                        <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                        <select name="status" class="form-select">
                            <option value="Pending" <?php echo ($row['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                            <option value="Approved" <?php echo ($row['status'] == 'Approved') ? 'selected' : ''; ?>>Approved</option>
                            <option value="Declined" <?php echo ($row['status'] == 'Declined') ? 'selected' : ''; ?>>Declined</option>
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm mt-2">Update</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
