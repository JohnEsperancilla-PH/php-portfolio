<?php 
session_start(); // Start the session

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: index.php'); // Redirect to index page if already logged in
    exit();
}

// Handling guest login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guest_login'])) {
    $guestname = trim($_POST['guestname']);
    
    // Validate guest name (you can add more validation as needed)
    if (!empty($guestname)) {
        $_SESSION['username'] = htmlspecialchars($guestname); // Store guest name in session
        header('Location: index.php'); // Redirect to index page for guests
        exit();
    } else {
        $error = "Please enter a valid name.";
    }
}

// Include common files for header and loader
include 'php-sections/loader.php';
include 'php-sections/header.php';
?>

<body class="dark-mode">
    <div class="container-fluid">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-lg-6 col-md-6 p-0" id="image-section" style="background-image: url(assets/images/login-page-1.jpg); background-size: cover; background-position: center;">
                <!-- Optional: You can add an overlay if needed -->
            </div>
            <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center" id="info-section">
                <h1 class="login-header">Guest Login</h1>
                <?php if (isset($error)): ?>
                    <div class="login-error"><?php echo $error; ?></div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <div class="login-username mb-3">
                        <label for="guestname" class="form-label">Your Name</label>
                        <input type="text" name="guestname" id="guestname" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="guest_login" class="btn btn-dark">Login as Guest</button>
                    </div>
                    <a href="login.php" class="btn btn-dark">Login as User</a> <!-- Guest login button -->
                </form>
                
            </div>
        </div>
    </div>

    <?php include 'php-sections/theme.php';?>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>