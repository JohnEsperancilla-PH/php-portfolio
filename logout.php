<?php include 'php-sections/loader.php';?>

<?php 
    session_start(); // Start the session

    // Clear specific session variables if necessary
    unset($_SESSION['username']); // Clear the username variable

    // Destroy all session data
    session_destroy(); // Destroy the session

    // Redirect to login page
    header('Location: login.php'); 
    exit();

?>
