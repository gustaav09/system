<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    echo "Unauthorized access!";
    exit();
}

$user_id = $_SESSION['user_id']; // Make sure to store `user_id` in the session when logging in
$product = $_POST['product'];
$white_qty = intval($_POST['white_qty']);
$black_qty = intval($_POST['black_qty']);
$total_qty = $white_qty + $black_qty;

if ($total_qty < 200) {
    echo "Total quantity must be at least 200.";
    exit();
}

// Insert booking
$sql = "INSERT INTO bookings (user_id, product, white_qty, black_qty, status) VALUES (?, ?, ?, ?, 'Pending')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isii", $user_id, $product, $white_qty, $black_qty);

if ($stmt->execute()) {
    echo "Booking submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
