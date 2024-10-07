<div id="mySidebar" class="sidebar" style="display: flex; flex-direction: column; justify-content: space-between; height: 100vh; padding-bottom: 20px;">
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
    <a href="resume.php">Resume</a>
    <a href="#">Contact</a>

    <!-- Logout Button -->
    <a class="nav-item">
        <form method="POST" action="logout.php" style="display: inline;">
            <a class="logout" href="logout.php">Logout</a>
        </form>
    </a>

    <!-- Current Date and Time at the Bottom -->
    <div class="current-datetime" style="margin-top: auto; margin-bottom: 20px;"> <!-- Added margin-bottom -->
        <a class="current-datetime" style="font-weight: 300; display: block;">
            <?php
                // Set the timezone
                date_default_timezone_set('Asia/Manila');

                // Get the current date components
                $day = date('l'); // Full day name
                $month = date('F j, Y'); // Full month name, day, year
                $time = date('h:i A'); // Hour:Minute AM/PM

                // Display the formatted date and time
                echo $day . "<br>" . $month . "<br>" . $time;
            ?>
        </a>
    </div>
</div>

<button class="openbtn" onclick="toggleNav()">☰</button>