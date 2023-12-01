<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $uploadDirectory = '../admin/images/'; // Set your image upload directory (change to 'images/' if it's in the root directory)
    $uploadedFile = $_FILES["image"];

    // Check if the file is an image (you can perform more checks if needed)
    $fileType = pathinfo($uploadedFile["name"], PATHINFO_EXTENSION);
    if (in_array(strtolower($fileType), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        // Generate a unique filename or use the original filename
        $uniqueFilename = uniqid() . '_' . $uploadedFile["name"];
        $destinationPath = $uploadDirectory . $uniqueFilename;

        // Move the uploaded image to the destination directory
        if (move_uploaded_file($uploadedFile["tmp_name"], $destinationPath)) {
            // Return the URL of the uploaded image
            $imageUrl = 'https://dissertationwritinghelp.net/' . $destinationPath; // Change 'https://example.com/' to your actual website URL
            echo json_encode(["success" => true, "url" => $imageUrl]);
            exit();
        }
    }
}

// Handle errors if image upload fails
echo json_encode(["success" => false, "error" => "Image upload failed"]);
?>
