<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $user_id = $_SESSION["id"];
    $catid=$_POST['catid'];
 $name=$_POST['name'];
 $contno=$_POST['contno'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $wsf=$_POST['wsf'];
 $wst=$_POST['wst'];
 $startdate=$_POST['startdate'];
 $notes=$_POST['notes'];
 $amount= $_POST['amount'];
 $service = $_POST['service'];
 $bookingid=mt_rand(100000000, 999999999);
$sql="insert into tblmaidbooking(BookingID,CatID,Name,ContactNumber,Email,Address,Gender,WorkingShiftFrom,WorkingShiftTo,StartDate,Notes,Amount,service,user_id)values(:bookingid,:catid,:name,:contno,:email,:address,:gender,:wsf,:wst,:startdate,:notes,:amount,:service,:user_id)";
$query=$dbh->prepare($sql);
$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);
$query->bindParam(':catid',$catid,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':contno',$contno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':wsf',$wsf,PDO::PARAM_STR);
$query->bindParam(':wst',$wst,PDO::PARAM_STR);
$query->bindParam(':startdate',$startdate,PDO::PARAM_STR);
$query->bindParam(':notes',$notes,PDO::PARAM_STR);
$query->bindParam(':amount',$amount,PDO::PARAM_STR);
$query->bindParam(':service',$service,PDO::PARAM_STR);
$query->bindParam(':user_id',$user_id,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='maid-hiring.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   
     <title>Maid Hiring Management System || Hiring Form</title>
    

   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/price_rangs.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
</head>
 
<body>
      <script src="https://js.stripe.com/v3/"></script>
    <?php include_once('includes/header.php');?>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <img src="admin/images/Banner.png" style="width: 1340px;
    height: 530px;margin-top: -7px">
        <div class="container">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Hiring Form</h2>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
        <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title" style="text-align: center;color:mediumvioletred; margin-top: -165px;font-size: 41px;
    font-weight: 900;
    margin-bottom: 20px;">Looking To Hire A Maid?</h2>
                        
                    </div>
                    <div class="col-lg-8" style="margin-top: -73px;">

                        <form class="form-contact contact_form" action="" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color: black;font-weight: bold;font-size: 20px;">Name:</label>
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;">Contact Number:</label>
                                        <input type="text"placeholder="Enter your number" name="contno" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;">Address(to be hired):</label>
                                        <textarea class="form-control" name="address" id="address" placeholder="Enter Your Addresss"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px; padding-left: 20px;">Gender:</label>
                                       <select name="gender" class="form-control" required='true'>
                                 <option value="">Select Gender</option>
                                 <option value="Female">Female</option>
                                 <option value="Male">Male</option>
                             </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;">Email:</label>
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;padding-left: 20px;">Select Service:</label>
                                        <select name="catid" class="form-control" required='true' onchange="updateFields()">
  <option value="">Select Service</option>
  <?php 
    $sql2 = "SELECT * from tblcategory ";
    $query2 = $dbh->prepare($sql2);
    $query2->execute();
    $result2 = $query2->fetchAll(PDO::FETCH_OBJ);

    foreach($result2 as $row2) {          
  ?>  
    <option value="<?php echo htmlentities($row2->ID);?>" data-amount="<?php echo htmlentities($row2->Amount);?>">
      <?php echo htmlentities($row2->CategoryName);?></option>
  <?php } ?>
</select>

</div>
</div>
<input type="hidden" id="serviceDisplay"  name="service" readonly>
<div class="col-sm-12">
    <div class="form-group">
            <label style="color:black;font-weight: bold;font-size: 20px;">Amount:</label>
            <input class="form-control" name="amount" id="amountDisplay" type="yext" placeholder="Amount">
    </div>
</div>


<script>
  function updateFields() {
    var select = document.querySelector('select[name="catid"]');
    var amountDisplay = document.getElementById('amountDisplay');
    var serviceDisplay = document.getElementById('serviceDisplay');
    var selectedOption = select.options[select.selectedIndex];

    // Get the data-amount and text content from the selected option
    var amount = selectedOption.getAttribute('data-amount');
    var service = selectedOption.textContent;

    // Update the value of the input fields
    amountDisplay.value = amount;
    serviceDisplay.value = service;
  }
</script>
                                   
                              
        
                                <div class="col-sm-12" style="padding-top: 20px;">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;">Work Shift From:</label>
                                        <input class="form-control" name="wsf" id="wsf" type="time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;">Work Shift To:</label>
                                        <input class="form-control" name="wst" id="wst" type="time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;">Book Date:</label>
                                        <input class="form-control" name="startdate" id="startdate" type="date">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label style="color:black;font-weight: bold;font-size: 20px;">Notes:</label>
                                        <textarea class="form-control" name="notes" id="notes" type="text" placeholder="Enter Some Notes"></textarea>
                                    </div>
                                </div>
                            </div>

     

  
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn" name="submit">Send</button>
                            </div>
                        </form>
                    </div>
                 
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
  <?php include_once('includes/footer.php');?>
<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script>
		function calculateAmount() {
    const serviceType = document.getElementById("serviceType").value;
    const numOfHours = parseInt(document.getElementById("numOfHours").value, 10);

    let rate;
    switch (serviceType) {
        case "deep":
            rate = 100;
            break;
        case "regular":
            rate = 150;
            break;
        case "laundry":
            rate = 200;
            break;
        default:
            rate = 0;
    }

    const amount = rate * numOfHours;
    document.getElementById("amount").value = `$${amount.toFixed(2)}`;
}

function submitForm() {
    // Get form values
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const checkIn = document.getElementById("checkIn").value;
    const checkOut = document.getElementById("checkOut").value;
    const serviceType = document.getElementById("serviceType").value;
    const numOfHours = parseInt(document.getElementById("numOfHours").value, 10);
    const amount = parseFloat(document.getElementById("amount").value.replace('$', ''));

    // Display confirmation message
    const confirmationMessage = `Thank you, ${name}! Your booking for a ${serviceType} room from ${checkIn} to ${checkOut} for ${numOfHours} nights has been confirmed. The total amount is $${amount.toFixed(2)}. An email has been sent to ${email} with the details.`;

    document.getElementById("confirmationMessage").innerText = confirmationMessage;
    document.getElementById("bookingForm").reset();
    document.getElementById("bookingForm").classList.add("hidden");
    document.getElementById("confirmation").classList.remove("hidden");
}
	</script>
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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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
    
    </html>