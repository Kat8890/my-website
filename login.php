<?php
session_start(); // Start a session

// Dummy credentials for demonstration
$valid_username = "user";
$valid_password = "password";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true; // Set session variable
        header("Location: dashboard.php"); // Redirect to a dashboard page
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>