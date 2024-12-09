<?php
	session_start();
	require "db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Walking W</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        footer {
            background-color: #2a9d4e;
            color: white;
            padding: 10px 0;
        }

        .card-body {
            padding: 2rem;
            font-size: 1.1rem;
        }

        .card-title {
            font-size: 1.3rem;
            color: #2a9d4e;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="logo.png" alt="Logo">
                <span>Walking W</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="Index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="Services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="About_us.php">About</a></li>
                </ul>
                <div class="d-flex ms-3">
                    <button class="btn btn-outline-light me-2" title="Cart">🛒</button>
					<?php
                    if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
                        echo '<h2 class="ms-3 me-2 text-light mb-0">' . htmlspecialchars($_SESSION['user_name']) . '</h2>';
                        echo '<a type="button" style="height: 10%" class="btn btn-sm btn-outline-light ms-2 mt-1" href="#" onclick="logout()">Logout</a>';
                    } else {
                        echo '<a type="button" class="btn btn-outline-light me-2" href="Login.php">Login</a>';
                        echo '<a type="button" class="btn btn-outline-light" href="Register.php">Register</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container text-center py-5">
        <h2>About Walking W</h2>
        <p>Co-founded by Rafi, Karlos, Brett, Kian, and Nat, Walking W is a dynamic and diverse footwear company that presents a compelling range of shoes catering to various passions and preferences.</p>

        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mission</h5>
                        <p class="card-text">Empower with style and innovation; Walking W reimagines footwear for athletes and individuals, inspiring passions and embracing uniqueness globally.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vision</h5>
                        <p class="card-text">To reshape footwear by blending performance and expression, leaving a positive footprint on the planet, uniting diverse communities under a banner of individuality and sustainability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Core Values</h5>
                        <p class="card-text">Walking W values innovation, sustainability, inclusivity, and individuality. We believe in making a positive impact on the environment while fostering a sense of community through our products.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Information</h5>
                        <p class="card-text">Email: walkingW@gmail.com<br>Phone No: 09912387654</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center fixed-bottom">
        <div>&copy; 2024 Walking W. All rights reserved.</div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
