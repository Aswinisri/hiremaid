<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        
         <title>Hire Maid </title>
        
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="admin/images/image 9.png" style="margin-top: 20px;margin-left:20px;">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>
<style>
    .mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
    max-width: 1186px;
    position: relative;
    margin: auto;
    margin-top: 9px;
    margin-left: 178px;

}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 7px;
  width: 6px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
} 


div.gallery {
  border: 1px solid #ccc;
  height: 271px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
    width: 70%;
    height: auto;
    margin-left: 27px;
    margin-top: 39px;
}

div.desc {
  padding: 15px;
  text-align: center;
  margin-top: -22px;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 12px 6px;
  float: left;
  width: 18.99999%;
  margin-left: 10px;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
    </style>
   <body>
   <?php include_once('includes/header.php');?>
    <main>

        <!-- slider Area Start-->
        <div class="slideshow-container" style="max-width:1233px;
    position: relative;
    margin: auto;
    margin-top: 9px;
    margin-left: 145px;">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <img src="admin/images/slide6.jpg" style="width: 121%;
  height:590px;
  margin-left: -144px;">
  <!-- <div class="text">HIREMAID</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  
  <img src="admin/images/slide4.jpg" style="width: 116%;
  height:590px;
  margin-left: -144px;">
  <!-- <div class="text">HIREMAID</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  
  <img src="admin/images/slider7.jpg" style="width: 118%;
  height:590px;
  margin-left: -144px;">
  <!-- <div class="text">HIREMAID</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<h1 style="font-size: 2rem;
    color: mediumvioletred;
    margin-left: 554px;
    margin-top: 7px;">CATEGORIES</h1>
<br><br>
<div class="responsive">
  <div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads/cooking.jpg" alt="Cinque Terre" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc" style="margin-top:-36px;">Cooking</div>
  </div>
</div>

<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads/Gardening1.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Gardening</div>
  </div>
</div>


<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads/laundry.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Laundry</div>
  </div>
</div>


<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a  href="service.php">
      <img src="uploads/painting.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Painting</div>
  </div>
</div>

<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads/housekeeping.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">House Keeping</div>
  </div>
</div>
<!-- next  -->



<div class="responsive">
  <div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads\carpenter1.jpg" alt="Cinque Terre" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc" style="margin-top:-36px;">Carpenter</div>
  </div>
</div>

<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads\electrician.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Electrician</div>
  </div>
</div>


<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads\plumbing.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Plumbing</div>
  </div>
</div>


<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a  href="service.php">
      <img src="uploads\pestcontrol.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Pest Control</div>
  </div>
</div>

<div class="responsive">
<div class="gallery" style="height: 193px;">
    <a href="service.php">
      <img src="uploads\networking.jpg" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Networking Operator</div>
  </div>
</div>




<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
        <!-- <div class="slider-area "> -->
            <!-- Mobile Menu -->
            <!-- <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="admin/images/slide4.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption"> -->
                                    <!-- <h1>Looking To Hire A Maid? </h1>
                                     <p class="contact-title" style="text-left: center;color: red;font-size: 30px;
    line-height: 1.2;
    font-weight: 400;
    margin-bottom: -34px;
    font-family: Muli, sans-serif;
    margin-top: 590px;"><a href="maid-hiring.php" style="color: black;">Post Requirement Here ></a></p>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div> -->
        <!-- slider Area End-->
    </main>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br><br><br>
    <?php include_once('includes/footer.php');?>

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
       
    </body>
   
