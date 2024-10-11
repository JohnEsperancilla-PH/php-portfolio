<?php 
// Check if the session has expired
if (!isset($_SESSION['EXPIRES']) || $_SESSION['EXPIRES'] < time()) {
    // If expired, destroy the session and clear session data
    session_destroy();
    $_SESSION = array();
} else {
    // If still active, reset expiration time to 10 minutes from now
    $_SESSION['EXPIRES'] = time() + 600; // Set expiration to 10 minutes from now
}
?>