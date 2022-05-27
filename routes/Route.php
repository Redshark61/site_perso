<?php

class Route
{
  public static function get(string $urlName, string $viewsName = ""): void
  {
    $uri = $_SERVER['REQUEST_URI'];


    if ($uri == "/site_perso$urlName") {
      require "./views/$viewsName.php";
      exit;
    }
    // check if the urlName contain a <
    elseif (strpos($urlName, '<') !== false and !(strpos($uri, '.js') !== false or strpos($uri, '.css') !== false)) {
      // get what's between < and > from the urlName
      $lastSlashes = strrpos($_SERVER['REQUEST_URI'], '/');
      $paramName = substr($_SERVER['REQUEST_URI'], $lastSlashes + 1);
      require "./public/$paramName/index.php";
      exit;
    }
  }
}
