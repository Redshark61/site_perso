<!DOCTYPE html>
<html>

<head>
  <title>Nav</title>
  <link href="style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
</head>

<body>

  <?php require 'nav.php' ?>

  <section>

    <!-- Slideshow container -->
    <div class="container_slideshow">
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="renne.jpg" style="width:100%;">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <a href="tigre_page.html"><img src="tigre.jpg" style="width:100%"></a>
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="flamand.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>



        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

    </div>
  </section>


  <!---->
  <footer>
    <h2>Contact :</h2>
    <img id="mail" , class="img_contact" src="https://img.icons8.com/ios/50/000000/important-mail.png">
    <img id="facebook" class="img_contact" src="https://img.icons8.com/android/24/000000/facebook.png">
    <img id="insta" class="img_contact" src="https://img.icons8.com/metro/26/000000/instagram-new.png">
    <img id="twitter" class="img_contact" src="https://img.icons8.com/carbon-copy/100/000000/twitter.png">

    <p id="thanks">Thank you to <a href="https://icons8.com/icon/71208/reddit">Reddit icon by Icons8</a></p>
  </footer>

  <script src="app.js"></script>
</body>

</html>