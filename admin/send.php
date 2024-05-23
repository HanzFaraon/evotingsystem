<?php

include 'includes/session.php';

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){

    $mail = new PHPMailer(true);

try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hanz.faraon1@gmail.com';
    $mail->Password = 'kmkeqclmrxiqlvqk';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('hanz.faraon1@gmail.com');

    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);
    $mail->Subject = 'Hi, ' . $_POST['firstname'] . '!';
    $mail->Body = 'Here is your Voters ID and Password <br><br>' . '<b>Voters ID: </b>' . $_POST['voters_id'] . '<br><b> Password: </b>' . $_POST['password'];

    $mail->send();

    echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header('location: voters.php');
}
?>