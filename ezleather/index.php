<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZ Leather Bar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('leatherbg.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            scroll-behavior: smooth;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            margin-top: 10%;
            padding: 100px 0;
        }
        h1 {
            font-size: 3rem;
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
        .btn-guest {
            background-color: #6c757d;
            color: white;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: 0.3s;
            margin: 10px;
        }
        .btn-guest:hover {
            background-color: #5a6268;
            color: white;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.8);
        }
        .navbar a {
            color: white;
            font-weight: bold;
            margin: 0 10px;
        }
        .navbar a:hover {
            color: #ffc107;
        }
        section {
            padding: 150px 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
        }
        #about {
            margin-top: 300px;
        }
        #contact {
            margin-top: 1px;
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
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="overlay"></div>
    <div class="container hero-content" id="home">
        <h1>Welcome to EZ Leather Bar</h1>
        <p>Premium Leather Keychains & Bag Tags - Crafted Just for You</p>
        <div>
            <a href="login.php" class="btn btn-custom">Get Started</a>  
            <a href="guest.php" class="btn btn-custom">Guest</a>
            <a href="signup.php" class="btn btn-custom">Sign Up</a>
        </div>
    </div>

    <!-- About Us Section -->
    <section id="about">
        <h2>About Us</h2>
        <p>EZ Leather Bar specializes in high-quality, handcrafted leather keychains and bag tags. <br>
        We take pride in using premium materials and expert craftsmanship.</p>
        <p>Founded in 2020, our mission is to bring stylish and durable leather accessories to our customers.</p>
    </section>

    <!-- Contact Us Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: support@ezleatherbar.com</p>
        <p>Phone: +1 234 567 890</p>
        <p>Visit us at: 123 Leather Street, NY</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 EZ Leather Bar. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
