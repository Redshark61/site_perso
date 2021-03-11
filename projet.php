<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="ressources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/main.css">
    <script src="responsive.js" defer></script>
    <script src="cursor.js" defer></script>
    <title>Projets</title>
</head>

<body>
    <div class="cursor"></div>
    <?php require 'nav.php' ?>

    <section class="explication">
        <p>Voici mes différents projets. Vous pouvez les visiter, les tester, et revenir quand bon vous semble via le bouton &quot;Revenir à la page Projet&quot;. Ces prjets n'ont pour la pupart aucun but. Les boutons n'ont pas de fonction. C'est juste une galerie de présentations de mes nombreux talents &#x263A;.</p>
    </section>

    <div class="projet">
        <a href="animals/index.php">
            <div class="card">
                <h2>Mini blog animal</h2>
                <img src="animals/renne.jpg" alt="Image de présentation pour le site &#34Animal Lover&#34 ">
                <div class="projet-description">
                    <h3>Adaptatif : <span class="mark">&#10003</span></h3>
                    <p>Petit blog pour tester les lien, les carroussels d'images... Fait en partie
                        au
                        lycée</p>
                </div>
            </div>
        </a>

        <a href="Binaire/Décimal.html">
            <div class="card">
                <h2>Conversion Binaire / Décimal</h2>
                <img src="Binaire/binaire.jpg" alt="Image de présentation pour le site &#34Conversion en Binaire#34 ">
                <div class="projet-description">
                    <h3>Adaptatif : <span class="mark">&#10003</span></h3>
                    <p>Site pour convertir le binaire en décimal et vice-versa</p>
                </div>
            </div>
        </a>

        <a href="CV/CV.html">
            <div class="card">
                <h2>CV (premier projet)</h2>
                <img src="ressources/loupe.svg" alt="Image de présentation de mon CV">
                <div class="projet-description">
                    <h3>Adaptatif : <span class="mark">&#10003;</span></h3>
                    <p>Mon tout premier projet fait avec l'aide des cours d'OpenClassroom</p>
                </div>
            </div>
        </a>

        <a href="fancy_introo/index.html">
            <div class="card">
                <h2>Affichage avec Gsap</h2>
                <img src="fancy_introo/hero.jpg" alt="Image de présentation du test avec gsap">
                <div class="projet-description">
                    <h3>Adaptatif : <span class="mark" style="color: red;">X</span></h3>
                    <p>Essai d'affichage avec Gsap. Application du tutoriel de DevEd.</p>
                </div>
            </div>
        </a>
        <a href="Liste sorter/index.html">
            <div class="card">
                <h2>Tri de liste</h2>
                <img src="ressources/Liste.svg" alt="Image de présentation pour le tri de listes">
                <div class="projet-description">
                    <h3>Adaptatif : <span class="mark">&#10003;</span></h3>
                    <p>Utilisation de Bootstrap pour trier une liste</p>
                </div>
            </div>
        </a>


    </div>


</body>

</html>