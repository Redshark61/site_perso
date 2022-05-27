<?php
require_once './sources/functions/helper.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@600&family=Lobster&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/site_perso/public/gsap/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous" defer></script>
    <script src="/site_perso/public/gsap/app.js" defer></script>

    <title>fancy intro</title>
</head>

<body>
    <main>
        <section class="landing">
            <nav>
                <hi id="logo">Afloat</hi>
                <ul class="nav-links">
                    <li class="links">Home</li>
                    <li class="links">Contact</li>
                    <li class="links">About</li>
                    <li class="links" id="back">
                        <a href=<?= baseURL() . "projets" ?>>Retour à la page &quot; Projets &quot;</a>
                    </li>
                </ul>
            </nav>
            <h2 class="big-text">Stay Afloat</h2>
        </section>
    </main>
    <div class="intro">
        <div class="intro-text">
            <h1 class="hide">
                <span class="text">Creating Innovation</span>
            </h1>
            <h1 class="hide">
                <span class="text">For everyday</span>
            </h1>
            <h1 class="hide">
                <span class="text">For everybody</span>
            </h1>
        </div>
    </div>
    <div class="slider"></div>
</body>

</html>