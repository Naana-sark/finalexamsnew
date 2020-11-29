<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystery Law</title>
    <link rel="stylesheet" href = "contactstyle.css" type = "text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<style>
  body{
    position: absolute;
    top:0;
    right: 0;
    left: 0;
    bottom: 0;
}
</style>
<body >

 <!-- Navbar begins -->
 <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Law Worker 
      <i class="fa fa-caret-down" aria-hidden="true" ></i>
    </button>
    <div class="dropdown-content">
      <a href="../registration/register.php">Signup</a>
      <a href="../registration/login.php">Log In</a>
      
    </div>
  </div>
  <div class ="topnavright">
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  </div>
  <div class="topnavcenter">
    <strong>Mystery Law</strong>

  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 



 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 7</div>
    <img src="../Images/aditya-joshi-FOhw4A1CR1Q-unsplash.jpg" alt="Mystery Law" style="width:100% ;">
    <div class="text1">Mystery Law </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 7</div>
    <img src="../Images/melinda-gimpel-wkfZyteTMOA-unsplash.jpg" alt="Mystery Law" style="width:100%;">
    <div class="text1">Mystery Law </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 7</div>
    <img src="../Images/bill-oxford-OXGhu60NwxU-unsplash.jpg" alt="mystery Law" style="width:100%;">
    <div class="text1">Mystery Law </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 7</div>
    <img src="../Images/melinda-gimpel-zlbB-anyO3I-unsplash.jpg" alt="mystery Law" style="width:100%;">
    <div class="text1">Mystery Law </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 7</div>
    <img src="../Images/saul-bucio-P5YN73KrUAA-unsplash.jpg" alt="mystery Law" style="width:100%;">
    <div class="text1">Mystery Law </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 7</div>
    <img src="../Images/tingey-injury-law-firm-L4YGuSg0fxs-unsplash.jpg" alt="mystery Law" style="width:100%; height: inherit">
    <div class="text1">Mystery Law </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">7 / 7</div>
    <img src="../Images/david-veksler-HpmDAS1Dozs-unsplash.jpg" alt="Mystery Law" style="width:100%;">
    <div class="text1">Mystery Law </div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>




  <div class="container1" style="height: 100%; width:100%">
  <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    </div> 

   
      <h2 class= "beginning"><strong>Welcome to Mystery Law!</strong> </h2>
      <br>
      <br>
      <blockquote >
        <p style="text-align: center; color:white">Laws are like cobwebs which may catch small flies,
         but let wasps and hornets break through</p>
               <footer style="text-align: center; color:white">Jonathan Swift</footer>
      </blockquote>
      <br>
      <br>
    <p style="text-align: center; color:white">
      Welcome lovely brilliant and skillful lawyers and judges to Mystery Law. <br><br>
      Here you can find the details of fellow judges and lawyers working on different cases.
      <br><br>
      Hope you enjoy your stay on this website. <br><br>
    </p>
  </div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
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

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 40000); // Change image every 40 seconds
} 

</script>

</body>

</html>