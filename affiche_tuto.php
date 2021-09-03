<?php
require './sources/functions/connect_bdd.php';
$required_tuto = $_GET['name'];

$reponse = $bdd->prepare('SELECT * FROM tuto WHERE file_name = :required_tuto');
$reponse->execute(array(
    'required_tuto' => $required_tuto
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
    <link rel="stylesheet" href="./sources/style/main.css">
    <link rel="shortcut icon" href="./sources/ressources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./sources/prism/prism.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <script src="./sources/prism/prism.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <title><?= $donnees['titre'] ?></title>
</head>

<body>
    <div class="cursor"></div>
    <div id="overlay"></div>
    <div id="exit">X</div>
    <?php
    require 'nav.php';
    if ($_SERVER['SERVER_NAME'] == 'beredy.tk') {
        $contenu = str_replace('source src="ressources/tuto', 'source src="http://create-tuto.beredy.tk/ressources/tuto', $donnees['contenu']);
        $contenu = str_replace('img src="ressources/tuto', 'img src="http://create-tuto.beredy.tk/ressources/tuto', $contenu);
        $contenu = str_replace('img src="ressources/question-mark.png', 'img src="./sources/ressources/question-mark.png', $contenu);
    } elseif ($_SERVER['SERVER_NAME'] == 'localhost') {
        $contenu = str_replace('source src="ressources/tuto', 'source src="http://localhost/BDD-MySQL/ressources/tuto', $donnees['contenu']);
        $contenu = str_replace('img src="ressources/tuto', 'img src="http://localhost/BDD-MySQL/ressources/tuto', $contenu);
        $contenu = '<h1 id="tuto-title">' . $donnees['titre'] . '</h1>' . $contenu;
    }

    echo $contenu;
    $reponse->closeCursor();
    ?>
    <script src="./sources/js/fullscreen-image.js"></script>
    <script src="./sources/js/responsive.js"></script>
    <script src="./sources/js/cursor.js"></script>
</body>

</html>