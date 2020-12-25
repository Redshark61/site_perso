<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/about.css">
    <script src="responsive.js" defer></script>
    <script src="cursor.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <title>A propos</title>
</head>

<body>
    <div class="cursor"></div>
    <?php require 'nav.php' ?>
    <section>
        <h2>Où me retrouver ?</h2>

        <div class="div_insta">
            <a href="https://www.instagram.com/little_french_dev/">
                <?php require 'ressources/Insta logo.svg' ?>
                <p>&nbsp; : @little_french_dev</p>
            </a>
        </div>

        <div class="div_twitter">
            <?php require 'ressources/twitter.svg' ?>
            <p>&nbsp; : @TimothéeVannier</p>
        </div>

        <div class="div_git">
            <a href="https://github.com/Redshark61">
                <?php require 'ressources/github.svg' ?>
                <p>&nbsp; : @Redshark61</p>
            </a>
        </div>

    </section>

    <section>
        <h2>Quels sont mes sources d'inspirations ?</h2>
        <p>Elles sont nombreuses ! On pourrait citer :</p>
        <ul>
            <li class="li-about"><a href="https://www.youtube.com/channel/UClb90NQQcskPUGDIXsQEz5Q"><img src="ressources/deved.jpg" alt="Miniature de la chaîne Dev ed">Dev ed :</a>&nbsp;<p>
                    Un savant mélange entre humour et tutoriel front-end
                </p>
            </li>
            <li class="li-about"><a href="https://www.youtube.com/channel/UCLOAPb7ATQUs_nDs9ViLcMw"><img src="ressources/benjamin_code.jpg" alt="Miniature de la chaîne Benjamin Code">Benjamin Code :</a>&nbsp;<p>
                    Le meilleur des freelancer
                </p>
            </li>
            <li class="li-about"><a href="https://www.youtube.com/channel/UCj_iGliGCkLcHSZ8eqVNPDQ"><img src="ressources/grafikart.jpg" alt="Miniature de la chaîne Grafikart">Grafikart :</a>&nbsp;<p>
                    Un fullstack, un vrai
                </p>
            </li>
            <li class="li-about"><a href="https://www.youtube.com/channel/UCWr0mx597DnSGLFk1WfvSkQ"><img src="ressources/kalle.jpg" alt="Miniature de la chaîne Kalle Hallden">Kalle Hallden :</a>&nbsp;<p>
                    La version pratique et automatique de python
                </p>
            </li>
            <li class="li-about"><a href="https://www.youtube.com/channel/UC4JX40jDee_tINbkjycV4Sg"><img src="ressources/tim.jpg" alt="Miniature de la chaîne Tech With Tim">Tech with Tim : </a>&nbsp;<p>
                    Django, Flutter, Python... Tant de savoir faire en un seul homme !
                </p>
            </li>
        </ul>
    </section>
    <p>Merci à <a href="https://www.flaticon.com/authors/roundicons/">FlatIcon</a> pour les icônes. Sauf pour l'icône Insta et le logo avec la loupe pour le projet de CV qui ont été faites à la main !</p>
</body>

</html>