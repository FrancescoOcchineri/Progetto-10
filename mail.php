<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '0bfd17cd7ed374';
    $mail->Password = '1e7288d2d26ec2';
    $mail->Port = 2525;

    $mail->setFrom('admin@example.com', 'Admin Admin');
    if (isset($email) && isset($firstname) && isset($lastname)) {
        $mail->addAddress($email, $firstname . ' ' . $lastname);
    } else {
        $mail->addAddress('example@example.it');
    }
    $mail->addReplyTo('admin@example.it', 'Information');

    if (isset($image) && file_exists($image)) {
        $mail->addAttachment($image);
    } else {
        $mail->addAttachment('');
    }

    $mail->isHTML(true);
    $mail->Subject = 'Grazie per la registrazione bello!';
    $mail->Body = '<h1>Grazie, sei un grande!</h1>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>