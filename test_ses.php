<?php

require 'vendor/autoload.php'; // Make sure this path is correct if you're using Composer.
require '/home/tahs/About_PHP/php_ses/PHPMailerAutoload.php'; // Adjust the path as necessary.

// Import the PHPMailer classes using the correct namespace.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance.
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'email-smtp.region.amazonaws.com'; //replace with smtp host name
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ses_user_name';                   //replace with username
    $mail->Password   = 'ses_user_password';               //replace with password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('sender@gmail.com', 'Sender name');
    $mail->addAddress('recipient@gmail.com', 'Recipient name');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email via AWS SES, and is sent by tahs.';

    $mail->send();
    echo 'Email has been sent!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
