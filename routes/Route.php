<?php

class Route
{
  public static function get($urlName, $viewsName)
  {
    $uri = $_SERVER['REQUEST_URI'];

    if ($uri == "/site_perso$urlName") {
      require "./views/$viewsName.php";
      exit;
    }
  }
}
