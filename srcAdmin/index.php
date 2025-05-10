<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employeee Spot Tavern</title>
    <link rel="stylesheet" href="./css/index.css">
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

            if($row = $result->fetch_assoc()){
                // Verify password (use password_verify() if passwords are hashed)
                if($password === $row['password']) { 
                    $position = $row['position'];

                    $_SESSION['employee_id'] = $username;
                    $_SESSION['position'] = $position;

                    if($position == "manager"){
                        header("Location: ./htmlDIR/admin-dashboard.php");
                        exit();
                    }elseif($position == "staff"){
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