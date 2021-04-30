<?php
require 'functions/connect_bdd.php';

$reponse = $bdd->query('SELECT * FROM tuto');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style/main.css">
    <script src="js/responsive.js" defer></script>
    <script src="js/cursor.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="cursor"></div>
<?php
require 'nav.php';

while ($donnees = $reponse->fetch()) {
?>
    <a href="http://<?=$_SERVER['HTTP_HOST']?>/site_perso/sources/affiche_tuto.php?name=<?= $donnees['file_name'] ?>" class="container_article">
        <h2><?= $donnees['titre'] ?></h2>
        <p><?= htmlspecialchars($donnees['description']) ?></p>
        <h3><?= htmlspecialchars($donnees['date_creation']) ?></h3>
    </a>

<?php
}
$reponse->closeCursor();
?>
</body>
</html>