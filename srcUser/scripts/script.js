document.addEventListener('DOMContentLoaded', function () {
    const accountLink = document.querySelector('.account-link');
    const popover = document.querySelector('.popover');
    const accountItem = document.querySelector('.account-item');
    const arrowIcon = document.querySelector('.arrow-icon');

    const isLoggedIn = checkLoginStatus();
    const signupLink = document.getElementById('signup-link');
    const loginLink = document.getElementById('login-link');
    const profileLink = document.getElementById('profile-link');
    const logoutLink = document.getElementById('logout-link');

    accountLink.addEventListener('click', function (e) {
        e.preventDefault();
        accountItem.classList.toggle('active');
        popover.classList.toggle('active');

        if (accountItem.classList.contains('active')) {
            arrowIcon.textContent = 'keyboard_arrow_down';
        } else {
            arrowIcon.textContent = 'keyboard_arrow_right';
        }

        if (isLoggedIn) {
            signupLink.style.display = 'none';
            loginLink.style.display = 'none';
            profileLink.style.display = 'block';
            logoutLink.style.display = 'block';
        } else {
            signupLink.style.display = 'block';
            loginLink.style.display = 'block';
            profileLink.style.display = 'none';
            logoutLink.style.display = 'none';
        }
    });

    function checkLoginStatus() {
        return false;
    }

    document.addEventListener('click', function (e) {
        if (!accountLink.contains(e.target) && !popover.contains(e.target)) {
            accountItem.classList.remove('active');
            popover.classList.remove('active');
            arrowIcon.textContent = 'keyboard_arrow_right';
        }
    });
});