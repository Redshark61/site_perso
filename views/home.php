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
            <h1 class="hero__main-title">Un simple portfolio ?</h1>
            <h1 class="hero__main-title">Un mine d'or !</h1>
        </div>
        <picture class="hero__picture">
            <source media="(max-width: 700px)" srcset="sources/ressources/Myself.png">
            <img class="hero__img" src="sources/ressources/Myself@2x.png" alt="">
        </picture>
        <!-- <img class="hero__picture" src="./sources/ressources/Myself@2x.png" alt=""> -->
    </div>

</body>

</html>