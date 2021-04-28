<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/main.css">
    <script src="js/responsive.js" defer></script>
    <script src="js/cursor.js" defer></script>

    <title>Tutoriels</title>
</head>
<body>
        <div class="cursor"></div>

    <?php
    require 'nav.php';
    require 'functions/connect_bdd.php';
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