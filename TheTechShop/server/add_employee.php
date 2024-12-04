<?php
// server/add_employee.php

// Get data from the POST request
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$position = $_POST['position'];

// Read the current employee data from the JSON file
$employeeData = file_get_contents('../server/employee_data.json');
$employees = json_decode($employeeData, true);

// Create a new employee array
$newEmpNumber = count($employees) + 1; // Simple way to generate employee number
$newEmployee = [
    'emp_number' => $newEmpNumber,
    'full_name' => $full_name,
    'email' => $email,
    'position' => $position
];

// Add the new employee to the array
$employees[] = $newEmployee;

// Save the updated employee data back to the JSON file
file_put_contents('../server/employee_data.json', json_encode($employees, JSON_PRETTY_PRINT));

echo "Employee added successfully.";
?>