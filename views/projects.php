<section class="projects" id="projects">
  <h2 class=" subtitle t-center uppercase">Mes projets</h2>
  <div class="mt-5">
    <div class="container">
      <div class="projects__image">
        <img src="./sources/ressources/projects/image1.png" alt="">
      </div>
      <div class="projects__text text">
        <h3>Fitness App</h3>
        <p>Ce site avait pour but d'utiliser une <span class="emphasis">API</span> depuis RapidAPI. C'est une API qui contient plus de 1300 exercices de sport, accompagnés de GIFs.</p>
        <p>J'ai suivi un tutoriel de JavasciptMastery, et cela m'a permis d'apprendre des techniques, et d'utiliser la libraire <span class="emphasis">Material UI</span>.</p>
        <p>Même si j'ai suivi un tutoriel, je l'ai grandement amélioré, notamment par l'utilisation de <span class="emphasis">Redux Toolkit</span>. Cela me permet d'effectuer moins de requêtes à l'API, et ainsi d'optimiser la vitesse du site.</p>
        <p> Voir le site : <a href="https://redsharks-gym.netlify.app/" target="_blank">Fitness App</a></p>
        <?= githubLink("Fitness App", "https://github.com/Redshark61/gym-app") ?>
      </div>
    </div>
    <div class="container">
      <div class="projects__text text">
        <h3>Social Media</h3>
        <p>Ce site est aussi tiré d'un tutoriel de JavasciptMastery, mais est cette fois-ci axé sur les technologies <span class="emphasis">MERN</span>. J'ai donc pu utiliser <span class="emphasis">MongoDB</span> comme base données, ainsi que <span class="emphasis">Node</span> comme serveur.</p>
        <p>Il est impossible de se connecter avec Google, car la connexion utilise une ancienne version.</p>
        <?= githubLink("Social Media", "https://github.com/Redshark61/mern") ?>
      </div>
      <div class="projects__image">
        <img src="./sources/ressources/projects/image2.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="projects__image">
        <img src="./sources/ressources/projects/image3.png" alt="">
      </div>
      <div class="projects__text text">
        <h3>Mon carnet de santé</h3>
        <p>C'est un site internet qui permet de relier les patients et les médecins. Le but était de pouvoir facilement avoir accès à toutes les informations nécessaires concernant sa santé (historique, ordonnaces, messagerie...). Le patient pouvait chatter directement avec son médecin.</p>
        <p>Ce site a été fait avec <span class="emphasis">Django</span>. Il utilise aussi une base de donnés <span class="emphasis">PostgreSQL</span>, et a été hébergé sur <span class="emphasis">Heroku</span>. Il ne l'est plus, car même si le site est fictif, des personnes mal intentionné aurait pu l'utiliser à des fins malveillantes.</p>
        <p>Vous pouvez toujours l'utiliser chez vous en suivant les instructions sur le repo GitHub ci-dessous :</p>
        <?= githubLink("Mon carnet de santé", "https://github.com/Redshark61/mon-carnet-de-sante") ?>
      </div>
    </div>
  </div>
</section>