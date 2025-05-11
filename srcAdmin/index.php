<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employeee Spot Tavern</title>
    <link rel="stylesheet" href="./css/index.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            --primary-color: #e8720d;
            --primary-dark: #723a08;
            --shades: #381a01;
            --accent-color: #ff9500;
            --secondary-color: #eec249;
            --secondary-accent: #31280e;
            --text-color: #fff;
            --text-color-2: #000;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--primary-dark);
            color: var(--text-color);
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal {
            display: flex;
            width: 30%;
            height: 70%;
            gap: 1rem;
            align-items: center;
            justify-content: center;
            border: #ffffff88 1px solid;
            border-radius: 15px;
            box-shadow: 0 0 50px var(--shades);
            padding: 1rem;
        }

        .modal h2 {
            letter-spacing: 5px;
            width: 100%;
            place-items: center;
            display: flex;
            place-content: center;
            padding: 1rem;
        }

        .modal p {
            letter-spacing: 2px;
            width: 100%;
            display: flex;
            place-content: center;
            padding: 1rem;
        }

        .modal form {
            height: 80%;
        }

        .modal fieldset {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            padding: 1rem;
            border-radius: 10px;
            border: solid 1px white;
        }

        .modal fieldset legend {
            margin-left: 1rem;
            letter-spacing: 3px;
            display: block;
            border: none;
        }

        .modal label {
            letter-spacing: 2px;
            display: block;
            margin-bottom: 5px;
        }

        .modal input {
            padding: 1rem;
            border-radius: 10px;
            border: none;
            outline: none;
            background-color: #ffffff88;
            color: var(--text-color);
        }

        .modal input:is([type="text"], [type="password"]) {
            width: 96.5%;
            padding: 8px 10px;
            border: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 3px;
            background:
                linear-gradient(90deg, #e8720d, #e8720d)center bottom/0 2px no-repeat,
                linear-gradient(90deg, #eec249, #eec249)left bottom/100% 2px no-repeat,
                linear-gradient(90deg, #00000000, #00000000)left bottom/100% no-repeat;
            outline: none;
            font-size: 1rem;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 2px;
            transition: 0.3s ease;
        }
    </style>
</head>

<body onload="showLogin()">
    <?php
    require_once('../dbConnection.php');
    session_start();

    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['employee_id'] ?? '';
        $password = $_POST['password'] ?? '';

        $conn = dbConnection();

        // Use password_verify if passwords are hashed
        $sql = "SELECT * FROM employees WHERE employee_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Verify password (use password_verify() if passwords are hashed)
            if ($password === $row['password']) {
                $position = $row['position'];

                $_SESSION['employee_id'] = $username;
                $_SESSION['position'] = $position;

                if ($position == "manager") {
                    header("Location: ./htmlDIR/admin-dashboard.php");
                    exit();
                } elseif ($position == "staff") {
                    header("Location: ./htmlDIR/order-processing.php");
                    exit();
                }
            }
        }
        // If we get here, login failed
        echo "<script>alert('Login Failed. Access Denied!');</script>";
    }
    ?>
    <div id="loginModal" class="modal">
        <h2>Login</h2>
        <p>Restricted access!</p>
        <form method="POST" action="">
            <fieldset>
                <legend>Employee Credentials</legend>

                <label for="employee_id">Employee ID</label>
                <input type="text" id="employee_id" name="employee_id"><br>

                <label for="password">Password</label>
                <input type="password" id="password" name="password"><br>

                <input type="submit" value="Login" onclick="closeLogin()">
            </fieldset>
        </form>
    </div>
</body>

<script>
    function showLogin() {
        document.getElementById("loginModal").style.display = "block";
    }

    function closeLogin() {
        document.getElementById("loginModal").style.display = "none";
    }
</script>

</html>