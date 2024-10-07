<!-- footer.php -->
<footer class="footer">
    <div class="footer-box">
        <div class="container text-center">
            <p class="footer-text">© <?php echo date("Y"); ?> John Esperancilla. All rights reserved.</p>
            <div class="social-links">
                <a href="https://github.com/JohnEsperancilla-PH/" target="_blank" class="footer-link">GitHub</a>
                <a href="https://www.facebook.com/janlunard/" target="_blank" class="footer-link">Facebook</a>
                <a href="https://www.instagram.com/john.esperancilla/" target="_blank" class="footer-link">Instagram</a>
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    font-family: "Poppins", sans-serif;
    color: var(--default-color);
    font-size: 14px;
    text-align: center;
    position: relative;
}

.footer-box {
    border-radius: 8px; /* Rounded corners */
    padding: 40px; /* Increased padding for a taller footer */
}

body.light-mode .footer-box {
    background-color: #eeeeee; /* Light mode footer background */
}

body.dark-mode .footer-box {
    background-color: #242424; /* Dark mode footer background */
}

.footer-text {
    margin: 0;
}

.social-links {
    margin: 10px 0;
}

.footer-link {
    color: inherit; /* Inherit color from the footer */
    text-decoration: none;
    margin: 0 10px;
}

.footer-link:hover {
    color: #007bff; /* Change color on hover */
}
</style>