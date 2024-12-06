<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insurance";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

$payment_id = $_POST['claimID'];
$policy = $_POST['claimPolicy'];
$claim_amount = $_POST['claimAmount'];

$sql = "SELECT Amount FROM payments WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $payment_id);
$stmt->execute();
$stmt->bind_result($payment_amount);
$stmt->fetch();
$stmt->close();

if ($payment_amount === null) {
    echo json_encode(['status' => 'error', 'message' => 'Payment ID not found']);
    exit();
}

if ($claim_amount <= $payment_amount) {
    $sql_update = "UPDATE payments SET Amount = Amount - ? WHERE ID = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("di", $claim_amount, $payment_id);

    if ($stmt_update->execute()) {
        $sql_insert = "INSERT INTO claims (ID, Policy, Amount) VALUES (?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("isd", $payment_id, $policy, $claim_amount);
        $stmt_insert->execute();
        $stmt_insert->close();

        echo json_encode([
            'status' => 'success',
            'claimed_amount' => $claim_amount,
            'remaining_amount' => $payment_amount - $claim_amount,
            'policy' => $policy,
            'userID' => $payment_id
        ]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error updating payment: ' . $conn->error]);
    }
    $stmt_update->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Claim amount exceeds available payment amount']);
}

$conn->close();
?>
