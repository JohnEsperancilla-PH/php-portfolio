<?php $title = "Portfolio - John Esperancilla";?> <!-- Title for this page -->
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
                        <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708m-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                    </svg>
                    <h1 class="page-header">My Previous Works!</h1>
                    <h2 class="page-name">Check out my simple web-based games</h2>
                    <p class="page-content">These projects are made for fun! Used HTML, CSS, and JavaScript. These are live and connected to my websites. Try to interact with them.</p>
                </div>
                
                    <!-- Horizontal Line -->
                    <?php include 'php-sections/horizontal.php'?>

                <div class="col-lg-8 col-md-10" id="main">
                    <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe src="https://johnesperancilla.com/playground/xox.html" frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe src="https://johnesperancilla.com/playground/othello.html" frameborder="0"></iframe>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>

                <?php include 'php-sections/horizontal.php'?>
                
                <div class="col-lg-8 col-md-10" id="main">
                    <h2 class="page-name">Check out my simple personal website!</h2>
                    <p class="page-content">You can also check it out here <a href="https://www.johnesperancilla.com" target="_blank">johnesperancilla.com</a></p>
                </div>

                <!-- Horizontal Line -->
                <?php include 'php-sections/horizontal.php'?>
                
                <div class="col-lg-8 col-md-10" id="main">
                    <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe src="https://johnesperancilla.com/" frameborder="0"></iframe>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
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

    <?php include 'php-sections/footer.php'; ?>
</body>
</html>