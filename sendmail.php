<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeception;

require 'phpmailer/src/Exeception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('en', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('info@fls.guru', 'Фрілансер');
$mail->addAddress('plantych88@gmail.com');
$mail->Subjekt = 'Привіт';

$body = '';

if(trim(!empty($_POST['name']))) {
    $body.='<p><strong>Name:</strong> '.$_POST['name'].'/p>';
}
if(trim(!empty($_POST['email']))) {
    $body.='<p><strong>Name:</strong> '.$_POST['email'].'/p>';
}
if(trim(!empty($_POST['message']))) {
    $body.='<p><strong>Name:</strong> '.$_POST['message'].'/p>';
}

$mail->Boby = $body;

if (!$mail->send()) {
    $message = 'Error';
} else {
    $message = 'Message sent';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>