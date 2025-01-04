<?php

header('Content-Type: application/json');

include('db_connection.php');

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'error' => 'Database connection failed.']);
    exit();
}

// Retrieve and sanitize form data
$name = isset($_POST['con_name']) ? trim($_POST['con_name']) : '';
$email = isset($_POST['con_email']) ? trim($_POST['con_email']) : '';
$phone = isset($_POST['con_phone']) ? trim($_POST['con_phone']) : '';
$message = isset($_POST['con_message']) ? trim($_POST['con_message']) : '';

// Basic validation
if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'error' => 'Please fill in all required fields.']);
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Invalid email format.']);
    exit();

}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
if ($stmt === false) {
    echo json_encode(['success' => false, 'error' => 'Prepare failed: ' . $conn->error]);
    exit();
}

$stmt->bind_param("ssss", $name, $email, $phone, $message);

// Execute the statement
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Database insert failed: ' . $stmt->error]);
}

// Close connections
$stmt->close();
$conn->close();
?>
