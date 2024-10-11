let sidebarOpen = false;
let inactivityTimer;

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

body.classList.add('dark-mode');
localStorage.setItem('theme', 'dark');

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

// End session on tab close
window.addEventListener("beforeunload", function () {
    endSession();
});

// Function to update last activity
function updateLastActivity() {
    fetch('update-activity.php', {
        method: 'POST',
        credentials: 'same-origin'
    }).then(response => {
        if (response.ok) {
            console.log('Last activity updated');
        } else {
            console.error('Failed to update last activity');
        }
    }).catch(error => {
        console.error('Error:', error);
    });
}

// Update last activity every 5 minutes
setInterval(updateLastActivity, 5 * 60 * 1000);

// Attach the updateLastActivity function to common user interactions
['click', 'keypress', 'scroll', 'mousemove'].forEach(evt => 
    document.addEventListener(evt, resetInactivityTimer, false)
);

// Reset inactivity timer
function resetInactivityTimer() {
    clearTimeout(inactivityTimer);
    inactivityTimer = setTimeout(endSession, 10 * 60 * 1000); // 10 minutes
}

// Function to end the session
function endSession() {
    fetch('end-session.php', {
        method: 'POST',
        credentials: 'same-origin'
    }).then(response => {
        if (response.ok) {
            console.log('Session ended successfully');
        } else {
            console.error('Failed to end session');
        }
    }).catch(error => {
        console.error('Error:', error);
    });
}