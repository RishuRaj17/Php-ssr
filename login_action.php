<?php
// Start the session
session_start();

// Dummy credentials for the example (you should query your database instead)
$valid_username = "admin";
$valid_password = "password123";

// Get the posted username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the login
if ($username == $valid_username && $password == $valid_password) {
    // Set session variables
    $_SESSION['username'] = $username;
    
    // Redirect to welcome page0
    header("Location: welcome.php");
    exit;
} else {
    // Set an error message and redirect back to the login page
    $_SESSION['error'] = "Invalid username or password.";
    header("Location: login.php");
    exit;
}
?>
