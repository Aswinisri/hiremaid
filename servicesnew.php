<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="rename_style.css">
    <style>

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;

        }
        nav .logo a{
  font-weight: 500;
  font-size: 35px;
  color: white;
}
        .category-list {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        .category-item1 {
            background-color: #fff;
            padding: 0px;
            border-radius: 5px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .category-item2 {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .category-icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .category-title {
            font-size: 18px;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color:black;
        }
        .nav-links li a{
  text-decoration: none;
  color: white;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 4px;
  transition: all 0.3s ease;
}
        nav{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 11px;
  transition: all 0.4s ease;
  color:white;
  background-color:#67bfff;
}
p {
    margin-top: 0;
    margin-bottom: 0rem;
}
.logo{
    font-size:31px;
}
    </style>
</head>
<body>
<nav>
    <div class="nav-content">
      <div class="logo">
        Wheels Glow
      </div>
      <ul class="nav-links">
        <li><a href="homepage.php">Home</a></li>
        <!-- <li><a href="history.php">History</a></li> -->
        <!--<li><a href="#">Financial Record</a></li>-->
        <li><a href="profilepage.php">Profile</a></li>
       <li><a href="userorder.php">User Booking </a></li>
       <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
  </nav>
  <section class="home">
    <div class="container">
        <div style="text-align:center;">
            <h1 style="color: #67BFFF;" class="mt-5">Services Offering</h1><br>
            <p style="color:#F4A329;">Dive into the portfolio of exceptional services we extend to our discerning clients.</p>
        </div>
        <br><br>
        
        <ul class="category-list">
            <li class="category-item1 d-flex flex-row">
                <span class="category-icon"><img src="uploads\cooking.jpg" alt=""></span>
                <div class="ml-5 mt-5">
                    <h2 class="category-title">Cooking</h2>
                    <a href="servicefetch.php?CatID=cooking">
                        <p>Our high-pressure car wash ensures a thorough cleaning, removing dirt and grime from every nook and cranny of your vehicle.</p>
                    </div>
                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">
                <li class="category-item2 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt="" ></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Gardening</h2>
                        <p>Our underbody cleaning service employs powerful techniques, ensuring a meticulous cleanse, eliminating dirt and debris from the often overlooked areas beneath your vehicle.</p>
                    </div>
                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">
                <li class="category-item1 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt=""></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Laundry</h2>
                        <p>Our eco-friendly waterless cleaning method delivers a pristine shine, without a drop of water, leaving your vehicle spotless and environmentally responsible.</p>
                    </div>

                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">    
                <li class="category-item2 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt="" style="height:150px;border-radius:15px;"></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Painting</h2>
                        <p>Our car deep cleaning service goes beyond the surface, meticulously purging contaminants to restore your vehicle's interior to its pristine best.</p>
                    </div>
                </li>
            </a>  
            <a href="servicefetch.php?CatID=cooking">  
                <li class="category-item1 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt=""></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">House Keeping</h2>
                        <p>Our wash and coat service provides a dual benefit, cleansing your vehicle while applying a protective layer, leaving it sparkling and shielded.</p>
                    </div>
                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">
                <li class="category-item2 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt="" style="height:150px;border-radius:15px;"></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Gardening</h2>
                        <p>Our underbody cleaning service employs powerful techniques, ensuring a meticulous cleanse, eliminating dirt and debris from the often overlooked areas beneath your vehicle.</p>
                    </div>
                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">
                <li class="category-item2 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt="" style="height:150px;border-radius:15px;"></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Gardening</h2>
                        <p>Our underbody cleaning service employs powerful techniques, ensuring a meticulous cleanse, eliminating dirt and debris from the often overlooked areas beneath your vehicle.</p>
                    </div>
                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">
                <li class="category-item2 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt="" style="height:150px;border-radius:15px;"></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Gardening</h2>
                        <p>Our underbody cleaning service employs powerful techniques, ensuring a meticulous cleanse, eliminating dirt and debris from the often overlooked areas beneath your vehicle.</p>
                    </div>
                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">
                <li class="category-item2 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt="" style="height:150px;border-radius:15px;"></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Gardening</h2>
                        <p>Our underbody cleaning service employs powerful techniques, ensuring a meticulous cleanse, eliminating dirt and debris from the often overlooked areas beneath your vehicle.</p>
                    </div>
                </li>
            </a>
            <a href="servicefetch.php?CatID=cooking">
                <li class="category-item2 d-flex flex-row">
                    <span class="category-icon"><img src="uploads\cooking.jpg" alt="" style="height:150px;border-radius:15px;"></span>
                    <div class="ml-5 mt-5">
                        <h2 class="category-title">Gardening</h2>
                        <p>Our underbody cleaning service employs powerful techniques, ensuring a meticulous cleanse, eliminating dirt and debris from the often overlooked areas beneath your vehicle.</p>
                    </div>
                </li>
            </a>
        </ul>
    </div>
    </section>
    <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>
</body>
</html>