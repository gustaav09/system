<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $phone = htmlspecialchars($_POST['phone']);
    $quantity = intval($_POST['quantity']);

    $items = isset($_POST['items']) ? implode(", ", $_POST['items']) : "None";
    $leather_types = isset($_POST['leather_types']) ? implode(", ", $_POST['leather_types']) : "None";

    echo "<h2>Booking Confirmation</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Quantity:</strong> $quantity</p>";
    echo "<p><strong>Selected Items:</strong> $items</p>";
    echo "<p><strong>Type of Leather:</strong> $leather_types</p>";
}
?>
