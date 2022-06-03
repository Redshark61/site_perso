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
        <h2 class="subtitle t-center uppercase">Mes compétences</h2>
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

    <section class="projects">
        <h2 class="subtitle t-center uppercase">Mes projets</h2>
        <div class="grid grid--2-2 mt-5">
            <div class="projects__image">
                <img src="./sources/ressources/projects/image1.png" alt="">
            </div>
            <div class="projects__text text">
                <p>C'est le tout premier "vrai" projet Python que j'ai fait. Il fallait faire un jeu Python en console, sans aucun modules, et surtout SANS POO (programmation orientée objets). Ce fut ardu, mais l'objectif a été atteint. Le but du jeu était de résoudre trois énigmes pour pouvoir s'échapper d'une île.</p>
                <p>J'ai d'ailleurs fait un site pour le présenter : <a href="https://redshark61.github.io/ile_au_python_site.github.io/index.html" target="_blank"> L'île aux Pythons</a></p>
                <?= githubLink("L'île aux Pythons", "https://github.com/Redshark61/Python-Island") ?>
            </div>
            <div class="projects__text">Un jeu qui utilise PostgreSQL.</div>
            <div class="projects__image">
                <img src="./sources/ressources/projects/image2.png" alt="">
            </div>
        </div>
    </section>

</body>

</html>