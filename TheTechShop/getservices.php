<?php
// Set the content type to application/json
header('Content-Type: application/json');

// Read the services from services.json
$services = file_get_contents('services.json');

// Check if the file was successfully read
if ($services === false) {
    // If there is an error, send a 500 Internal Server Error response and return an error message
    http_response_code(500);
    echo json_encode(["error" => "Unable to read services.json"]);
    exit;
}

// Output the services as JSON
echo $services;
?>
