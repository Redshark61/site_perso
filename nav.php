    <?php
    function addClass($url)
    {
        if (($_SERVER['SCRIPT_NAME'] == "/site_perso/" . $url) || ($_SERVER['SCRIPT_NAME'] == "/site_perso/sources/" . $url) || ($_SERVER['SCRIPT_NAME'] == '/sources/' . $url) || ($_SERVER['SCRIPT_NAME'] == "/" . $url)) {
            echo " class='current_location'";
        }
    }
    ?>

    <nav>
        <h1 class="hovered main-title"><a href="index.php" id="title">BeRedy</a></h1>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="div-nav">
            <a href="./index.php"><button <?php
                                            addClass('index.php')
                                            ?>>Accueil</button></a>
            <a href="./sources/projet.php"><button <?php
                                                    addClass('projet.php')
                                                    ?>>Projets</button></a>
            <a href="./sources/about.php"><button <?php
                                                    addClass('about.php')
                                                    ?>>A propos</button></a>
            <a href="./sources/contact.php"><button <?php
                                                    addClass('contact.php')
                                                    ?>>Me contacter</button></a>
            <a href="./sources/affiche_liste.php"><button <?php
                                                            addClass('affiche_liste.php')
                                                            ?>>Tutoriels</button></a>
        </div>
    </nav>