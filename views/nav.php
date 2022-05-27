    <?php
    function addClass($url)
    {
        if (($_SERVER['REQUEST_URI'] == "/site_perso/" . $url) || ($_SERVER['REQUEST_URI'] == "/site_perso/sources/" . $url) || ($_SERVER['REQUEST_URI'] == '/sources/' . $url) || ($_SERVER['REQUEST_URI'] == "/" . $url)) {
            return " class='current_location'";
        }
    }
    ?>

    <nav>
        <h1 class="hovered main-title"><a href="./" id="title"><span class="orange">T</span>code</a></h1>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="div-nav">
            <a href="./"><button <?=
                                    addClass('')
                                    ?>>Accueil</button></a>
            <a href="./projets"><button <?=
                                        addClass('projets')
                                        ?>>Projets</button></a>
            <a href="./about"><button <?=
                                        addClass('about')
                                        ?>>A propos</button></a>
            <a href="./contact"><button <?=
                                        addClass('contact')
                                        ?>>Me contacter</button></a>
            <a href="./affiche_liste"><button <?=
                                                addClass('affiche_liste')
                                                ?>>Tutoriels</button></a>
        </div>
    </nav>