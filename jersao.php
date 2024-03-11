<?php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $json = file_get_contents('php://input');
    // Decode the JSON data into an associative array
    $data = json_decode($json, true);

    // Process the data (e.g., validate, save to database, etc.)
    // For this example, we'll just return the received data
    $response = ['success' => true, 'data' => $data];
    
    // Set the Content-Type header to application/json
    header('Content-Type: application/json');
    // Output the JSON response
    echo json_encode($response);
} else {
    // If the request method is not POST, return a 405 Method Not Allowed response
    header('HTTP/1.1 405 Method Not Allowed');
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Method Not Allowed']);
}

?>
