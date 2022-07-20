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
    <script src="sources/js/resize_title.js" defer></script>
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
            <button class="button">Des projets, plein de projets !</button>
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
                <h3>L'île aux Pythons</h3>
                <p>C'est le tout premier "vrai" projet <span class="emphasis">Python</span> que j'ai fait. Il fallait faire un jeu en <span class="emphasis">console</span>, sans aucun modules, et surtout SANS POO (programmation orientée objets). Ce fut ardu, mais l'objectif a été atteint. </p>
                <p>Le but du jeu était de résoudre trois énigmes pour pouvoir s'échapper d'une île.</p>
                <p>J'ai d'ailleurs fait <span class="emphasis">un site</span> pour le présenter : <a href="https://redshark61.github.io/ile_au_python_site.github.io/index.html" target="_blank"> L'île aux Pythons</a></p>
                <?= githubLink("L'île aux Pythons", "https://github.com/Redshark61/Python-Island") ?>
            </div>
            <div class="projects__text text">
                <h3>Night Monster Fever</h3>
                <p>Le but de se projet était de faire un jeu 2D en <span class="emphasis">Python</span> qui utilise une base de données. La base en question était une base <span class="emphasis">PostgreSQL</span>.</p>
                <p>Le but du jeu est de finir 5 Donjons remplis de monstres. La particularité du jeu est le cycle jour nuit, où durant la nuit les monstres sont plus forts, mais rapportent plus d'expérience.</p>
                <?= githubLink("Night Monster Fever", "https://github.com/Redshark61/night-monster-fever") ?>
            </div>
            <div class="projects__image">
                <img src="./sources/ressources/projects/image2.png" alt="">
            </div>
            <div class="projects__image">
                <img src="./sources/ressources/projects/image3.png" alt="">
            </div>
            <div class="projects__text text">
                <h3>Mon carnet de santé</h3>
                <p>C'est un site internet qui permet de relier les patients et les médecins. Le but était de pouvoir facilement avoir accès à toutes les informations nécessaires concernant sa santé (historique, ordonnaces, messagerie...). Le patient pouvait chatter directement avec son médecin.</p>
                <p>Ce site a été fait avec <span class="emphasis">Django</span>. Il utilise aussi une base de donnés <span class="emphasis">PostgreSQL</span>, et a été hébergé sur <span class="emphasis">Heroku</span>. Il ne l'est plus, car même si le site est fictif, des personnes mal intentionné aurait pu l'utiliser à des fins malveillantes.</p>
                <p>Vous pouvez toujours l'utiliser chez vous en suivant les instructions sur le repo GitHub ci-dessous :</p>
                <?= githubLink("Mon carnet de santé", "https://github.com/Redshark61/mon-carnet-de-sante") ?>
            </div>
        </div>
    </section>

    <a class="button button--pink button--center" href="https://github.com/Redshark61" target="_blank">Tu veux en voir plus ?</a>

    <section class="contact">
        <div class="contact__links">
            <div>
                <h1 id="js-contact-title">Contacte moi !</h1>
            </div>
            <div class="contact__mean">
                <ul>
                    <li><?= links("Redshark61", "https://github.com/Redshark61", "github") ?></li>
                    <li><?= links("tim.vannier@gmail.com", "#", "mail") ?></li>
                    <li><?= links("Timothée Vannier", "https://www.linkedin.com/in/timothée-vannier-19150b238/", "linkedin") ?></li>
                    <li><?= links("TimotheeVannier", "https://twitter.com/TimotheeVannier", "twitter") ?></li>
                </ul>
            </div>
        </div>

        <div class="contact__mail text">
            <div class="container">
                <h3 class="subtitle">Tu as un petit message ?</h3>
                <form action="">
                    <div class="form__group">
                        <label for="mail" class="label">Ton mail</label>
                        <input type="email" id="mail" name="mail" placeholder="Ton mail">
                    </div>
                    <div class="form__group">
                        <label for="subject" class="label">Le sujet du message</label>
                        <input type="text" id="subject" name="subject" placeholder="Le sujet">
                    </div>
                    <div class="form__group">
                        <label for="message" class="label">Ton message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="button" class="button button--pink button--center">Envoyer !</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>