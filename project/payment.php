<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "insurance"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$response = array();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userID = $_POST['userID'];
    $policy = $_POST['policy'];
    $method = $_POST['method'];
    $amount = $_POST['amount'];
    $cardNumber = $_POST['cardNumber'] ?? null;
    $expiryDate = $_POST['expiryDate'] ?? null;
    $cvv = $_POST['cvv'] ?? null;
    $netBankName = $_POST['netBankName'] ?? null;
    $netUserID = $_POST['netUserID'] ?? null;
    $netPassword = $_POST['netPassword'] ?? null;
    $mobileBankingProvider = $_POST['mobileBankingProvider'] ?? null;
    $mobileNumber = $_POST['mobileNumber'] ?? null;
    $PIN = $_POST['PIN'] ?? null;

    
    
    $checkQuery = "SELECT Amount FROM payments WHERE Id = '$userID' AND Policy = '$policy'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $existingAmount = $row['Amount'];
        $newAmount = $existingAmount + $amount;

        $updateQuery = "UPDATE payments SET Amount = '$newAmount', Method = '$method', CardNumber = '$cardNumber', ExpiryDate = '$expiryDate', CVV = '$cvv', BankName = '$netBankName', NetUserID = '$netUserID', NetPassword = '$netPassword', MobileBankingProvider = '$mobileBankingProvider', MobileNumber = '$mobileNumber', PIN = '$PIN' WHERE Id = '$userID' AND Policy = '$policy'";
        if ($conn->query($updateQuery) === TRUE) {
            $response['status'] = 'success';
            $response['policy'] = $policy;
            $response['amount'] = $newAmount;
            $response['userID'] = $userID;
        } else {
            $response['status'] = 'error';
            $response['message'] = "Error: " . $conn->error;
        }
    } else {
        
        $insertQuery = "INSERT INTO payments (Id, Policy, Method, Amount, CardNumber, ExpiryDate, CVV, BankName, NetUserID, NetPassword, MobileBankingProvider, MobileNumber, PIN) 
                        VALUES ('$userID', '$policy', '$method', '$amount', '$cardNumber', '$expiryDate', '$cvv', '$netBankName', '$netUserID', '$netPassword', '$mobileBankingProvider', '$mobileNumber', '$PIN')";
        if ($conn->query($insertQuery) === TRUE) {
            $response['status'] = 'success';
            $response['message'] = "New payment record inserted successfully.";
            $response['policy'] = $policy;
            $response['amount'] = $amount;
            $response['userID'] = $userID;
        } else {
            $response['status'] = 'error';
            $response['message'] = "Error: " . $conn->error;
        }
    }

    $conn->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request.';
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
