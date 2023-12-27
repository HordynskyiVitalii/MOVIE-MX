<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('en', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('info@fls.guru', 'Фрілансер');
$mail->addAddress('plantych88@gmail.com');
$mail->Subject = 'Привіт';

$body = '';

if(trim(!empty($_POST['name']))) {
    $body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['email']))) {
    $body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['message']))) {
    $body.='<p><strong>Message:</strong> '.$_POST['message'].'</p>';
}

$mail->Body = $body;

if (!$mail->send()) {
    $message = 'Error';
} else {
    $message = 'Message sent';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>