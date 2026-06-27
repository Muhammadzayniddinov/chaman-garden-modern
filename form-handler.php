<?php
// Optional PHP handler for hosting with PHP support.
// Replace $to with the company email address and enable mail() on your hosting.

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

function clean($value) {
    return htmlspecialchars(trim($value ?? ''), ENT_QUOTES, 'UTF-8');
}

$name = clean($_POST['name']);
$phone = clean($_POST['phone']);
$location = clean($_POST['location']);
$service = clean($_POST['service']);
$plants = clean($_POST['plants']);
$object = clean($_POST['object']);
$contactMethod = clean($_POST['contact_method']);
$message = clean($_POST['message']);

$to = 'your-email@example.com';
$subject = 'New Chaman Garden service request';
$body = "Name: $name\nPhone: $phone\nLocation: $location\nService: $service\nPlants: $plants\nObject: $object\nContact method: $contactMethod\nMessage: $message";
$headers = "From: no-reply@chamangarden.local\r\n";

// Uncomment after configuring real hosting email:
// mail($to, $subject, $body, $headers);

header('Location: thank-you.html');
exit;
