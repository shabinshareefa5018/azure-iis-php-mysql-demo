<?php
// Database Configuration

$servername = "localhost";
$username = "root";
$password = "YOUR_MYSQL_PASSWORD";
$database = "studentdb";

// Create Connection
$conn = new mysqli($servername, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
