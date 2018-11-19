<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require_once 'C:\wamp64\www\alspok\phpmail\vendor\autoload.php';
require_once 'C:\wamp\www\alspok\PHPMail\vendor\autoload.php';

function sendMail($email, $subject, $message){

$mail = new PHPMailer(true);
    try {
        /************ Mailjet server settings *******************/
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'in-v3.mailjet.com';
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'df2ee78039fcb7d5c5b332199b3fcca7';                 // SMTP username
        $mail->Password = '423eb0c14782cabdf8f5c08a352e5cf1';                 // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;

        /*************Mailtrap Server settings*******************
        // $mail->SMTPDebug = 2;                                // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '0acc30783874d8';                 // SMTP username
        $mail->Password = '878122d26faeb0';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;

        */

        /**************Recipients************************/
        $mail->setFrom('alspok@gmail.com', 'Mailer');
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
        echo "<p style='color: green'>Message has been sent to </p>";
    }
    catch (Exception $e) {
        echo "<p style='color: red;'>Message could not be sent. Mailer Error: </p>", $mail->ErrorInfo;
    }
}