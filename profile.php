<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "insurance"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

   
    $stmt = $conn->prepare("INSERT INTO profiles (name, email, phone, gender, age) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $phone, $gender, $age);

   
    if ($stmt->execute()) {
        echo $stmt->insert_id; 
    } else {
        echo "Error: " . $stmt->error;
    }

   
    $stmt->close();
}

$conn->close();
?>