<?php 
session_start(); // Start the session

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: index.php'); // Redirect to index page if already logged in
    exit();
}

// Initialize variables
$username = '';
$password = '';
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === 'John' && $password === '123') {
        $_SESSION['username'] = $username; // Set session variable
        header('Location: index.php'); // Redirect to index page after successful login
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}
?>