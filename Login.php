<?php
	require "db_connection.php";
	
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walking W</title>
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
    </style>
</head>
<body>
    <!-- Header -->
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
                    <li class="nav-item"><a class="nav-link" href="">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="Services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="About_us.php">About</a></li>
                </ul>
                <div class="d-flex ms-3">
                    <button class="btn btn-outline-light me-2" title="Cart">🛒</button>
                    <a type="button" class="btn btn-outline-light me-2" href="Login.php">Login</a>
					<a type="button" class="btn btn-outline-light me-2" href="Register.php">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container text-center py-5">
        <form action="php_login.php" method="POST" id="log-in-form">
			<div class="row justify-content-center">
				<div>
					<h1 class="fw-bold">Welcome to Walking W!</h1>
					<h3>Log In Page</h3>
				</div>
				<div class="mt-5">
					<label for="username"> Username:</label>
					<input style="width: 295px" type="text" id="username" name="username" placeholder="Username" required>
  				</div>
				<div class="mt-3">
					<label for="password"> Password:</label>
					<input style="width: 300px" type="password" id="password" name="password" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-outline-success me-2 mt-4" style="width: 100px">Log In</button>
			</div>
		</form>
    </main>

    <!-- Footer -->
    <footer class="text-center fixed-bottom">
        <div>&copy; 2024 Walking W. All rights reserved.</div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="myJS.js"></script>
</body>
</html>
