<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="ressources/logo.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="js/cursor.js" defer></script>
    <script src="./js/about_cards.js" defer></script>
    <script src="./js/open.js" defer></script>
    <script src="js/responsive.js" defer></script>
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
                    <p>Cela fait désormais 4 ans que j'ai appris le python. J'ai par exemple fais un <em>bot discord</em> et différents scripts qui m'ont amené à utiliser différentes librairies tel que <em>Tkinter</em>, la <em>reconnaissance vocal</em> de google ou la communication avec des cartes <em>Arduino</em>.</p>
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
                    <p>Ce site en entier est construit en <em>PHP</em>, et que j'ai fait mon propre <em>CMS</em> afin de facilement gérer les différents tutoriels qui seront écrits. J'ai suivi en entier le <em>cours PHP et MySQL</em> d'OpenClassrooms. J'utilise également des <em>bases de données</em>.</p>
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
                    <p>Je ne vais pas m'étendre sur <em>C++</em>. C'est un langage que j'ai appris par <em>curiosité</em> car j'aime apprendre. Il me semblait donc tout indiqué d'essayer au moins une fois le C++. Je ne l'ai pas appris afin de devenir un pro, mais simplement pour <em>découvrir de nouveaux horizons</em>.</p>
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
                    <p>De la même façon que pour le C++, <em>Java</em> est un langage appris par curiosité. Mais contrairement au C++, je suis allé plus loin dans mon apprentissage du Java. Je ne suis pas allé plus loin que les bases d'un <em>GUI</em>.</p>
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
                    <p>J'ai été amené lors de ma <em>formation Développeur Web</em>, à apprendre le JQuery. C'est un outil intéressant mais qui ne remplace pas à mon avis la rapidité du <em>Javascript</em>.</p>
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
                    <p><em>React</em> est sur ma To-Do List de bibliothèque Js à apprendre. J'ai déjà commencé à apprendre les bases, et sais créer des <em>composants</em>, mais j'ai encore beaucoup à apprendre.</p>
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
                    <img id="three" src="ressources/three.png">
                </div>
                <div class="back face">
                    <p><em>ThreeJs</em> est une bibliothèque que j'ai toujours voulu essayer. J'ai pu toucher du doigt les possibilité qu'offre ThreeJs et ainsi produire quelques projets que vous trouvez ici. ThreeJs m'a également permis d'essayer la <em>modélisation 3D</em> avec <em>Blender</em>.</p>
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
                    <p>J'ai essayer de <em>dévelloper des applications mobile</em>. Pour cela, j'ai décidé d'apprendre <em>Flutter</em>. J'ai réalisé quelques projets, comme une appli de chat, ou qui affiche l'heure en fonction des pays. Cela m'a appris à utiliser des <em>API</em> et des <em>firebase</em>.</p>
                </div>
            </div>
        </div>


    </section>
    <button id="open">Ouvrir</button>
    <svg id="wave_about" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveedAspectratio="xMidyMid meet">
        <path fill="#6b9ac4" fill-opacity="1" d="M0,32L21.8,42.7C43.6,53,87,75,131,90.7C174.5,107,218,117,262,117.3C305.5,117,349,107,393,117.3C436.4,128,480,160,524,154.7C567.3,149,611,107,655,90.7C698.2,75,742,85,785,117.3C829.1,149,873,203,916,202.7C960,203,1004,149,1047,117.3C1090.9,85,1135,75,1178,74.7C1221.8,75,1265,85,1309,101.3C1352.7,117,1396,139,1418,149.3L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
    </svg>
    <section class="history">
        <object type="image/svg+xml" data="ressources/Options.svg" alt="Mes options au lycée : Mathématiques
Matématiques expertes
Anglais euro
Science de l’ingénieure"></object>
        <object type="image/svg+xml" data="ressources/parcours.svg" alt="J’ai commencé la programation dès le collège avec Scratch. C’est plutôt basique mais ça m’a donné l’envie de créer et d’inventer. Par la suite la programation c’est faite en Basic sur ma Casio. Puis j’ai appris le Python à mon entrée en seconde. Beaucoup de perspective se sont alors ouvertes. J’ai décidé d’en apprendre plus, et d’être meilleur en programmation. J’ai donc beaucoup exploré en apprenant le Java, C++, Flutter, mais c’est mon apprentissage du Js qui m’a le plus marqué et m’a convaincu d’être un développeur web."></object>
        <object type="image/svg+xml" data="ressources/formation.svg" alt="Je suis un autodidacte, je ne suis donc pas allée dans des écoles spécialisé. J’ai beaucoup appris sur le site OpenClassroom. J’y ai 
suivi des cours de Pyhton, Java, PHP & MySQL, HTML, CSS, Js et 
bien d’autres. Ce site m’a donnée toutes les bases nécessaire à mon apprentissage. Par la suite, j’ai approfondie mes connaissances au fur
et à mesure de mes besoins en allant sur internet. Je me suis 
également beaucoup instruit par des chaînes Youtube comme 
Grafikart, FireShip ou DesignCourse."></object>
    </section>

</body>

</html>