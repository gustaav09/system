<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/admin.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .top-nav {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 22px;
        }

        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background: #212529;
            padding-top: 60px;
            transition: 0.3s;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .dashboard-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .toggle-btn {
            font-size: 20px;
            cursor: pointer;
            position: absolute;
            left: 15px;
            top: 15px;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            .main-content {
                margin-left: 0;
            }
            .toggle-btn {
                display: block;
            }
        }
    </style>
</head>
<body>

    <div class="top-nav">
        <span class="toggle-btn" onclick="toggleSidebar()">☰</span>
        Admin Dashboard
        <a href="logout.php" class="btn btn-danger float-end me-3">Logout</a>
    </div>

    <div class="sidebar" id="sidebar">
        <a href="#">DASHBOARD</a>
        <a href="booking.php">BOOKINGS</a>
        <a href="stocks.php">STOCKS</a>
        <a href="reports.php">REPORTS</a>
        <a href="logout.php" class="logout">LOG OUT</a>
    </div>

    <div class="main-content">
        <h2>Dashboard Overview</h2>
        <div class="dashboard-card">
            <div class="row">
                <div class="col-md-3 text-center">
                    <h5>Total Bookings</h5>
                    <p>120</p>
                </div>
                <div class="col-md-3 text-center">
                    <h5>Stocks Left</h5>
                    <p>Leather: 50 | Perfumes: 30</p>
                </div>
                <div class="col-md-3 text-center">
                    <h5>Reports Generated</h5>
                    <p>15 This Month</p>
                </div>
                <div class="col-md-3 text-center">
                    <h5>Total Users</h5>
                    <p>200</p>
                </div>
            </div>
            <canvas id="chart"></canvas>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('chart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Bookings',
                    data: [12, 19, 3, 5, 2, 3, 10, 15, 9, 7, 11, 13],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)'
                }]
            }
        });

        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            if (sidebar.style.width === "250px") {
                sidebar.style.width = "0";
            } else {
                sidebar.style.width = "250px";
            }
        }
    </script>

</body>
</html>
