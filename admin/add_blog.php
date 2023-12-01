<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include your database connection code here
include '../dbconnection/dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $tags = $_POST["tags"];
    $date = $_POST["date"];
    $url = $_POST["url"];
    $seo_title = $_POST["seo_title"];

    // Handle image upload
    $image_tmp = $_FILES["image"]["tmp_name"];

    // Ensure the uploaded file is a webp image
    $file_extension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    if ($file_extension != "webp") {
        echo "Only WebP images are allowed.";
        exit();
    }

    // Read image file as binary data
    $image_data = file_get_contents($image_tmp);

    // Insert data into the blog table, including the image binary data
    $sql = "INSERT INTO blog_post (title, content, tags, date, image, url, seo_title) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssssss", $title, $content, $tags, $date, $image_data, $url, $seo_title);

    if ($stmt->execute()) {
        // Redirect to a success page or display a success message
        header("Location: blog_upload.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close the database connection at the end of your script if needed
// $conn->close();
?>
