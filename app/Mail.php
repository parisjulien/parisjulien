<?php


namespace App;

use PHPMailer\PHPMailer\PHPMailer;

class Mail {
  static function sendMail ($name, $email, $subject, $message) {

    $config = require('../app/config.php');

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = $config['user'];
    //Password to use for SMTP authentication
    $mail->Password = $config['password'];
    //Set who the message is to be sent from
    $mail->setFrom('no-reply@parisjulien.fr', 'Paris Julien website');
    $mail->addReplyTo($email, $name);
    // Send mail to
    $mail->addAddress('pro.julienparis@gmail.com', 'Julien Paris');
    $mail->Subject = "[Contact] parisjulien.fr $subject";
    $mail->msgHTML("<p>Message reçus de votre site web: www.parisjulien.fr</p><p>Nom: $name<br/>Email: $email<br/>Message: $message</p>");
    $mail->AltBody = "Message reçus de votre site web: www.parisjulien.fr\nNom: $name\n\nEmail: $email\n\nMessage: \n$message";
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
  }
}