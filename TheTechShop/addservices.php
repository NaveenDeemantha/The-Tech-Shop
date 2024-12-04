<?php
// Read the existing services from services.json
$services = json_decode(file_get_contents('services.json'), true);

// Get the new service data from POST request
$newService = [
    'id' => uniqid(),  // Generating a unique ID for the new service
    'name' => $_POST['name'],
    'feature1' => $_POST['feature1'],
    'feature2' => $_POST['feature2'],
    'feature3' => $_POST['feature3'],
    'price' => $_POST['price']
];

// Add the new service to the array
$services[] = $newService;

// Save the updated services array back to services.json
file_put_contents('services.json', json_encode($services, JSON_PRETTY_PRINT));

echo "Service added successfully!";
?>
