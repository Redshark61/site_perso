<?php

require_once './routes/Route.php';

$app = new Route();

$app->get('/', 'home');
$app->get("/projets", 'projet');
$app->get("/about", 'about');
$app->get("/contact", 'contact');
$app->get("/affiche_liste", 'affiche_liste');
