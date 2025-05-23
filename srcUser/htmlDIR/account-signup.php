<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Savory Spot Tavern</title>

    <link rel="icon" href="../images/photo_2025-02-14_21-17-19.png">

    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
    <nav>
        <div class="logo">
            <a href="../index.html">
                <img src="../images/photo_2025-02-14_21-17-19.png" alt="logo">
            </a>
        </div>
    </nav>

    <main class="page" id="signup">
        <div class="container">
            <div class="signup">
                <h1>SIGN UP</h1>
                <div class="credentials">
                    <form action="">
                        <label for="name">First Name</label>
                        <input type="text" name="fname" id="fname" required>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" required>
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" required>
                        <label for="birthdate">Birthdate</label>
                        <input type="date" name="birthdate" id="birtdate" required>
                        <div class="gender">
                            <label>Gender</label>
                            <label class="radio-container">
                                <input type="radio" name="gender" id="male" required checked>
                                <div class="custom-radio"></div>
                                Male
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="gender" id="female" required>
                                <div class="custom-radio"></div>
                                Female
                            </label>
                        </div>

                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                        <label for="phone">Phone Number</label>
                        <div style="display: flex; gap: 5px;">
                            <div>+63</div>
                            <input type="tel" name="phone" id="phone" placeholder="9123456789" required>
                        </div>
                        <label for="uname">Username</label>
                        <input type="text" name="uname" id="uname" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                        <label for="rpassword">Repeat Password</label>
                        <input type="password" name="rpassword" id="rpassword" required>
                        <p id="message">Passwords doesn't match!</p>
                        <div class="button">
                            <label class="custom-field">
                                <input type="submit" value="Sign Up">
                                <span class="border"></span>
                            </label>
                        </div>
                    </form>
                </div>
                <span></span>
                <p>Have an account? | <a href="./account-login.php" class="transition">Login</a> instead.</p>
            </div>
        </div>
        <div class="separator1"></div>
        <div class="blank"></div>
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

    const passwordInput = document.getElementById('password')
    const repeatPassInput = document.getElementById('rpassword')
    const message = document.getElementById('message')
    repeatPassInput.addEventListener('input', function () {
        const password = passwordInput.value
        const repeatPassword = repeatPassInput.value

        if (repeatPassword === "") {
            message.style.display = "none"
        } else if (password === repeatPassword) {
            message.style.display = "none"
        } else {
            message.style.display = "block"
        }
    })
</script>

</html>