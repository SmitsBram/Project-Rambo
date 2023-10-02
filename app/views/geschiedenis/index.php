<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/geschiedenis.css">
</head>
    <body id="geschiedenis">
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
          <p>De geschiedenis van de familie van der Valk begint in 1862
          met de herberg De Gouden Leeuw in Voorschoten.
          De Gouden Leeuw is onderdeel van de Rocambolesque.
          Deze herberg is in 1862 gekocht door Martien van der Valk.
          De Gouden Leeuw werd in 1863 geopend.
          De herberg was een succes en Martien van der Valk besloot
          om een nieuwe herberg te openen in 1872.
          Deze herberg werd geopend in Valkenburg aan de Geul.
          In 1892 werd de herberg in Valkenburg aan de Geul verkocht
          en in 1894 werd de herberg in
          <br><br>
          Voorschoten verkocht. In 1910 werd er een nieuw hotel
          gebouwd.

          In 1919 werd het eerste hotel buiten Zuid-Holland geopend.
          Dit hotel werd geopend in Nijmegen. In 1929 werd het eerste
          hotel buiten Zuid-Holland geopend.
          Dit hotel werd geopend in Nijmegen. In 1929 werd het eerste
          hotel buiten Zuid-Holland geopend.
          Dit hotel werd geopend in Nijmegen.
          In 1939 werd het eerste hotel buiten Zuid-Holland geopend.
          Dit hotel werd geopend in Nijmegen.
          In 1949 werd het eerste hotel buiten Zuid-Holland geopend.
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident excepturi odit dolore cum illum quaerat, ipsum qui harum eos eum voluptatem assumenda unde aperiam debitis magni, corporis accusamus? Repudiandae, est?
               Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

               The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham
            </p>
          </div>
        </div>
      </div>


      <footer>
        <div class="footer-section">
          <h2>Rocambolesque</h2>
          <p>Austaliënlaan 12345 EC </p>
          <p>Amsterdam, Nederland</p>
         
        </div>
        <div class="footer-section">
          <h2>Contact</h2>
          <p>Phone: +31 06 123456789</p>
          <p>Neem contact op --></p>
        </div>
        <div class="footer-section">
          <h2>Openingstijden</h2>
          <p>Monday-Donderdag: 12:00 - 22:00</p>
          <p>Friday-Saturday:  12:00 - 01:00</p>
          <p>Sunday: Closed</p>
        </div>
       
      </footer>

    </body>
</html>

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
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

document.body.addEventListener("scroll", function(){
  let Navbar = document.getElementById('navbar');
  if(document.body.scrollTop > 0){
    Navbar.classList.add("navbar-scroll");
  }else{
    Navbar.classList.remove("navbar-scroll");
  }
});
</script>


