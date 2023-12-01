<?php
$servername = "localhost"; // Change this if your database is hosted on a different server
$username = "Enter-user"; // Replace with your MySQL username
$password = "Enter-pass"; // Replace with your MySQL password
$dbname = "Enter-userdb"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// No need to close the connection here
// Set character set to utf8mb4
$conn->set_charset("utf8mb4");

?>
