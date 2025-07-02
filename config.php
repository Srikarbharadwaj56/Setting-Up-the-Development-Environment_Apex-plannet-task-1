<?php
// Update the credentials below to match your local MySQL setup
$host = "localhost";
$user = "root";
$password = "";
$database = "my_database";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
