<?php

// Replace 'YOUR_API_KEY' with your actual API key
$apiKey = 'qz1lz6zigu60tdgk';
$textToCheck = "Your content to check for plagiarism goes here.";

// Make a request to the Copyscape API
$response = file_get_contents("https://www.copyscape.com/api/?key={$apiKey}&o=csearch&c={$textToCheck}");

// Process the response
if ($response !== false) {
    $xml = simplexml_load_string($response);

    if ($xml->result->count > 0) {
        // Plagiarism detected
        echo "Plagiarism detected! Similar content found.";
    } else {
        // No plagiarism detected
        echo "No plagiarism detected.";
    }
} else {
    echo "Error connecting to the Copyscape API.";
}
?>
