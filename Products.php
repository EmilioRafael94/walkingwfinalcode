<?php
	session_start();
	require "db_connection.php";
	
	
	$food_items = $db->Menu->find(['Type' => 'Food'],['sort' => ['Description' => 1]]);
	$drink_items = $db->Menu->find(['Type' => 'Drink'],['sort' => ['Description' => 1]]);
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
    <main class="container justify-content-center py-5">
		<div class="container">
			<nav class="nav nav-pills justify-content-center">
				<a class="btn btn-outline-success btn-lg mx-2" onclick="showCategory('basketball-products')">Basketball</a>
				<a class="btn btn-outline-success btn-lg mx-2" onclick="showCategory('soccer-products')">Soccer</a>
				<a class="btn btn-outline-success btn-lg mx-2" onclick="showCategory('training-products')">Training</a>
				<a class="btn btn-outline-success btn-lg mx-2" onclick="showCategory('casual-products')">Casual</a>
			</nav>
		</div>
        <div class="mt-3 row">
                <div class="col-md-8 mb-3">
                    <div class="basketball-products text-center">
                        <h2 class="fw-bold mb-4">Basketball</h2>
                        <div class="row">
                            <?php
                            foreach ($drink_items as $item) {
                                echo '<div class="col-md-6 mb-6">';
                                echo '<a href="#" class="card-link text-decoration-none" onclick="addToOrder(\'' . $item['Description'] . '\', ' . $item['Price'] . ')">';
                                echo '<div class="card">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title text-center">' . $item['Description'] . '</h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
					<div class="soccer-products text-center">
                        <h2 class="fw-bold mb-4">Soccer</h2>
                        <div class="row">
                            <?php
                            foreach ($drink_items as $item) {
                                echo '<div class="col-md-6 mb-6">';
                                echo '<a href="#" class="card-link text-decoration-none" onclick="addToOrder(\'' . $item['Description'] . '\', ' . $item['Price'] . ')">';
                                echo '<div class="card">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title text-center">' . $item['Description'] . '</h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
					<div class="training-products text-center">
                        <h2 class="fw-bold mb-4">Training</h2>
                        <div class="row">
                            <?php
                            foreach ($drink_items as $item) {
                                echo '<div class="col-md-6 mb-6">';
                                echo '<a href="#" class="card-link text-decoration-none" onclick="addToOrder(\'' . $item['Description'] . '\', ' . $item['Price'] . ')">';
                                echo '<div class="card">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title text-center">' . $item['Description'] . '</h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
					<div class="casual-products text-center">
                        <h2 class="fw-bold mb-4">Casual</h2>
                        <div class="row">
                            <?php
                            foreach ($drink_items as $item) {
                                echo '<div class="col-md-6 mb-6">';
                                echo '<a href="#" class="card-link text-decoration-none" onclick="addToOrder(\'' . $item['Description'] . '\', ' . $item['Price'] . ')">';
                                echo '<div class="card">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title text-center">' . $item['Description'] . '</h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                            ?>
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
	<script src="myJS.js"></script>
	<script>
		<script>
    // Function to show the selected category
		function showCategory(category) {
			// Hide all categories
			document.querySelectorAll('.basketball-products, .soccer-products, .training-products, .casual-products').forEach(function (section) {
				section.style.display = 'none';
			});

			// Show the selected category
			document.querySelector(`.${category}`).style.display = 'block';
		}

		// Show the default category on page load
		window.onload = function () {
			showCategory('basketball-products');
		};
</script>
	</script>
</body>
</html>
