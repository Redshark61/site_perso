<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="ressources/logo.ico" type="image/x-icon">
    <script src="responsive.js" defer></script>
    <script src="cursor.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">

    <title>A propos</title>
</head>

<body>
    <div class="cursor"></div>
    <?php require 'nav.php' ?>

    <div class="about_intro">
        <picture>
            <source srcset="ressources/grand_photo_profil.jpg" alt="Moi" media="(min-width: 1000px)">
            <img src="ressources/photo_profil.jpg" alt="Moi">
        </picture>
        <section class="about">
            <h2 class="about__title">Hey !</h2>
            <p class="about__description">Salut, moi c'est Timothée ! J'ai 18 ans, et je suis un jeune développeur web.</p>
        </section>
    </div>

    <section class="competence">
        <h3 class="competence__appris">J'ai appris :</h3>

        <div class="wrapper" id="wrapper_python">
            <div class="container_competence" id="container_python">
                <p>Python</p><img id="python" src="ressources/python.png">
            </div>
        </div>

        <div class="wrapper" id="wrapper_php">
            <div class="container_competence" id="container_php">
                <img id="php" src="ressources/php-mysql-logo.png">
                <p>PHP et MySQL</p>
            </div>
        </div>

        <div class="wrapper" id="wrapper_cpp">
            <div class="container_competence" id="container_cpp">
                <p>C++</p><img id="cpp" src="ressources/cpp.svg">
            </div>
        </div>

        <div class="wrapper" id="wrapper_java">
            <div class="container_competence" id="container_java">
                <img id="java" src="ressources/java_logo.png">
                <p>Java</p>
            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
    <script src="./about_effect.js"></script>

</body>

</html>