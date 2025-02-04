<?php
include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM Users WHERE Username = ? AND Password = ?");
$stmt->execute([$username, $password]);
$user = $stmt->fetch();

if ($user) {
    echo "Login successful!";
    // redirect to dashboard(admin) or home page(user)
} else {
    echo "Invalid username or password.";
}
?>



