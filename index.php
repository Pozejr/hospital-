<?php
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['doctor_id'])) {
    header("Location: doctor_login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your existing styles or additional styles */
        .button {
            margin: 10px;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1 class="text-center my-4">Hospital Management System</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">HMS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="add_patient.html">Add Patient</a></li>
                    <li class="nav-item"><a class="nav-link" href="view_patient.html">View Patient</a></li>
                    <li class="nav-item"><a class="nav-link" href="update_patient.html">Update Patient</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <div class="main-content text-center my-5">
        <h2>Welcome to the Hospital Management System</h2>
        <p>Use the navigation above to manage patient information.</p>
        <a href="add_patient.html" class="btn btn-primary button">Add New Patient</a>
        <a href="view_patient.html" class="btn btn-primary button">View Patient Information</a>
        <a href="update_patient.html" class="btn btn-primary button">Update Patient Information</a>
    </div>
</div>

<footer class="bg-light text-center py-4">
    <p>Hospital Management System &copy; 2024</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
