<?php
// server/employee_data.php

// Read employee data from the JSON file
$employeeData = file_get_contents('../server/employee_data.json');
$employees = json_decode($employeeData, true);

// Return the data as JSON
echo json_encode($employees);
?>