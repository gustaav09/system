<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest - EZ Leather Bar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('leatherbg.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            min-height: 100vh;
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
            padding-top: 100px;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        p {
            font-size: 1.3rem;
        }
        .btn-custom {
            background-color: #ffc107;
            color: black;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: 0.3s;
            margin: 10px;
        }
        .btn-custom:hover {
            background-color: #e0a800;
            color: white;
        }
        .btn-login {
            background-color: #17a2b8;
            color: white;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: 0.3s;
            margin: 10px;
        }
        .btn-login:hover {
            background-color: #138496;
        }
        section {
            padding: 50px 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            margin-top: 50px;
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
            color: #ffc107;
            font-size: 1rem;
            margin-top: 1px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">EZ Leather Bar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Guest Welcome Section -->
    <div class="overlay"></div>
    <div class="container">
        <h1>Welcome, Guest!</h1>
        <p>You can browse our collection of leather keychains and bag tags.</p>
        <p>For a better experience, log in or sign up to place an order.</p>
        <a href="products.php" class="btn btn-custom">Browse Products</a>
        <a href="login.php" class="btn btn-login">Login</a>
    </div>

    <!-- Sample Product Showcase (Optional) -->
    <section>
        <h2>Our Best Sellers</h2>
        <p>Take a look at our premium leather keychains and bag tags.</p>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="keychain1.jpg" class="img-fluid rounded mb-3" alt="Leather Keychain">
                <p>Classic Leather Keychain</p>
            </div>
            <div class="col-md-3">
                <img src="keychain2.jpg" class="img-fluid rounded mb-3" alt="Leather Bag Tag">
                <p>Personalized Bag Tag</p>
            </div>
        </div>
        <a href="products.php" class="btn btn-custom mt-3">View All Products</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 EZ Leather Bar. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
