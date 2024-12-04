<?php
// careers.php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Career - IT Company</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #a1d1ee;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 10px 0;
        }

        header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        header nav ul li {
            margin: 0 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .hero {
            background-color: #3498db;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2em;
        }

        .job-listings {
            padding: 40px 0;
            background-color: #fff;
        }

        .job-listings h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .job-card {
            background-color: #ecf0f1;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .job-card h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .job-card p {
            margin-bottom: 10px;
        }

        .apply-btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 5px;
        }

        .apply-btn:hover {
            background-color: #2980b9;
        }

        .application-form {
            padding: 40px 0;
            background-color: #9bdbeb;
            display: none;
        }

        .application-form h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        #apply-form {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: 0 auto;
        }

        #apply-form label {
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        #apply-form input,
        #apply-form select {
            padding: 10px;
            margin-bottom: 20px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        #submit-application {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 5px;
        }

        #submit-application:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        /* Styling for Employee List Table */
        .employee-table {
            width: 100%;
            margin-top: 40px;
            border-collapse: collapse;
        }

        .employee-table th, .employee-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .employee-table th {
            background-color: #3498db;
            color: white;
        }

        .employee-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .employee-table button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .employee-table button:hover {
            background-color: #c0392b;
        }

        .update-btn {
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .update-btn:hover {
            background-color: #e67e22;
        }
        

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <header>
      <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="careers.php">Career</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Join Our Team</h1>
            <p>Build a rewarding career with us! Discover our job opportunities and apply today.</p>
        </div>
    </section>

    <section class="job-listings">
        <div class="container">
            <h2>Current Job Openings</h2>
            <div class="job-card">
                <h3>Software Developer</h3>
                <p>Location: Colombo, Sri Lanka</p>
                <p>We are looking for a talented Software Developer to join our growing team. Strong proficiency in front-end and back-end technologies required.</p>
                <button class="apply-btn">Apply Now</button>
            </div>

            <div class="job-card">
                <h3>UI/UX Designer</h3>
                <p>Location: Remote</p>
                <p>Join our team as a UI/UX Designer. We're looking for someone with a passion for creating user-centered designs.</p>
                <button class="apply-btn">Apply Now</button>
            </div>

            <div class="job-card">
                <h3>Project Manager</h3>
                <p>Location: Colombo, Sri Lanka</p>
                <p>We need an experienced Project Manager to oversee software development projects. Excellent communication and organizational skills required.</p>
                <button class="apply-btn">Apply Now</button>
            </div>
        </div>
    </section>

    <section class="application-form">
        <div class="container">
            <h2>Apply Now</h2>
            <form id="apply-form">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="position">Position</label>
                <select id="position" name="position">
                    <option value="Software Developer">Software Developer</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="Project Manager">Project Manager</option>
                </select>

                <label for="resume">Upload Resume</label>
                <input type="file" id="resume" name="resume" required>

                <button type="submit" id="submit-application">Submit Application</button>
            </form>
        </div>
    </section>

    <!-- Employee List Table -->
    <section class="employee-list">
        <div class="container">
            <h2>Current Employees</h2>
            <table id="employee-table" class="employee-table">
                <thead>
                    <tr>
                        <th>Employee Number</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Employee rows will be dynamically inserted here -->
                </tbody>
            </table>

            <form id="add-employee-form">
    <label for="full_name">Full Name</label>
    <input type="text" id="full_name" name="full_name" required>

    <label for="employee_email">Email Address</label>
    <input type="email" id="employee_email" name="email" required>

    <label for="position">Position</label>
    <select id="position" name="position" required>
        <option value="Software Developer">Software Developer</option>
        <option value="UI/UX Designer">UI/UX Designer</option>
        <option value="Project Manager">Project Manager</option>
    </select>

    <button type="submit">Add Employee</button>
</form>

       <br>    
       <br> 
       <br> 
       <br>      
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 IT Company. All rights reserved.</p>
    </footer>

    <script>
        $(document).ready(function() {
            // Simulated database for employee data
            var employees = [
                { id: 1, full_name: 'John Doe', email: 'johndoe@example.com', position: 'Software Developer' },
                { id: 2, full_name: 'Jane Smith', email: 'janesmith@example.com', position: 'UI/UX Designer' }
            ];

            // Function to update the employee table
            function updateEmployeeTable() {
                $('#employee-table tbody').empty();
                employees.forEach(function(employee) {
                    $('#employee-table tbody').append(`
                        <tr id="employee-${employee.id}">
                            <td>${employee.id}</td>
                            <td>${employee.full_name}</td>
                            <td>${employee.email}</td>
                            <td>${employee.position}</td>
                            <td>
                                <button class="delete-btn" data-id="${employee.id}">Delete</button>
                                <button class="update-btn" data-id="${employee.id}">Update</button>
                            </td>
                        </tr>
                    `);
                });
            }

            // Initialize the employee table
            updateEmployeeTable();

            // Add new employee functionality
            $('#add-employee-form').on('submit', function(e) {
    e.preventDefault();
    var newEmployee = {
        id: employees.length + 1,
        full_name: $('#full_name').val(),
        email: $('#employee_email').val(), // Updated selector
        position: $('#position').val()
    };
    employees.push(newEmployee);
    updateEmployeeTable();
    this.reset();
});
            // Delete employee functionality
            $('#employee-table').on('click', '.delete-btn', function() {
                var employeeId = $(this).data('id');
                employees = employees.filter(function(employee) {
                    return employee.id !== employeeId;
                });
                updateEmployeeTable();
            });

            // Update employee functionality
            $('#employee-table').on('click', '.update-btn', function() {
                var employeeId = $(this).data('id');
                var employee = employees.find(function(emp) {
                    return emp.id === employeeId;
                });

                // Allow the user to update employee information
                var newFullName = prompt('Enter new full name:', employee.full_name);
                if (newFullName) {
                    employee.full_name = newFullName;
                }

                var newEmail = prompt('Enter new email:', employee.email);
                if (newEmail) {
                    employee.email = newEmail;
                }

                var newPosition = prompt('Enter new position:', employee.position);
                if (newPosition) {
                    employee.position = newPosition;
                }

                updateEmployeeTable();
            });
        });
    </script>
</body>
</html>