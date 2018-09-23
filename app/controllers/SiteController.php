<?php

namespace App\Controllers;

use \App\Mail;

class SiteController extends Controller {
  public function index() {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ((!isset($_POST['frmFullname']) || empty($_POST['frmFullname'])) 
      || (!isset($_POST['frmEmail']) || empty($_POST['frmEmail']))
      || (!isset($_POST['frmSubject']) || empty($_POST['frmSubject']))
      || (!isset($_POST['frmMessage']) || empty($_POST['frmMessage']))) {
        $_SESSION["message"] = ["type" => "error", "text" => "Veuillez remplir tous les champs"];
        return $this->redirect('/#contact');
      } else {

        $name = strip_tags(htmlspecialchars($_POST['frmFullname']));
        $email = strip_tags(htmlspecialchars($_POST['frmEmail']));
        $subject = strip_tags(htmlspecialchars($_POST['frmSubject']));
        $message = strip_tags(htmlspecialchars($_POST['frmMessage']));

        if (Mail::sendMail($name, $email, $subject, $message)) {
          $_SESSION["message"] = ["type" => "success", "text" => "Votre email a bien été envoyé, je vous répondrai dans les plus bref délais"];
          return $this->redirect('/#contact');
        } else {
          $_SESSION["message"] = ["type" => "error", "text" => "Une erreur est survenue lors de l'envoie de l'email..."];
          return $this->redirect('/#contact');
        }
      }
    } else {
      return $this->render('default', 'home');
    }

  }
}