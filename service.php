<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HireMaid || About Us </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
       

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
             <!-- Swiper CSS -->
        <link rel="stylesheet" href="Responsive Card Slider/css/swiper-bundle.min.css">

<!-- CSS -->
<link rel="stylesheet" href="Responsive Card Slider/css/style.css">
<style>
    .container {
    text-align: center;
   
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin: 10px 0 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

#result {
    margin-top: 20px;
}

    </style>
   </head>

   <body>
    <?php include_once('includes/header.php');?>
    <main>
    <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\plumbing.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Plumbing</h2>
                            <!-- <a href="servicefetch.php?CatID=plumbing"> -->
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=plumbing" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\cooking.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                        <h2 class="name">Cooking</h2>
                    <!-- <a href="servicefetch.php?CatID=cooking"> -->
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <div class="container">

        <label for="date">Date:</label>
        <input type="date" id="date">

        <label for="time">Time:</label>
        <input type="time" id="time">

        <button onclick="checkAvailability()">Check Availability</button>

        <div id="result"></div>
    </div>

    <script>
    function checkAvailability() {
    
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const resultContainer = document.getElementById('result');

    // You can implement your logic to check availability here
    // For demonstration purposes, let's assume the maid is available if the time is after 9 AM and before 5 PM.
    const available = isAvailableTime(time);

    resultContainer.innerHTML = `${available ? 'available' : 'not available'} on ${date} at ${time}.`;
}

function isAvailableTime(time) {
    const startTime = '09:00';
    const endTime = '17:00';
    return time >= startTime && time <= endTime;
}

    </script>


                            <button class="button"><a href="servicefetch.php?CatID=cooking" style="color:white">View Maid Details</a></button>
                            
                        </div>
                        
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\carpenter1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Carpenter</h2>
                            <a href="servicefetch.php?CatID=carpenter">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=carpenter" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\networking.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Networking Operator</h2>
                            <a href="servicefetch.php?CatID=Networking operator">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=Networking operator" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\Gardening1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Gardening</h2>
                            <a href="servicefetch.php?CatID=gardening">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=gardening" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\electrician.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Electrician</h2>
                            <a href="servicefetch.php?CatID=electrician">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=electrician" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\housekeeping.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">House Keeping</h2>
                            <a href="servicefetch.php?CatID=house keeping">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=house keeping" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\laundry.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Laundry</h2>
                            <a href="servicefetch.php?CatID=laundry">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=laundry" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\pestcontrol.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pest Control</h2>
                            <a href="servicefetch.php?CatID=pestcontrol">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=pestcontrol" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                        <span class="overlay" style="background-color: #165069;"></span>

                            <div class="card-image">
                                <img src="uploads\painting.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Painting</h2>
                            <a href="servicefetch.php?CatID=painting">
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button"><a href="servicefetch.php?CatID=painting" style="color:white">View Maid Details</a></button>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- Support Company End-->

    </main>
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
        
         <!-- Swiper JS -->
    <script src="Responsive Card Slider/js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="Responsive Card Slider/js/script.js"></script>
    </body>
</html>