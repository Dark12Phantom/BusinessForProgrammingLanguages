<?php
$dbPath = "resto.accdb"; // to da db-access
if (!file_exists($dbPath)) {
    die("Database file not found.");
}

$conn = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$dbPath;");
if (!$conn) {
    die("Connection failed.");
}
?>



