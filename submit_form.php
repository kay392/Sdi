<?php

header('Content-Type: application/json');
error_reporting(0);
ini_set('display_errors', 0);

// DB CONNECTION
$host = "localhost";
$user = "uf11prmosothr";
$pass = "16#ske?&5$&*";
$db   = "dbkxsj0t27rgtk";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo json_encode([
        "status" => "error",
        "message" => "DB connection failed"
    ]);
    exit;
}

// INPUT (SAFE)
$full_name = $_POST['full_name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$property_type = $_POST['property_type'] ?? '';
$location = $_POST['location'] ?? '';
$details = $_POST['details'] ?? '';

if (!empty($phone) && !preg_match('/^(?:\+44|0)7\d{9}$/', $phone)) {

    echo json_encode([
        "status" => "error",
        "message" => "Invalid UK phone number"
    ]);

    exit;
}

// PREPARE SQL
$stmt = $conn->prepare("
    INSERT INTO property_requests 
    (full_name, email, phone, property_type, location, details)
    VALUES (?, ?, ?, ?, ?, ?)
");

if (!$stmt) {
    echo json_encode([
        "status" => "error",
        "message" => "SQL prepare failed"
    ]);
    exit;
}

$stmt->bind_param(
    "ssssss",
    $full_name,
    $email,
    $phone,
    $property_type,
    $location,
    $details
);

// EXECUTE
if ($stmt->execute()) {

    // EMAIL (NON-CRITICAL)
    $to = "projects@synergydatainvestments.co.uk";
    $subject = "Testing Message from Nilas Team - New Property Request ";

    $message = "Name: $full_name\nEmail: $email\nPhone: $phone\nType: $property_type\nLocation: $location\nDetails: $details";

    $headers  = "From: SDI Group <projects@synergydatainvestments.co.uk>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    @mail($to, $subject, $message, $headers);

    echo json_encode([
        "status" => "success",
        "message" => "Form submitted successfully"
    ]);

} else {

    echo json_encode([
        "status" => "error",
        "message" => "Insert failed"
    ]);
}

$stmt->close();
$conn->close();
exit;
?>