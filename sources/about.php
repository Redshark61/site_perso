<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="ressources/logo.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="js/responsive.js" defer></script>
    <script src="js/cursor.js" defer></script>
    <script src="./js/about_cards.js" defer></script>
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
            <h1 class="about__title">Hey !</h1>
            <p class="about__description">Salut, moi c'est Timothée ! J'ai 18 ans, et je suis un jeune développeur web.</p>
        </section>
    </div>

    <h2 class="h2__appris">J'ai appris :</h2>
    <section class="competence">

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>Python</h3>
                    <img id="python" src="ressources/python.png">
                </div>
                <div class="back face">
                    <p>Cela fait désormais 4 ans que j'ai appris le python. J'ai par exemple fais un <em>bot discord</em> et différents scripts plus ou moins utile. Pour cela j'ai été amené à utiliser différentes librairies tel que <em>Tkinter</em>, la <em>reconnaissance vocal</em> de google ou des librairies pour communiquer avec des cartes <em>Arduino</em>.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>PHP et MySQL</h3>
                    <img id="php" src="ressources/php-mysql-logo.png">
                </div>
                <div class="back face">
                    <p>Ce site en entier est construit en <em>PHP</em>, et que j'ai fait mon propre <em>CMS</em> afin de facilement gérer les différents tutoriels qui seront écrits. J'ai suivi en entier le <em>cours PHP et MySQL</em> d'OpenClassrooms. Je n'ai pas peur d'utiliser les <em>bases de données</em>, puisque moi même j'en utilises.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>C++</h3>
                    <img id="cpp" src="ressources/cpp.svg">
                </div>
                <div class="back face">
                    <p>Je ne vais pas m'étendre sur <em>C++</em>. C'est un langage que j'ai appris par <em>curiosité</em>. J'aime me documenter, et apprendre. Il le semblait donc tout indiqué d'essayer au moins une fois le C++. Je ne l'ai pas appris afin de devenir un pro, mais simplement pour <em>découvrir de nouveaux horizons</em>.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>Java</h3>
                    <img id="java" src="ressources/java_logo.png">
                </div>
                <div class="back face">
                    <p>De la même façon que pour le C++, <em>Java</em> est un langage appris par curiosité. Mais contrairement au C++, je suis allé plus loin dans mon apprentissage du Java, car j'avais comme objectif de <em>créer un jeux-vidéo</em> ! La bonne blague, je ne suis pas allé plus loin que les bases d'un <em>GUI</em>.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>JQuery</h3>
                    <img id="jquery" src="ressources/jquery.png">
                </div>
                <div class="back face">
                    <p>Au début de mon apprentissage de <em>Javascript</em>, je souhaitais ne jamais utiliser le JQuery pour la simple et bonne raison que je n'en voyais pas l'utilité. Mais suite à la <em>formation Développeur Web</em>, je vois JQuery tout autrement, et il m'est désormais d'une <em>aide précieuses</em>.</p>
                </div>
            </div>

        </div>
        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>React</h3>
                    <img id="react" src="ressources/react.png">
                </div>
                <div class="back face">
                    <p><em>React</em> est sur ma To-Do List de bibliothèque Js à apprendre. J'ai déjà commencé à apprendre les bases, et sais créer des <em>composants</em>, mais j'ai encore beaucoup à apprendre de cette <em>outil puissant</em>.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>GSAP</h3>
                    <img id="gsap" src="ressources/gsap.png">
                </div>
                <div class="back face">
                    <p>J'ai déjà utilisé <em>GSAP</em> dans différents projets que vous pouvez retrouver sur ce site. Cette librairie simple d'utilisation dévoile tout son potentiel lorsqu'elle est utilisé de pair avec d'autres outils, tel que <em>ThreeJs</em>.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>ThreeJs</h3>
                    <img id="gsap" src="ressources/three.png">
                </div>
                <div class="back face">
                    <p><em>ThreeJs</em> est une bibliothèque que j'ai toujours voulu essayer. Grâce à l'aide nombreux tutoriels Youtube, j'ai pu toucher du doigt les possibilité qu'offre ThreeJs et ainsi produire quelques projets que vous trouvez ici. ThreeJs m'a également permis d'essayer la <em>modélisation 3D</em> avec <em>Blender</em>.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="container_competence">
                <div class="front face">
                    <h3>Flutter</h3>
                    <img id="flutter" src="ressources/flutter.png">
                </div>
                <div class="back face">
                    <p>J'ai eu une période de <em>dévellopement d'application mobile</em>. Pour cela, j'ai décidé d'apprendre <em>Flutter</em>. J'ai réalisé quelques projets, comme une appli de chat ou qui affiche l'heure en fonction des pays. Cela m'a appris à utiliser des <em>API</em> et des <em>firebase</em>.</p>
                </div>
            </div>
        </div>


    </section>


</body>

</html>