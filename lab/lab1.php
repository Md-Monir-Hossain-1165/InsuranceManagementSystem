<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "lab_perfomance"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT employee_id, name, email, phone_number, hire_date, job_title, department_id, salary FROM employee";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   
    echo "<table border='1'>
            <tr>
              <th>Employee ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Hire Date</th>
              <th>Job Title</th>
              <th>Department ID</th>
              <th>Salary</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['employee_id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone_number'] . "</td>
                <td>" . $row['hire_date'] . "</td>
                <td>" . $row['job_title'] . "</td>
                <td>" . $row['department_id'] . "</td>
                <td>" . $row['salary'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>
