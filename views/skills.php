<section class="skills">
  <h2 class="subtitle t-center uppercase">Mes compétences</h2>
  <div class="skills__container">
    <?php
    $skills = [
      [
        $title = "Django",
        $img = "django.svg",
      ],
      [
        $title = "JavaScript",
        $img = "js.svg",
      ],
      [
        $title = "PostgreSQL",
        $img = "postgres.svg",
      ],
      [
        $title = "Sass",
        $img = "sass.svg",
      ],
      [
        $title = "PHP",
        $img = "php.svg",
      ],
      [
        $title = "Python",
        $img = "python.svg",
      ],
      [
        $title = "React.js",
        $img = "react.svg",
      ],
    ];

    foreach ($skills as $key => $value) {
      echo card($value[0], $value[1]);
    }
    ?>

  </div>
</section>