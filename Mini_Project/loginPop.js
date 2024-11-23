document.addEventListener('DOMContentLoaded', () => {
    const openLogin = document.getElementById('loginLink');
    const loginModal = document.getElementById('loginModal');
    const closeModal = document.getElementById('close');
    const phoneNo = document.getElementById('phoneNo');
    const validPho = document.getElementById('validPho');

    // Show the modal when "Login" link is clicked
    openLogin.addEventListener('click', (e) => {
        e.preventDefault();
        loginModal.style.display = 'block';
    });

    // Hide the modal when the close button is clicked
    closeModal.addEventListener('click', () => {
        loginModal.style.display = 'none';
    });

    // Hide the modal when clicking outside the modal
    window.addEventListener('click', (e) => {
        if (e.target == loginModal) {
            loginModal.style.display = 'none';
        }
    });

    // Enable the button and change color when input length is 10
    phoneNo.addEventListener('input', () => {
        if (phoneNo.value.length === 10) {
            validPho.disabled = false;
            validPho.classList.add('active'); // Add green active class
        } else {
            validPho.disabled = true;
            validPho.classList.remove('active'); // Remove green active class
        }
    });
});

let logoutTimer;

function startLogoutTimer() {
    // Clear any existing timer
    clearTimeout(logoutTimer);

    // Set a new timer for 2 minutes (120000 ms)
    logoutTimer = setTimeout(() => {
        // Make an AJAX call to log the user out
        fetch('logout.php', { method: 'POST', credentials: 'same-origin' })
            .then(response => {
                if (response.ok) {
                    // Optionally, redirect the user to the login page or show a message
                    window.location.href = '/components/menu_page/menu.php'; // or show a message
                }
            });
    }, 120000); // 2 minutes
}

// Start the timer when the page loads
window.onload = startLogoutTimer;

// Reset the timer whenever the user interacts with the page
window.addEventListener('mousemove', startLogoutTimer);
window.addEventListener('keydown', startLogoutTimer);
