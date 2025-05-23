<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Savory Spot Tavern</title>

    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="icon" href="../images/photo_2025-02-14_21-17-19.png">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="../index.html">
                <img src="../images/photo_2025-02-14_21-17-19.png" alt="Logo">
            </a>
        </div>
    </nav>

    <main class="page" id="login">
        <div class="blank2"></div>
        <div class="separator2"></div>
        <div class="container2">
            <div class="login">
                <h1>LOGIN</h1>
                <div class="credentials login-credentials">
                    <form action="">
                        <label for="uname">Username</label>
                        <input type="text" name="uname" id="uname" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                </div>
                <div class="button">
                    <label class="custom-field">
                        <input type="submit" value="Login">
                        <span class="border"></span>
                    </label>
                </div>
                <span></span>
                <p>Or Continue With...</p>
                <div class="logos">
                    <img src="../icons/google.svg" alt="">
                    <img src="../icons/facebook.svg" alt="">
                    <img src="../icons/twitter.svg" alt="">
                </div>
                </form>
                <span></span>
                <p>No Account? | <a href="./account-signup.php" class="transition">Create an account.</a></p>
            </div>
        </div>
    </main>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll('.transition');
        links.forEach(link => {
            link.addEventListener('click', function () {
                e.preventDefault();
                const targetPage = this.getAttribute('href')
                document.querySelector('.page.active').classList.remove('active')
                setTimeout(() => {
                    window.location.href = targetPage
                }, 1000)
            });
        });
        setTimeout(() => {
            document.querySelector('.page').classList.add('active')
        }, 100)
    });
</script>

</html>