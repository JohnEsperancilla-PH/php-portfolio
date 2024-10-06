<?php include 'php-sections/loader.php';?>
<?php include 'php-sections/header.php';?>
<?php include 'php-sections/sidebar.php';?>

<body class="dark-mode">
    <div class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10" id="main">
                    <!-- SVG Profile Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="margin-top: 8rem;">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"/>
                    </svg>
                    <h1 class="page-header">Personal Portfolio Website</h1>
                    <h2 class="page-name">Hi, I am John Esperancilla</h2>
                    <h5 class="page-info">Computer Science Student - USLS</h5>
                    <p class="page-content">This is a simple example of a website with a collapsible sidebar and theme toggle using PHP, HTML, CSS, and JavaScript.</p>
                </div>
                <!-- Horizontal Line -->
                <?php include 'php-sections/horizontal.php'?>

                <div class="col-lg-8 col-md-10" id="main">
                    <!-- Tech Stack -->
                    <?php include 'php-sections/tech-stack.php'?>
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
