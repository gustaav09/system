<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZ Leather Bar - User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('leatherbg.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            min-height: 100vh;
            padding-top: 60px;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .container {
            position: relative;
            z-index: 2;
        }
        .dashboard-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 10px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: auto;
        }
        .product {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }
        .product:hover {
            transform: scale(1.05);
        }
        img {
            width: 100%;
            border-radius: 10px;
        }
        h3 {
            margin: 10px 0;
            font-size: 20px;
            color: black;
        }
        .btn-logout {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }
        .btn-logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="overlay"></div>

<div class="container">
    <div class="dashboard-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php" class="btn-logout">Logout</a>
        
        <h3 class="mt-4">Available Products</h3>
        <div class="grid">
            <div class="product" onclick="openModal('Leather Keychain')">
                <img src="assets/keychains1.jpg" alt="Leather Keychain">
                <h3>Leather Keychain</h3>
            </div>
            <div class="product" onclick="openModal('Personalized Bag Tag')">
                <img src="assets/bagtags.jpg" alt="Personalized Bag Tag">
                <h3>Personalized Bag Tag</h3>
            </div>
        </div>
    </div>
</div>

<!-- Order Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productTitle">Select Quantity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <label>White:</label>
                <input type="number" id="whiteQty" class="form-control" min="0" value="0" oninput="updateTotal()">
                
                <label>Black:</label>
                <input type="number" id="blackQty" class="form-control" min="0" value="0" oninput="updateTotal()">
                
                <label>Total Quantity:</label>
                <input type="number" id="totalQty" class="form-control" min="200" value="200" readonly>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="confirmOrder()">Confirm</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(productName) {
        document.getElementById('productTitle').innerText = productName;
        let modal = new bootstrap.Modal(document.getElementById('orderModal'));
        modal.show();
    }

    function updateTotal() {
        let white = parseInt(document.getElementById('whiteQty').value) || 0;
        let black = parseInt(document.getElementById('blackQty').value) || 0;
        document.getElementById('totalQty').value = white + black;
    }

    function confirmOrder() {
        let white = parseInt(document.getElementById('whiteQty').value) || 0;
        let black = parseInt(document.getElementById('blackQty').value) || 0;
        let total = parseInt(document.getElementById('totalQty').value);

        if (total < 200) {
            alert("Total quantity must be at least 200.");
            return;
        }

        alert("Order Confirmed: " + white + " White, " + black + " Black.");
    }
</script>

</body>
</html>
