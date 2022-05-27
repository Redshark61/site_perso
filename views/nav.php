<?php
function addClass($url)
{
    if (($_SERVER['REQUEST_URI'] == "/site_perso/" . $url) || ($_SERVER['REQUEST_URI'] == "/site_perso/sources/" . $url) || ($_SERVER['REQUEST_URI'] == '/sources/' . $url) || ($_SERVER['REQUEST_URI'] == "/" . $url)) {
        return " class='current_location'";
    }
}
?>

<nav>
    <a class="site-name" href="./" id="title">Tcode</a>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="div-nav">
        <a href="./" class="nav-button<?= addClass('') ?>">Accueil</a>
        <a href="./projets" class="nav-button<?= addClass('projets') ?>">Projets</a>
        <a href="./about" class="nav-button<?= addClass('about') ?>">A propos</a>
        <a href="./contact" class="nav-button<?= addClass('contact') ?>">Me contacter</a>
    </div>
</nav>