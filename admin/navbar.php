<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar and Sidebar Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       .navbar-collapse {
            flex-grow: 0 !important;
        }
        .navbar {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            z-index: 1000;
        }
        body {
            display: flex;
        }
        @media (max-width: 768px) {
            .sidebar {
                display: none !important;
            }
        }
        @media (min-width: 769px) {
            .navbar {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-warning fs-4 fw-bold" href="#">StudySponsor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="admindashboard.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../main.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
