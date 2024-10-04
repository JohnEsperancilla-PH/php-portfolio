<?php include 'php-sections/session_check.php';?>
<?php include 'php-sections/loader.php';?>
<?php include 'php-sections/header.php';?>
<?php include 'php-sections/sidebar.php';?>

<body class="dark-mode">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center" style="height: 100vh;">
                <div class="col-lg-6 col-md-6 p-0" id="image-section" style="background-image: url(assets/images/landing-page-john.png); background-size: cover; background-position: center;">
                    <!-- Optional: You can add an overlay if needed -->
                </div>
                <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center" id="info-section">
                    <h1 class="landing-header">Hi there!</h1>
                    <h2 class="landing-name">I am John Esperancilla</h2>
                    <h5 class="landing-info">Computer Science Student - USLS</h5>
                    <p class="landing-content">This is a simple example of a website with a collapsible sidebar and theme toggle using PHP, HTML, CSS, and JavaScript.</p>
                    <a class = "landing-info" href="about.php">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'php-sections/theme.php';?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>