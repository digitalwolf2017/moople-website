<?php
ob_start();
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

// =====================
// Detect JSON / AJAX
// =====================
$rawInput = file_get_contents("php://input");
$isAjax = !empty($rawInput);

$data = json_decode($rawInput, true);
if (!$data) {
    $data = $_POST; // fallback for normal form submit
}

// =====================
// Basic Validation
// =====================
$name   = trim($data['user_name'] ?? $data['name'] ?? '');
$email  = trim($data['email'] ?? '');
$phone  = trim($data['phone'] ?? '');

if ($name === '' || $email === '' || $phone === '') {
    echo json_encode([
        "status" => "error",
        "message" => "Required fields missing"
    ]);
    exit;
}

// =====================
// Collect Data
// =====================
$qy = [];
$qy['entrydate'] = date('Y-m-d H:i:s');
$qy['name'] = $name;
$qy['email'] = $email;
$qy['phone'] = $phone;
$qy['query'] = $data['message'] ?? '';
$qy['subjects'] = $data['subject'] ?? '';
$qy['apply_for'] = $data['course'] ?? '';
$qy['location'] = $data['location'] ?? '';
$qy['altMobile'] = $data['altMobile'] ?? '';
$qy['state'] = $data['state'] ?? '';
$qy['educational_qualification'] = $data['educational_qualification'] ?? '';

$qy['utm_source'] = 'blog';//trim($data['utm_source'] ?? '');
$qy['utm_medium'] = trim($data['utm_medium'] ?? '');
$qy['utm_campaign'] = 'blog';//trim($data['utm_campaign'] ?? '');

$redirect_from = $data['redirect_from'] ?? '';

// if($qy['utm_source']==''){
//   $qy['utm_source']  = $redirect_from;
// }
// if($qy['utm_campaign']==''){
//     $qy['utm_campaign'] = $qy['utm_source'];
// }

// =====================
// Mail Routing
// =====================
$location2 = strtolower($qy['location']);
$mailToAdd = 'pritish.hitech@gmail.com';

$branchEmails = [
    'barrackpore' => 'hitechanimationbkp@gmail.com',
    'barasat' => 'dasanimesh665@gmail.com',
    'midnapore' => 'hitechmidnapur@gmail.com',
    'serampore' => 'serampore.hitech@gmail.com',
    'shyambazar' => 'hitech.shyambazar@gmail.com',
    'chandannagar' => 'chandannagar.hitechanimation@gmail.com'
];

if (isset($branchEmails[$location2])) {
    $mailToAdd = $branchEmails[$location2];
}

// =====================
// Send Email
// =====================
require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->Mailer = "mail";
$mail->Host = "webmail.digitalwolf.co.in";
$mail->Username = "info@digitalwolf.co.in";
$mail->Password = "Info@32145";
$mail->host_port = 25;

$mail->Subject = "Enquire Online";
$mail->From = "info@digitalwolf.co.in";
$mail->FromName = "Hitechanimation Enquiry";
$mail->IsHTML(false);

$mail->Body =
    "Name: {$qy['name']}\n" .
    "Email: {$qy['email']}\n" .
    "Phone: {$qy['phone']}\n" .
    "Course: {$qy['apply_for']}\n" .
    "Location: {$qy['location']}\n" .
    "Message: {$qy['query']}";

$mail->AddAddress($mailToAdd);
$mail->AddBCC("seohitech1@gmail.com");

if (!$mail->Send()) {
    echo json_encode([
        "status" => "error",
        "message" => "Mail failed",
        "error" => $mail->ErrorInfo
    ]);
    exit;
}

// =====================
// DB Insert
// =====================
$conn = new mysqli(
    "localhost",
    "moople_NewFormSudhirusers",
    "uk_J,yVTv}HTr{C0",
    "moople_NewFormSudhir"
);

if (!$conn->connect_error) {

    $stmt = $conn->prepare(
        "INSERT INTO leads
        (entrydate, name, email, phone, location, apply_for, qualification, utm_source, utm_medium, utm_campaign, redirect_from)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "sssssssssss",
        $qy['entrydate'],
        $qy['name'],
        $qy['email'],
        $qy['phone'],
        $qy['location'],
        $qy['apply_for'],
        $qy['educational_qualification'],
        $qy['utm_source'],
        $qy['utm_medium'],
        $qy['utm_campaign'],
        $redirect_from
    );

    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// =====================
// FINAL RESPONSE
// =====================
$response = [
    "status" => "success",
    "message" => "Lead submitted successfully",
    "redirect" => "https://www.moople.in/thankyou/"
];

echo json_encode($response);
exit;
