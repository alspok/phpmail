<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'C:\wamp\www\alspok\vendor\autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 2;                                // Enable verbose debug output
    // $mail->Debugoutput = 'html';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '0acc30783874d8';                 // SMTP username
    $mail->Password = '878122d26faeb0';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                    // TCP port to connect to
    // $mail->Port = 465;
    $mail->Port = 25;

    //Recipients
    $mail->setFrom('mailer@phpmailer.com', 'Mailer');
    $mail->addAddress('alspok@gmail.com', 'ASpok');     // Add a recipient Name is optional
    $mail->addAddress('a.spokauskas@outlook.com', 'AS');
    $mail->addAddress('test-sm35o@mail-tester.com', 'Mailtrap');
    // $mail->addAddress('a.spokauskas@outlook.com');
    // $mail->addAddress('ellen@example.com');
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New';
    $mail->Body    = 'This is the HTML message body <i>in italic!</i>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}