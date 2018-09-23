<?php

namespace App\Controllers;

abstract class Controller {
  public function render(string $template, string $view, array $args = null) {
    if (isset($args)) extract($args);

    ob_start();
    require '../app/views/pages/'.$view.'.php';
    $content = ob_get_clean();

    return require '../app/views/templates/'.$template.'.php';
  }

  public function redirect(string $path) {
    header('Location:'.$path);
  }
}