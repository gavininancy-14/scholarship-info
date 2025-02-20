<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-wrap: nowrap;
        }

        .contents {
            flex-grow: 1;
            padding: 20px;
        }

        .nav {
            gap: 20px;
        }

        .content {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 20px;
            border-radius: 8px;
        }

        .icon-wrapper {
            font-size: 24px;
            color: #007bff;
        }

        h3 {
            font-size: 15px;
            font-weight: 400;
        }

        canvas {
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Navbar for Mobile Sidebar Trigger -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                <i class="fas fa-bars"></i> Menu
            </button>
        </div>
    </nav>
    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
        <div class="offcanvas-header">
            <h5>Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="nav flex-column">
                <a class="nav-link" href="admindashboard.php">Home</a>
                <a class="nav-link" href="add_scholarship.php">Add Scholarships</a>
                <a class="nav-link" href="add_articles.php">Add Articles</a>
                <a class="nav-link" href="add_detailed_articles.php">Add Detailed Articles</a>
                <a class="nav-link" href="profile.php">Profile</a>
                <a class="nav-link" href="login.php">Logout</a>
            </nav>
        </div>
    </div>

    <?php include('side.php'); ?>

    <div class="contents">
        <h1>Welcome to Admin Dashboard</h1>
        <p>This is where the main content goes.</p>

        <div class="row g-4">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "scholarship";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Queries to count different categories
            $queries = [
                "total_scholarships" => "SELECT COUNT(*) AS total FROM add_scholarship",
                "total_articles" => "SELECT COUNT(*) AS total FROM articals",
                "total_detailed_articles" => "SELECT COUNT(*) AS total FROM detailed_articles",
                "total_students" => "SELECT COUNT(*) AS total FROM signup WHERE role = 'student'",
                "total_parents" => "SELECT COUNT(*) AS total FROM signup WHERE role = 'parent'"
            ];

            $counts = [];

            foreach ($queries as $key => $sql) {
                $result = $conn->query($sql);
                $counts[$key] = ($result->num_rows > 0) ? $result->fetch_assoc()['total'] : 0;
            }

            $conn->close();
            ?>

            <!-- Dashboard Cards -->
            <?php
            $dashboardItems = [
                ["icon" => "fa-user", "label" => "Total Scholarships", "count" => $counts['total_scholarships']],
                ["icon" => "fa-building", "label" => "Total Articles", "count" => $counts['total_articles']],
                ["icon" => "fa-clipboard-list", "label" => "Total Detailed Articles", "count" => $counts['total_detailed_articles']],
                ["icon" => "fa-user", "label" => "Total Student Users", "count" => $counts['total_students']],
                ["icon" => "fa-user", "label" => "Total Parent Users", "count" => $counts['total_parents']],
            ];

            foreach ($dashboardItems as $item) {
                echo '
                    <div class="col-md-4">
                        <div class="content d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper me-3"><i class="fas ' . $item['icon'] . '"></i></span>
                                <h3>' . $item['label'] . '</h3>
                            </div>
                            <h4>' . $item['count'] . '</h4>
                        </div>
                    </div>
                ';
            }
            ?>
        </div>

        <!-- Chart Section -->
        <div class="py-5">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <!-- Bootstrap and Chart.js Scripts -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Chart.js configuration
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Scholarships', 'Articles', 'Detailed Articles', 'Students', 'Parents'],
                datasets: [{
                    label: 'Counts',
                    data: [
                        <?php echo $counts['total_scholarships']; ?>,
                        <?php echo $counts['total_articles']; ?>,
                        <?php echo $counts['total_detailed_articles']; ?>,
                        <?php echo $counts['total_students']; ?>,
                        <?php echo $counts['total_parents']; ?>
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
