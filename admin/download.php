<?php
// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "acadvdfr_theexperts";
$password = "gqQxDDtr4XTY";
$dbname = "acadvdfr_theexperts";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the query parameter
if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Retrieve file data from the database
    $stmt = $conn->prepare("SELECT original_file_name, file_type, choose_file FROM order_form_data WHERE id = ?");
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->store_result();

    // Check if the file record exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($originalFileName, $fileType, $fileContent);
        $stmt->fetch();

        // Set the appropriate content type header
        header("Content-type: $fileType");

        // Set the file name for download
        header("Content-Disposition: attachment; filename=\"$originalFileName\"");

        // Output the file content
        echo $fileContent;
        exit; // Add this line to prevent further processing of the script
    }
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
