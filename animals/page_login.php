<!DOCTYPE html>
<html>

<head>
    <title>Nav</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
</head>

<body>

    <?php require 'nav.php' ?>
    <div id="page_login">

        <div id="presentation_login">

            <h1 id="welcome">Welcome</h1>
            <p>Join us for free !</p>
            <p>Lorem ipsum dolor itaque, et minima veniam nostrum vel dolor ratione optio soluta beatae nemo commodi
                corrupti velit quibusdam fugit sint dolore. Doloremque dolorem et error officiis?</p>
        </div>

        <div class="login">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
                <g transform="">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <path d="M0,86c0,-47.49649 38.50351,-86 86,-86c47.49649,0 86,38.50351 86,86c0,47.49649 -38.50351,86 -86,86c-47.49649,0 -86,-38.50351 -86,-86zM86,168.56c45.59663,0 82.56,-36.96337 82.56,-82.56c0,-45.59663 -36.96337,-82.56 -82.56,-82.56c-45.59663,0 -82.56,36.96337 -82.56,82.56c0,45.59663 36.96337,82.56 82.56,82.56z" fill="#000000"></path>
                        <g fill="#000000">
                            <path d="M85.99888,30.38667c-15.20021,0 -27.52,12.31979 -27.52,27.52v4.58667c0,15.20021 12.31979,27.52 27.52,27.52c15.20021,0 27.52,-12.31979 27.52,-27.52v-4.58667c0,-15.20021 -12.31979,-27.52 -27.52,-27.52zM85.98992,103.77333c-18.37419,0 -41.94965,9.93859 -48.73333,18.75875c-4.19221,5.45355 -0.20146,13.34792 6.67396,13.34792h84.12771c6.87541,0 10.86617,-7.89437 6.67396,-13.34792c-6.78368,-8.81557 -30.3681,-18.75875 -48.74229,-18.75875z">
                            </path>
                        </g>
                        <path d="" fill="none"></path>
                        <path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path>
                        <path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path>
                    </g>
                </g>
            </svg>

            <div id="nom" class="div_login">
                <label for="name">Name :</label>
                <input type="text" placeholder="Name" id="name">
            </div>

            <div id="prenom" class="div_login">
                <label for="first_name">First name :</label>
                <input type="text" placeholder="First name" id="first_name">
            </div>

            <div id="mail" class="div_login">
                <label for="e_mail">E-mail :</label>
                <input type="text" placeholder="E-mail" id="e_mail">
            </div>

            <div id="div_mdp" class="div_login">
                <label for="mdp">Password : </label>
                <input type="password" placeholder="Password" id="mdp">
            </div>

            <div id="div_confirm_mdp" class="div_login">
                <label for="confirm_mdp">Confirm your password :</label>
                <input type="password" placeholder="Confirm your password" id="confirm_mdp">
            </div>

        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>