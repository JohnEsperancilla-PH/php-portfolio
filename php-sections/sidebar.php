<?php include 'php-sections/header.php';?>

<div id="mySidebar" class="sidebar">

    <?php 
        // Start the session only if it hasn't been started yet
        if (session_status() == PHP_SESSION_NONE) {
            session_start(); // Start the session if not already active
        }

        // Check if a user is logged in or is a guest
        if (isset($_SESSION['username'])) {
            echo "<a class='nav-item'>Hello, " . htmlspecialchars($_SESSION['username']) . "!</a>";
        }
    ?>
    <br>
    
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>

    <!-- Logout Button -->
    <a class="nav-item">
        <form method="POST" action="logout.php" style="display: inline;">
            <a class = "logout" href="logout.php">Logout</a>
        </form>
    </a>
</div>

<button class="openbtn" onclick="toggleNav()">☰</button>