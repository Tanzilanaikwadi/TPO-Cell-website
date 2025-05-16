<?php
// Database configuration
$servername = "localhost";    // or your server IP / domain
$username   = "root";
$password   = "";
$database   = "tpo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: success message
// echo "Connected successfully";
?>
