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
            min-height: 100vh;
            position: relative;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.75);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .container {
            position: relative;
            z-index: 2;
            text-align: center;
            padding-top: 120px;
        }
        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.4rem;
            max-width: 700px;
            margin: 0 auto 20px;
        }
        .btn-custom, .btn-login {
            font-size: 1.2rem;
            padding: 15px 30px;
            border-radius: 30px;
            transition: transform 0.2s ease;
            margin: 10px;
        }
        .btn-custom:hover, .btn-login:hover {
            transform: scale(1.05);
        }
        .highlight-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
            margin-top: 30px;
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
            color: #ffc107;
            font-size: 1rem;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>

    <div class="container">
        <h1>Welcome to EZ Leather Bar!</h1>
        <p>Explore our premium collection of handcrafted leather keychains and bag tags.</p>
        <p>Sign up for an account to access exclusive deals and seamless booking.</p>
        
        <div class="highlight-box">
            <a href="products.php" class="btn btn-warning btn-custom">Browse Products</a>
            <a href="signup.php" class="btn btn-info btn-login">Sign Up</a>
            <a href="login.php" class="btn btn-light btn-login">Login</a>
        </div>
    </div>

    <footer>
        <p>© 2025 EZ Leather Bar. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
