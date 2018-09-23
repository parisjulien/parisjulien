<?php

namespace App;

class Mail {

  static function sendMail ($name, $email, $subject, $message) {
    $to = 'pro.julienparis@gmail.com';

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $to)){
      $passage_ligne = "\r\n";
    } else{
      $passage_ligne = "\n";
    }

    $email_subject = "[Contact] parisjulien.fr : $subject";
    $email_body = "You have received a new message from your website parisjulien.fr.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

    $headers  = 'MIME-Version: 1.0' . $passage_ligne; // Version MIME
    $headers .= 'Content-type: text/html; charset=iso-8859-1'.$passage_ligne;
    $headers .= 'From: contact@parisjulien.fr'.$passage_ligne; // Expediteur
    $headers .= 'To: '.$to.$passage_ligne;
    $headers .= "Reply-To: contact@parisjulien.fr";

    if (mail($to, $email_subject, $email_body, $headers)) {
      return true;
    } else {
      return false;
    }
  }

}