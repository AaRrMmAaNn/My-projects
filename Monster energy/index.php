<?php include 'header.php'; ?> 


<h1 style="color: #00fc21">Monster news</h1>
<hr style="color: #00fc21">


<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="slike/monster5.jpg" style="width:100%">

  

</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="slike/monster6.jpg" style="width:100%">

  
</div>


<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="slike/monster7.jpg" style="width:100%">
  
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="slike/monster4.jpg" style="width:100%">
  

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


</div>

<div style="text-align:center">

  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 

</div>

<script>


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

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

</script>


 <h4><p style="color: #00fc21">Monster Energy</p></h4> <p style="color: white"> is an energy drink introduced by Hansen Natural Company (now Monster Beverage Corporation (MNST)) in April 2002.The company is also known for supporting many extreme sports events such as Bellator MMA, Ultimate Fighting Championship, Moto GP, BMX, Motocross, Speedway, skateboarding and snowboarding, as well as electronic sports. In collaboration with Outbreak Presents, Monster Energy promotes a number of music bands around the world, like Fetty Wap, Iggy Azalea, 21 Savage, Asking Alexandria, The Word Alive, Maximum the Hormone and Five Finger Death Punch. Monster currently sponsors the Monster Energy NASCAR Cup Series and the 25th PBR: Unleash the Beast Professional Bull Riders tour.</p>



<h4><p style="color: #00fc21"> Logo</p></h4><p style="color: white">
The Monster Energy Drink logo is widely recognized among major beverages and at sponsored events. The design was created by McLean Design, a California-based strategic branding firm. The logo is composed of a vibrant large green ″M″ on a field of black. The ″M″ is stylized in such a way as to imply that it is formed by the claws of a monster ripping through the can, like a beast.</p>



<h4><p style="color: #00fc21">Ingredients</p></h4><p style="color: white">The caffeine content of most Monster Energy drinks is approximately 10 mg/oz (33.81 mg/100ml),[13][14] or 160 mg for a 16 oz can. The packaging usually contains a warning label advising consumers against drinking more than 48 oz per day (16 oz per day in Australia). The drinks are not recommended for pregnant women or people sensitive to caffeine.


The ingredients include carbonated water, sucrose, glucose, citric acid, natural flavors, taurine, sodium citrate, color added, panax ginseng root extract, L-carnitine, caffeine, sorbic acid, benzoic acid, niacinamide, sodium chloride, Glycine max glucuronolactone, inositol, guarana seed extract, pyridoxine hydrochloride, sucralose, riboflavin, maltodextrin, and cyanocobalamin.</p>

<hr>



<?php include 'footer.php'; ?> 