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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <title>A propos</title>
</head>

<body>
    <div class="cursor"></div>
    <?php require 'nav.php' ?>
    <h2 class="about__title">Hey !</h2>

    <section class="about">
        <img src="ressources/photo_profil.jpg" alt="Moi">

        <div class="about__presentation ">
            <p>Salut, moi c'est Timothée ! J'ai 18 ans, et je suis un jeune développeur web.
                J'ai fait ce site pour montrer mes compétences, pour un futur employeur, et simplement pour le fun. C'est aussi, et surtout
                un
                moyen d'apprendre, de mettre à l'épreuve mes capacités.</p>

            <h2>Quel est mon parcours ?</h2>
            <p>J'ai commencé la programmation au collège. Par la suite, j'ai appris le Python, Java, C++... Cela fait désormais quelques années que je me concentre sur le développement web, dans le but d'en faire mon métier. Vous pouvez aller voir ma page Github (sous le nom Redshark61) afin d'avoir un aperçu de mes différents projets.</p>
        </div>
    </section>


    <section>
        <h2 class="titre_about">Où me retrouver ?</h2>

        <div class="div_insta">
            <a href="https://www.instagram.com/little_french_dev/">
                <img class="svg_logo" src="ressources/Insta logo.svg" alt="insta">
                <p>&nbsp; : &nbsp;@little_french_dev</p>
            </a>
        </div>

        <div class="div_twitter">
            <img class="svg_logo" src='ressources/twitter.svg' alt="twitter">
            <p>&nbsp; : &nbsp;@TimothéeVannier</p>
        </div>
        <div class="div_git">
            <a href="https://github.com/Redshark61">
                <img class="svg_logo" src="ressources/github.svg" alt="github">
                <p>&nbsp; : &nbsp;@Redshark61</p>
            </a>
        </div>


    </section>

    <section>
        <h2 class="titre_about">Quels sont mes sources d'inspirations ?</h2>
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