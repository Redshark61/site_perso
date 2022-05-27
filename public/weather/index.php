<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/site_perso/public/weather/style.css">
        <title>Météo</title>
    </head>

    <body>

        <div class="location">
            <h1 class="location-time">Time / place</h1>
            <canvas class="icon" width="128" height="128"></canvas>
        </div>
        <div class="temperature">
            <div class="degree-section">
                <h2 class="temperature-degree">34</h2>
                <span id="temperature-span">°C</span>
            </div>
            <div class="temperature-description">** It's bitterly cold **</div>
        </div>

        <script src="/site_perso/public/weather/skycons.js"></script>
        <script src="/site_perso/public/weather/app.js"></script>
    </body>

</html>