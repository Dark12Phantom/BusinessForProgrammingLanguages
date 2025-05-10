<?php
function dbConnection()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "pos_system";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    return $conn;
}
