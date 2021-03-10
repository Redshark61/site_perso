<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/responsive.css"> -->
    <link rel="stylesheet" href="style/main.css">
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

        <div class="home-container">
            <h1 class="intro">Bienvenue sur mon <span class="bold">portfolio</span> !</h1>
            <h3>Viens découvrir mes créations, et en apprendre sur moi et mon travail !</h3>
            <div class="action-button">
                <button class="projet"> Va voir mes projets !
                    <div class="bubble" data-width='0'></div>

                    <div class="arrow-right"></div>
                </button>
            </div>
        </div>



    </main>


</body>

</html>