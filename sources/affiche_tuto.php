<?php
require 'functions/connect_bdd.php';
$required_tuto = $_GET['name'];

$reponse = $bdd->prepare('SELECT * FROM tuto WHERE file_name = :required_tuto');
$reponse->execute(array(
    'required_tuto'=>$required_tuto
));
$donnees = $reponse->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="prism/prism.css">
        <link rel="shortcut icon" href="ressources/logo.ico" type="image/x-icon">

    <script src="js/responsive.js" defer></script>
    <script src="prism/prism.js" defer></script>
    <script src="js/cursor.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="prism.css">
    <title><?= $donnees['titre'] ?></title>
</head>
<body>
<div class="cursor"></div>
    <?php
    require 'nav.php';
    echo $donnees['contenu'];
    $reponse->closeCursor();
    ?>
    <script src="js/responsive.js"></script>
    <script src="js/cursor.js"></script>
    <script src="prism.js"></script>
</body>
</html>