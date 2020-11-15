<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/style_projet.css">
    <script src="responsive.js" defer></script>

    <title>Projets</title>
</head>

<body>
    <?php require 'nav.php' ?>

    <section class="explication">
        <p>Voici mes différents projets. Vous pouvez les visiter, les tester, et revenir quand bon vous semble via le bouton &quot;Revenir à la page Projet&quot;</p>
    </section>

    <div class="projet">
        <a href="animals/index.php">
            <div class="card">
                <img src="animals/renne.jpg" alt="Image de présentation pour le site &#34Animal Lover&#34 ">
                <div class="description">
                    <p>Adaptatif : <span class="mark">&#10003</span></p>
                    <p>Titre : <span>Mini blog animal</span></p>
                    <p>Description : <span>Petit blog pour tester les lien, les carroussels d'images... Fait en partie
                            au
                            lycée</span></p>
                </div>
            </div>
        </a>

        <a href="Binaire/Décimal.html">
            <div class="card">
                <img src="Binaire/binaire.jpg" alt="Image de présentation pour le site &#34Conversion en Binaire#34 ">
                <div class="description">
                    <p>Adaptatif : <span class="mark">&#10003</span></p>
                    <p>Titre : <span>Conversion Binaire / Décimal</span></p>
                    <p>Description : <span>Site pour convertir le binaire en décimal et vice-versa</span></p>
                </div>
            </div>
        </a>

        <a href="CV/CV.html">
            <div class="card">
                <div class="description">
                    <p>Adaptatif : <span class="mark">&#10003</span></p>
                    <p>Titre : <span>CV (premier projet)</span></p>
                    <p>Description : <span>Mon tout premier projet fait avec l'aide des cours d'OpenClassroom</span></p>
                </div>
            </div>
        </a>

    </div>


</body>

</html>