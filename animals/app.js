const nav_slide = ()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.onglets');
    const nav_links = document.querySelectorAll('.onglets li');

    burger.addEventListener('click', ()=>{
        nav.classList.toggle('nav_active');
        nav_links.forEach((links, index)=>{
            if(links.style.animation){
                links.style.animation = '';
            }else{
                links.style.animation = `nav_fade 0.5s ease forwards ${index / 7+0.5}s`;
    
            }
        });

        burger.classList.toggle('toggle');

    });

    
}

nav_slide();


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}