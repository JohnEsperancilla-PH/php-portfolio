let sidebarOpen = false;

function toggleNav() {
    if (sidebarOpen) {
        closeNav();
    } else {
        openNav();
    }
}

function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.querySelector(".content-wrapper").style.marginLeft = "250px";
    document.querySelector(".openbtn").style.left = "260px";
    sidebarOpen = true;
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-250px";
    document.querySelector(".content-wrapper").style.marginLeft = "0";
    document.querySelector(".openbtn").style.left = "10px";
    sidebarOpen = false;
}

// Theme toggle functionality
const themeToggle = document.getElementById('themeToggle');
const body = document.body;

// Set default to dark mode
body.classList.add('dark-mode');
localStorage.setItem('theme', 'dark');

// Check for saved theme preference
const currentTheme = localStorage.getItem('theme') || 'dark';
body.classList.add(`${currentTheme}-mode`);

themeToggle.addEventListener('click', function() {
    if (body.classList.contains('dark-mode')) {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
        localStorage.setItem('theme', 'light');
    } else {
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
    }
});

// Ensure sidebar is closed by default
window.onload = function() {
    closeNav();
};