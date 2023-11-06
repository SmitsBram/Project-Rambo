<?php
$tags = [
  '    <link rel="stylesheet" href="../../public/css/geschiedenis.css">',
];
$data = [
  'tags' => $tags,
];


$this->part('header', $data);

?>
<div class="geschiedenis">
  <div class="wrapper">
    <div class="banner">
      <img src="../public/IMG/geschiedenis.png">
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="container">
    <h1>GESCHIEDENIS</h1>
  </div>
</div>
<div class="wrapper1">
  <div class="container1">
    <p>Restaurant Rocambolesque is ontstaan uit de samenwerking van twee bevriende ondernemers, Usem Alaoui en Finn Pinneau.
      Usem had al een lange carrière in de horeca achter de rug, voornamelijk als kok, terwijl Finn recentelijk zijn opleiding in restaurantmanagement had afgerond.
      <br><br>
      Finn, geïnspireerd door zijn passie voor de restaurantindustrie en de wens om iets nieuws te creëren, besloot om samen met Usem de sprong te wagen en een eigen restaurant te openen.
      Ze deelden een visie voor een eetgelegenheid die niet alleen hoogwaardige gerechten serveerde, maar ook een eigentijdse en levendige sfeer bood aan de gasten.
      <br><br>
      De naam "Rocambolesque," wat "fantastisch" betekent in het Frans, werd gekozen om een positieve en opwindende indruk te wekken.
      Bovendien had Finn een persoonlijke connectie met deze naam, aangezien zijn overgrootouders een restaurant met dezelfde naam in het noorden van Frankrijk hadden gehad.
    </p>
  </div>
</div>
</div>

<!-- Slider -->
<div class="slideshow-container">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img class="slide-image" src="https://toohotel.com/wp-content/uploads/2022/09/TOO_restaurant_Panoramique_vue_Paris_nuit_v2-scaled.jpg">
  </div>

  <div class="mySlides fade">
    <img class="slide-image" src="https://scdn.aro.ie/Sites/50/imperialhotels2022/uploads/images/PanelImages/General/156757283_Bedford_Hotel__F_B__Botanica_Restaurant_and_Bar__General_View._4500x3000.jpg">
  </div>

  <div class="mySlides fade">
    <img class="slide-image" src="https://www.restaurantzuiver.nl/wp-content/uploads/2020/02/Restaurant-Zuiver-Amersfoort-16.jpg">
  </div>
</div>


<!-- Next and previous buttons -->
<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
<br>

<div class="image">
  <div class="image-container">
    <img class="demo cursor" src="https://toohotel.com/wp-content/uploads/2022/09/TOO_restaurant_Panoramique_vue_Paris_nuit_v2-scaled.jpg" alt="The Woods">
    <div class="text1">
      <p>Hoewel ze erfgenamen waren van deze naam, besloten Usem en Finn om een geheel eigen stijl te hanteren.
        Ze richtten zich op het aanbieden van een eigentijds menu met seizoensgerechten van over de hele wereld.
        Om consistentie en kwaliteit te waarborgen, introduceerden ze vaste arrangementen en menu's die per seizoen zouden veranderen.
        Daarnaast zouden ze speciale arrangementen creëren om te vieren tijdens bepaalde feestdagen.
        <br><br>
        Met deze visie en toewijding begonnen Usem en Finn aan hun culinaire avontuur met Restaurant Rocambolesque,
        waar ze streven naar het bieden van een fantastische eetervaring voor hun gasten.
      </p>
    </div>
  </div>
</div>
</div>

<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    //let dots = document.getElementsByClassName("dot");
    //if (n > slides.length) {slideIndex = 1}
    //if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    // for (i = 0; i < dots.length; i++) {
    //   dots[i].className = dots[i].className.replace(" active", "");
    // }
    // slides[slideIndex-1].style.display = "block";
    // dots[slideIndex-1].className += " active";
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
  }

  document.body.addEventListener("scroll", function() {
    let Navbar = document.getElementById('navbar');
    if (document.body.scrollTop > 0) {
      Navbar.classList.add("navbar-scroll");
    } else {
      Navbar.classList.remove("navbar-scroll");
    }
  });
</script>