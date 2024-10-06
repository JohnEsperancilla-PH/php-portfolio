<?php include 'php-sections/login-system.php';?>
<?php include 'php-sections/loader.php';?>
<?php include 'php-sections/header.php';?>

<body class="dark-mode">
    <div class="container-fluid">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-lg-6 col-md-6 p-0" id="image-section" style="background-image: url(assets/images/login-page-1.jpg); background-size: cover; background-position: center;">
                <!-- Optional: You can add an overlay if needed -->
            </div>
            <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center" id="info-section">
                <h1 class="login-header">Login</h1>
                <?php if ($error): ?>
                    <div class="login-error"><?php echo $error; ?></div>
                <?php endif; ?>
                

                
                <form method="POST" action="">
                    <div class="login-username mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="login-password mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-dark">Login as User</button> <!-- Standard login button -->
                    </div>
                    <a href="login-guest.php" class="btn btn-dark">Login as Guest</a> <!-- Guest login button -->
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