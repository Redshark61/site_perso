<?php
require './sources/functions/connect_bdd.php';

$reponse = $bdd->query('SELECT * FROM tuto');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./sources/style/main.css">
    <link rel="shortcut icon" href="./sources/ressources/logo.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="./sources/js/responsive.js" defer></script>
    <script src="./sources/js/cursor.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Tutoriels</title>
</head>

<body>
    <div class="cursor"></div>
    <?php
    require 'nav.php';

    while ($donnees = $reponse->fetch()) {
        if ($donnees['readable']) :
    ?>
            <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/site_perso/affiche_tuto.php?name=<?= $donnees['file_name'] ?>" class="container_article">
                <h2><?= $donnees['titre'] ?></h2>
                <p><?= htmlspecialchars($donnees['description']) ?></p>
                <h3><?= htmlspecialchars($donnees['date_creation']) ?></h3>
            </a>

    <?php
        endif;
    }
    $reponse->closeCursor();
    ?>
</body>

</html>