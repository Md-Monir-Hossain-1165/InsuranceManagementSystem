<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insurance";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO appointment (client_name, contact, appointment_date, appointment_time, subject, provider, location) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);


if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}


$stmt->bind_param("sssssss", $client_name, $contact, $appointment_date, $appointment_time, $subject, $provider, $location);

$client_name = $_POST['clientName'];
$contact = $_POST['contact'];
$appointment_date = $_POST['date'];
$appointment_time = $_POST['time'];
$subject = $_POST['subject'];
$provider = $_POST['provider'];
$location = $_POST['location'];

// Execute the statement
if ($stmt->execute()) {
    echo "New appointment scheduled successfully!";
} else {
    echo "Error executing statement: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
