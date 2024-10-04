<?php 
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to login page
    exit(); // Ensure no further code is executed
}

// The rest of your index.php content goes here
?>