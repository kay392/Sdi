<?php

header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ================= DB CONNECTION =================
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

// ================= GET EMAIL =================
$email = $_POST['email'] ?? '';

if (!$email) {
    echo json_encode([
        "status" => "error",
        "message" => "Email is required"
    ]);
    exit;
}

// ================= CHECK DUPLICATE =================
$check = $conn->prepare("SELECT id FROM subscribers WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo json_encode([
        "status" => "exists",
        "message" => "You are already subscribed ✔"
    ]);
    exit;
}

// ================= INSERT =================
$stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
$stmt->bind_param("s", $email);

// ================= SUCCESS =================
if ($stmt->execute()) {

    // ================= EMAIL SEND =================
    $to = "projects@synergydatainvestments.co.uk";
    $subject = "Testing Message from Nilas Team - New Newsletter Subscription";

    $message = "Testing Message from Nilas Team - New subscriber joined:\n\nEmail: $email";

    // IMPORTANT: better headers (reduces spam)
    $headers  = "From: SDI Group <projects@synergydatainvestments.co.uk>\r\n";
    $headers .= "Reply-To: projects@synergydatainvestments.co.uk\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // safe mail (won't break JSON)
    @mail($to, $subject, $message, $headers);

    echo json_encode([
        "status" => "success",
        "message" => "Subscribed successfully ✔"
    ]);

} else {

    echo json_encode([
        "status" => "error",
        "message" => "Failed to subscribe"
    ]);
}

// ================= CLEANUP =================
$stmt->close();
$conn->close();
exit;

?>