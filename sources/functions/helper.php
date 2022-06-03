<?php

declare(strict_types=1);


function baseURL(): string
{
  $isHTTPS = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
  $url = $isHTTPS ? "https://" . $_SERVER['HTTP_HOST'] : "http://"  . $_SERVER['HTTP_HOST'] . "/site_perso/";
  return $url;
}

function card(string $title, string $img): string
{
  $html = <<<HTML
  <div class="card card--top" data-title="$title">
    <img src="./sources/ressources/$img" alt="$title" class="f-w">
  </div>
HTML;
  return $html;
}

function githubLink(string $title, string $link): string
{
  $html = <<<HTML
  <a href="$link" target="_blank" class="button github">
    <img src="./sources/ressources/github.svg" alt="$title">
    <span class="github-link__title text">$title</span>
  </a>
HTML;
  return $html;
}
