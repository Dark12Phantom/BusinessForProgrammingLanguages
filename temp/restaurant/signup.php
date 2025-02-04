<?php
include 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("INSERT INTO Users (Username, Email, Password) VALUES (?, ?, ?)");
if ($stmt->execute([$username, $email, $password])) {
    echo "Sign-up successful!";
} else {
    echo "Error during sign-up.";
}
?>


