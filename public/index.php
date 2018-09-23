<?php

require_once('../vendor/autoload.php');

session_start();

use \App\Controllers\SiteController;

$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

switch ($path) {
  case '/':
    $controller = new SiteController();
    $controller->index();
    break;

  default:
    echo '404';
    break;
}