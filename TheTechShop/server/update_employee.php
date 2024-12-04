<?php
// update_employee.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the employee data from the POST request
    $emp_number = $_POST['emp_number'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    // Read the employee data from the JSON file
    $employees = json_decode(file_get_contents('server/employees.json'), true);

    // Find the employee with the given emp_number and update their data
    foreach ($employees as &$employee) {
        if ($employee['emp_number'] == $emp_number) {
            $employee['full_name'] = $full_name;
            $employee['email'] = $email;
            $employee['position'] = $position;
            break;
        }
    }

    // Save the updated employee data back to the JSON file
    file_put_contents('server/employees.json', json_encode($employees, JSON_PRETTY_PRINT));

    echo "Employee updated successfully.";
}
?>