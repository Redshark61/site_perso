<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./sources/ressources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./sources/style/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <script src="./sources/js/responsive.js" defer></script>
    <script src="./sources/js/cursor.js" defer></script>
    <title>Projets</title>
</head>

<body>
    <div class="cursor"></div>
    <?php require 'nav.php' ?>

    <section class="explication">
        <p>Voici mes différents projets. Vous pouvez les visiter, les tester, et revenir quand bon vous semble via le bouton &quot;Revenir à la page Projet&quot;. Ces prjets n'ont pour la pupart aucun but. Les boutons n'ont pas de fonction. C'est juste une galerie de présentations de mes nombreux talents &#x263A;.</p>
    </section>

    <div class="projet">


        <a href="./public/fancy_introo/index">
            <div class="card">
                <h3 class="h3_projets">Affichage avec Gsap</h3>
                <img src="./public/fancy_introo/hero.jpg" alt="Image de présentation du test avec gsap">
                <div class="projet-description">
                    <h3 class="h3--petit">Adaptatif : <span class="mark" style="color: red;">X</span></h3>
                    <p>Essai d'affichage avec Gsap. Application du tutoriel de DevEd.</p>
                </div>
            </div>
        </a>

        <a href="./public/threejs/src/index.html">
            <div class="card">
                <h3 class="h3_projets">Balle 3D avec ThreeJs</h3>
                <img src="./sources/ressources/three_ball.png" alt="Image de présentation pour le projet de balle 3D avec ThreeJs">
                <div class="projet-description">
                    <h3 class="h3--petit">Adaptatif : <span class="mark">&#10003;</span></h3>
                    <p>Tout premier projet de 3D avec ThreeJs.</p>
                </div>
            </div>
        </a>
        <a href="./public/particules/src/index.html">
            <div class="card">
                <h3 class="h3_projets">Particules 3D avec ThreeJs</h3>
                <img src="./sources/ressources/three_particles.png" alt="Image de présentation pour le projet de balle 3D avec ThreeJs">
                <div class="projet-description">
                    <h3 class="h3--petit">Adaptatif : <span class="mark">&#10003;</span></h3>
                    <p>Essaie de particules 3D avec ThreeJs.</p>
                </div>
            </div>
        </a>
        <a href="./public/raycasting/src/index.html">
            <div class="card">
                <h3 class="h3_projets">Raycasting avec ThreeJs</h3>
                <img src="./sources/ressources/three_raycasting.png" alt="Image de présentation pour le projet de raycasting avec ThreeJs">
                <div class="projet-description">
                    <h3 class="h3--petit">Adaptatif : <span class="mark">&#10003;</span></h3>
                    <p>Effet de cartes et essai d'interaction avec ThreeJs</p>
                </div>
            </div>
        </a>
        <a href="./public/svg_bouncing_line/index.html">
            <div class="card">
                <h3 class="h3_projets">Animation de SVG</h3>
                <img src="./sources/ressources/svg_bouncing_line.png" alt="Image de présentation pour le projet d'animation de SVG">
                <div class="projet-description">
                    <h3 class="h3--petit">Adaptatif : <span class="mark">&#10003;</span></h3>
                    <p>Animation de SVG avec Gsap</p>
                </div>
            </div>
        </a>
        <a href="./public/three_blender/src/index.html">
            <div class="card">
                <h3 class="h3_projets">Modélisation avec Blender</h3>
                <img src="./sources/ressources/three_blender.png" alt="Image de présentation pour le projet d'intégration d'objet 3D fait avec Blender dans ThreeJs">
                <div class="projet-description">
                    <h3 class="h3--petit">Adaptatif : <span class="mark">&#10003;</span></h3>
                    <p>Essai d'intégration d'objet 3D fait avec Blender dans ThreeJs</p>
                </div>
            </div>
        </a>



    </div>

</body>

</html>