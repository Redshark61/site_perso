<?php
require_once 'sources/functions/helper.php';
?>

<!DOCTYPE html>
<html lang="fr" id="index-html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="sources/ressources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./sources/scss/main.css">
    <script src="sources/js/responsive.js" defer></script>
    <script src="sources/js/size.js" defer></script>
    <title>Tcode - Acceuil</title>
</head>

<body>
    <?php require 'nav.php' ?>

    <div id="sizes">
        <p id="x"></p>
        <p id="y"></p>
    </div>

    <div class="hero">
        <div class="hero__header">
            <h1 class="hero__main-title uppercase">Un simple portfolio ?</h1>
            <h1 class="hero__main-title uppercase">Un mine d'or !</h1>
            <button class="button">Tu veux en voir plus ?</button>
        </div>
        <picture class="hero__picture">
            <source media="(max-width: 700px)" srcset="sources/ressources/Myself.png">
            <img class="hero__img" src="sources/ressources/Myself@2x.png" alt="">
        </picture>


    </div>

    <section class="skills">
        <h1 class="skills__title t-center uppercase">Mes compétences</h1>
        <div class="skills__container">
            <?php
            $skills = [
                [
                    $title = "Django",
                    $img = "django.svg",
                ],
                [
                    $title = "JavaScript",
                    $img = "js.svg",
                ],
                [
                    $title = "PostgreSQL",
                    $img = "postgres.svg",
                ],
                [
                    $title = "Sass",
                    $img = "sass.svg",
                ],
                [
                    $title = "PHP",
                    $img = "php.svg",
                ],
                [
                    $title = "Python",
                    $img = "python.svg",
                ],
                [
                    $title = "React.js",
                    $img = "react.svg",
                ],
            ];

            foreach ($skills as $key => $value) {
                echo card($value[0], $value[1]);
            }
            ?>

        </div>
    </section>

</body>

</html>