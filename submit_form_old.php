<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $property = $_POST['property_type'];
  $location = $_POST['location'];
  $details = $_POST['details'];

  $to = "info@yourdomain.com";

  $subject = "New Property Valuation Request";

  $message = "
  Name: $name
  Email: $email
  Phone: $phone
  Property Type: $property
  Location: $location
  Details: $details
  ";

  $headers = "From: info@yourdomain.com\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    header("Location: success.php");
    exit();
  } else {
    header("Location: succession.php?status=error");
    exit();
  }
}
?>