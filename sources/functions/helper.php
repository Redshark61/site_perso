<?php

declare(strict_types=1);


function baseURL(): string
{
  $isHTTPS = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
  $url = $isHTTPS ? "https://" . $_SERVER['HTTP_HOST'] : "http://"  . $_SERVER['HTTP_HOST'] . "/site_perso/";
  return $url;
}
