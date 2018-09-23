<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font : Josefin Sans -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="./css/burger.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="apple-touch-icon" sizes="57x57" href="./images/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./images/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/fav/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./images/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Julien Paris, développeur freelance sur Montpellier</title>
  </head>

  <body>

    <?= $content; ?>

    <?php 
    if (isset($_SESSION['message'])) {
      ?>
      <div class="notification <?= $_SESSION['message']['type']; ?>">
        <div class="notification-header">
          <p><?= $_SESSION['message']['type'] === 'error' ? 'Erreur' : 'Bravo'; ?></p>
        </div>
        <p><?= $_SESSION['message']['text']; ?></p>
      </div>
      <?php
    }
    ?>

    <script src="./scripts/app.js"></script>
    <script src="./scripts/smooth.js"></script>
  </body>
</html>


<?php 
unset($_SESSION['message']);
?>