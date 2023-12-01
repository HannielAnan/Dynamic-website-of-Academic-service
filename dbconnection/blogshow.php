<?php
$db_host = "localhost"; // Replace with your database host
$db_username = "enter-username"; // Replace with your database username
$db_password = "enter-pass"; // Replace with your database password
$db_name = "enter-db"; // Replace with your database name

// Create a connection to the database
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($connection, "utf8mb4");
?>
