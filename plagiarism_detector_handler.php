<?php

// Remove 'x-powered-by' header
header_remove('X-Powered-By');

// Set no-cache headers using Cache-Control
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

// Add 'x-content-type-options' header
header("X-Content-Type-Options: nosniff");

$api_key = 'ebf7e1b5-cf52-48e2-bb15-e8bb62da02a1';
$text_to_check = $_POST['text'];

if (empty($text_to_check)) {
    echo json_encode(['status' => 'error', 'message' => 'Text to check is empty']);
    exit;
}



    // Set up the data to be sent
    $data = array(
        'text' => $text_to_check,
        'webhooks' => array(
            'status' => 'https://your-callback-url.com/status',
            'result' => 'https://your-callback-url.com/result',
        ),
    );

    // Make the API request
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    curl_close($ch);

    // Output the response from the Copyleaks API
    echo $response;
} else {
    // Handle the case where the input text is empty
    echo json_encode(array('error' => 'Text to check is empty.'));
}

?>
