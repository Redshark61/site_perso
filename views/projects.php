<section class="projects">
  <h2 class="subtitle t-center uppercase">Mes projets</h2>
  <div class="grid grid--2-2 mt-5">
    <div class="projects__image">
      <img src="./sources/ressources/projects/image1.png" alt="">
    </div>
    <div class="projects__text text">
      <h3>L'île aux Pythons</h3>
      <p>C'est le tout premier "vrai" projet <span class="emphasis">Python</span> que j'ai fait. Il fallait faire un jeu en <span class="emphasis">console</span>, sans aucun modules, et surtout SANS POO (programmation orientée objets). Ce fut ardu, mais l'objectif a été atteint. </p>
      <p>Le but du jeu était de résoudre trois énigmes pour pouvoir s'échapper d'une île.</p>
      <p>J'ai d'ailleurs fait <span class="emphasis">un site</span> pour le présenter : <a href="https://redshark61.github.io/ile_au_python_site.github.io/index.html" target="_blank"> L'île aux Pythons</a></p>
      <?= githubLink("L'île aux Pythons", "https://github.com/Redshark61/Python-Island") ?>
    </div>
    <div class="projects__text text">
      <h3>Night Monster Fever</h3>
      <p>Le but de se projet était de faire un jeu 2D en <span class="emphasis">Python</span> qui utilise une base de données. La base en question était une base <span class="emphasis">PostgreSQL</span>.</p>
      <p>Le but du jeu est de finir 5 Donjons remplis de monstres. La particularité du jeu est le cycle jour nuit, où durant la nuit les monstres sont plus forts, mais rapportent plus d'expérience.</p>
      <?= githubLink("Night Monster Fever", "https://github.com/Redshark61/night-monster-fever") ?>
    </div>
    <div class="projects__image">
      <img src="./sources/ressources/projects/image2.png" alt="">
    </div>
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
</section>