<?php
// server/delete_employee.php

// Get the employee number from the POST request
$emp_number = $_POST['emp_number'];

// Read the employee data from the JSON file
$employeeData = file_get_contents('../server/employee_data.json');
$employees = json_decode($employeeData, true);

// Find the employee with the given employee number and remove it
foreach ($employees as $index => $employee) {
    if ($employee['emp_number'] == $emp_number) {
        unset($employees[$index]);
        break;
    }
}

// Re-index the array to maintain proper numbering
$employees = array_values($employees);

// Save the updated employee data back to the JSON file
file_put_contents('../server/employee_data.json', json_encode($employees, JSON_PRETTY_PRINT));

echo "Employee deleted successfully.";
?>