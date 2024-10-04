<style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: black;
        z-index: 500;
        height: 100vh;
        width: 100%;
        opacity: 1;
    }

    .no-js #preloader, .oldie #preloader {
        display: none;
    }

    #loader {
        width: auto; /* Adjust as needed */
        height: auto; /* Adjust as needed */
        max-width: 100px; /* Set a maximum width for responsiveness */
        max-height: 100px; /* Set a maximum height for responsiveness */
    }

    /* Page Loaded Styles */
    .ss-loaded #preloader {
        opacity: 0;
        visibility: hidden;
        transition: all .6s .9s ease-in-out;
    }
</style>

<div id="preloader"> 
    <img id="loader" src="assets/images/preloader-logo.png" alt="Loading...">
</div>

<script>
    window.addEventListener('load', function() {
        document.body.classList.add('ss-loaded');
    });
</script>