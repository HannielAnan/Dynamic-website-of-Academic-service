<?php
// Specify the directory where you want to store uploaded images
$targetDirectory = "images/";

// Check if the request is a POST request and if an image file was uploaded
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $imageFile = $_FILES["image"];
    
    // Check if the uploaded file is an image (you can add more checks if needed)
    $imageFileType = strtolower(pathinfo($imageFile["name"], PATHINFO_EXTENSION));
    if (in_array($imageFileType, array("jpg", "jpeg", "png", "gif", "webp"))) {
        // Generate a unique name for the image to avoid overwriting existing files
        $uniqueImageName = uniqid() . '.' . $imageFileType;
        $targetFile = $targetDirectory . $uniqueImageName;

        // Move the uploaded image to the "images" directory
        if (move_uploaded_file($imageFile["tmp_name"], $targetFile)) {
            // Image upload successful
            $imageUrl = $targetFile; // You may want to store a relative path in the database
            echo json_encode(['imageUrl' => $imageUrl]);
        } else {
            // Image upload failed
            echo json_encode(['error' => 'Image upload failed.']);
        }
    } else {
        // Invalid image format
        echo json_encode(['error' => 'Invalid image format.']);
    }
} else {
    // Invalid request
    echo json_encode(['error' => 'Invalid request.']);
}
?>