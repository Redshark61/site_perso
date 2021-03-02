<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">
    <script src="responsive.js" defer></script>
    <script src="cursor.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <script src="bubble.js" defer></script>
    <title>BeRedy - Acceuil</title>
</head>

<body>
    <div class="cursor"></div>
    <?php require 'nav.php' ?>

    <main>
        <section>
            <h2>Hey !</h2>
            <p>Salut, moi c'est Timothée ! J'ai 18 ans, et je suis un jeune développeur web.
                J'ai fait ce site pour montrer mes compétences, pour un futur employeur, et simplement pour le fun. C'est aussi, et surtout
                un
                moyen d'apprendre, de mettre à l'épreuve mes capacités.</p>
        </section>
        <div class="action-button">
            <button class="projet"> Va voir mes projets !
                <div class="bubble" data-width='0'></div>

                <div class="arrow-right"></div>
            </button>
        </div>
        <section>
            <h2>Et BeRedy alors ?</h2>
            <p>BeRedy est tout simplement une allusion à mon nom de joueur dans les jeux-vidéo : Redshark61. Bien sûr,
                vous avez intêret à être prêt, car du lourd arrive pour ce site, du très très lourd... Alors, be ready !
            </p>
        </section>


    </main>


</body>

</html>