<?php
require_once 'sources/functions/helper.php';

// TODO: responsive
?>


<!DOCTYPE html>
<html lang="fr" id="index-html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="sources/ressources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./sources/scss/main.css">
    <script src="sources/js/responsive.js" defer></script>
    <script src="sources/js/resize_title.js" defer></script>
    <script src="sources/js/mail.js" defer></script>
    <title>Tcode - Acceuil</title>
</head>

<body>
    <?php require 'nav.php' ?>


    <?php require 'hero.php' ?>

    <?php require 'skills.php' ?>

    <?php require 'projects.php' ?>

    <a class="button button--pink button--center" href="https://github.com/Redshark61" target="_blank">Tu veux en voir plus ?</a>

    <?php require 'contact.php' ?>

</body>

</html>