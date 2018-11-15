<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\wamp\www\alspok\vendor\autoload.php';

function sendMail($email, $subject, $message){

$mail = new PHPMailer(true);
    try {
        /*************Server settings*******************/
        // $mail->SMTPDebug = 2;                                // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '0acc30783874d8';                 // SMTP username
        $mail->Password = '878122d26faeb0';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;

        /**************Recipients************************/
        $mail->setFrom('a.spokauskas@outlook.com', 'Mailer');
        $mail->addAddress($email);
        // $mail->addAddress('test-sm35o@mail-tester.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        /***************Content**************************/
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = $message;

        $mail->send();
        echo 'Message has been sent';
    }
    catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}