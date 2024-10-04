<?php include 'php-sections/header.php';?>

<div id="mySidebar" class="sidebar">
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