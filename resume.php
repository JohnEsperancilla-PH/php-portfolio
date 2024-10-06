<?php include 'php-sections/loader.php';?>
<?php include 'php-sections/header.php';?>
<?php include 'php-sections/sidebar.php';?>

<body class="dark-mode">
    <div class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10" id="main">
                    <!-- SVG Profile Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="profile-icon" viewBox="0 0 16 16">
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                    </svg>
                    <!-- Header -->
                    <h1 class="page-header">My Resume</h1>
                    <h2 class="page-name">Hi, I am John Esperancilla</h2>
                    <h5 class="page-info">Computer Science Student - USLS</h5>
                    <p class="page-content">This is a simple example of a website with a collapsible sidebar and theme toggle using PHP, HTML, CSS, and JavaScript.</p>
                </div>
                <!-- Horizontal Line -->
                <?php include 'php-sections/horizontal.php'?>
                <!-- Downloadable Resume -->
                <?php include 'php-sections/resume-download.php'?>
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
