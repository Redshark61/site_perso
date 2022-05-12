<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sources/style/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <script src="./sources/js/responsive.js" defer></script>
    <script src="./sources/js/cursor.js" defer></script>

    <title>Tutoriels</title>
</head>

<body>
    <div class="cursor"></div>

    <?php
    require 'nav.php';
    require './sources/functions/connect_bdd.php';
    $reponse = $bdd->query('SELECT * FROM tuto');
    ?>

    <main>
        <?php
        while ($donnees = $reponse->fetch()) {
        ?>
            <div class="container_article">
                <h2><?= htmlspecialchars($donnees['titre']) ?></h2>
                <p><?= htmlspecialchars($donnees['description']) ?></p>
                <h3><?= htmlspecialchars($donnees['date_creation']) ?></h3>
                <a href="tuto/<?= $donnees['file_name'] ?>"> <?= $donnees['titre'] ?></a>
            </div>

        <?php
        }
        $reponse->closeCursor();
        ?>
    </main>


</body>

</html>