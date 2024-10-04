<?php include 'php-sections/loader.php';?>
<?php include 'php-sections/header.php';?>
<?php include 'php-sections/sidebar.php';?>

<body class="dark-mode">
    <div class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10" id="main">
                    <!-- SVG Profile Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="profile-icon" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                    <h1 class="page-header">Personal Portfolio Website</h1>
                    <h2 class="page-name">Hi, I am John Esperancilla</h2>
                    <h5 class="page-info">Computer Science Student - USLS</h5>
                    <p class="page-content">This is a simple example of a website with a collapsible sidebar and theme toggle using PHP, HTML, CSS, and JavaScript.</p>
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
