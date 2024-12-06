<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "lab_perfomance"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $employee_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['number'];
    $hire_date = $_POST['hire_date'];
    $job_title = $_POST['job_title'];
    $department_id = $_POST['department_id'];
    $salary = $_POST['salary'];
 
    $stmt = $conn->prepare("INSERT INTO employee (employee_id, name, email, phone_number, hire_date, job_title, department_id, salary) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssid", $employee_id, $name, $email, $phone_number, $hire_date, $job_title, $department_id, $salary);

   
    if ($stmt->execute()) {
        echo '<div class="alert alert-success" role="alert">New employee record created successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
    }

    
    $stmt->close();
}


$conn->close();
?>
