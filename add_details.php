<?php require_once("admin/includes/dbconnection.php"); ?><?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="log/css/all.css">
    <link rel="stylesheet" href="log/css/bootstrap.css">
    <link rel="stylesheet" href="log/css/style.css">
    <link rel="stylesheet" href="log/css/media.css">
    
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap');

:root {
   --main-color: #E0E8ED;
   --sub-color:#c1c1c1;
   --white: #0d1014;
   --border: .1rem solid rgb(30 29 28 / 30%);
}

*{
   font-family: 'Montserrat', sans-serif;
   margin: 0;padding: 10px 66px;;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::selection{
   background-color: var(--sub-color);
   color: var(--main-color);
}

*::-webkit-scrollbar{
   height: .5rem;
   width: 1rem;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: #c1c1c1;
   border-radius: 5rem;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 2rem;
}

body{
   background-color: white;
   /* padding-bottom: 7.5rem; */
}
/* 
section{
   padding: 3rem 2rem;
   max-width: 1200px;
   margin: 0 auto;
}

.btn{
   display: inline-block;
   cursor: pointer;
   padding: 1rem 3rem;
   border: var(--border);
   font-size: 1.8rem;
   color: var(--sub-color);
   text-align: center;
   text-transform: capitalize;
   transition: .2s linear;
   margin-top: 1rem;
   background-color: var(--main-color);
}

.btn:hover{
   border-radius: 5rem;
   background-color: var(--sub-color);
   color: var(--main-color);
}

.header{
   padding-bottom: 0;
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 1.5rem;
}

.header .flex .logo{
   color: var(--sub-color);
   font-size: 2.5rem;
}

.header .flex .btn{
   margin-top: 0;
}

.header .flex .fa-bars{
   font-size: 3rem;
   cursor: pointer;
   color: var(--sub-color);
   display: none;
}

.header .navbar{
   display: flex;
   align-items: center;
   justify-content: space-around;
   gap: 1.5rem;
   margin-top: 2rem;
   background-color: var(--sub-color);
   padding: .5rem;
   border-radius: .5rem;
}

.header .navbar a{
   font-size: 1.8rem;
   color: var(--main-color);
   padding: 1rem 3rem;
   border-radius: .5rem;
}

.header .navbar a:hover{
   background-color: var(--main-color);
   color: var(--sub-color);
}

.home .box img{
   border-radius: .5rem;
   height: 60vh;
   width: 100%;
   object-fit: cover;
}

.home .box .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 1.5rem;
   flex-wrap: wrap;
   margin-top: 1.5rem;
}

.home .box .flex h3{
   font-size: 2.5rem;
   color: var(--sub-color);
   text-transform: capitalize;
}

.swiper-button-prev{
   left: 0%;
}

.swiper-button-next{
   right: 0;
}

.swiper-button-next,
.swiper-button-prev{
   padding: 3rem 2rem;
   background-color: var(--white);
   top: 40%;
   opacity: .7;
}

.swiper-button-next::after,
.swiper-button-prev::after{
   color: var(--main-color);
   font-size: 2rem;
}

.swiper-button-next:hover,
.swiper-button-prev:hover{
   opacity: 1;
}

.availability form .flex{
   display: flex;
   flex-wrap: wrap;
   gap: 1.5rem;
}

.availability form .flex .box{
   flex: 1 1 20rem;
}

.availability form .flex .box p{
   font-size: 2rem;
   color: var(--sub-color);
}

.availability form .flex .box .input{
   width: 100%;
   padding: 1rem 0;
   font-size: 1.8rem;
   background-color: var(--main-color);
   color: var(--white);
   border-bottom: var(--border);
   margin: 1rem 0;
}

.availability form .flex .box input[type="date"]::-webkit-calendar-picker-indicator{
   filter: invert(1);
}

.about .row{
   display: flex;
   flex-wrap: wrap;
   gap: 1.5rem;
   text-align: center;
   align-items: center;
}

.about .row .image{
   flex: 1 1 40rem;
}

.about .row .image img{
   width: 40rem;
   border-radius: .5rem;
}

.about .row .content{
   flex:1 1 40rem;
}

.about .row .content h3{
   font-size: 3rem;
   color: var(--sub-color);
   text-transform: capitalize;
   margin-bottom: 1rem;
}

.about .row .content p{
   line-height: 2;
   padding: 1rem 0;
   font-size: 1.7rem;
   color: var(--sub-color);
}

.about .row.revers{
   flex-flow: row-reverse;
   margin: 3rem 0;
   flex-wrap: wrap;
}

.services .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
   gap: 1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.services .box-container .box{
   padding: 2rem;
   text-align: center;
}

.services .box-container .box img{
   height: 7rem;
   margin-bottom: 1rem;
}

.services .box-container .box h3{
   font-size: 2rem;
   color: var(--sub-color);
   text-transform: capitalize;
   margin: 1rem 0;
}

.services .box-container .box p{
   line-height: 2;
   font-size: 1.5rem;
   color:var(--sub-color);
}

.reservation form{
   border: var(--border);
   padding: 2rem;
}

.reservation form .flex{
   display: flex;
   flex-wrap: wrap;
   gap: 1.5rem;
}

.reservation form h3{
   background-color: #007bff;
   box-shadow: inset 0 0em 0em #1bdc74, 0 0 0 -2px #abacab, 0.3em 0.3em 1em #1387e775;
   color: var(--main-color);
   font-size: 2.5rem;
   margin-bottom: 2rem;
   border-radius: .5rem;
   padding: 1.2rem;
   text-align: center;
   text-transform: capitalize;
}

.reservation form .flex .box{
   flex: 1 1 40rem;
}

.reservation form .flex .box p{
   font-size: 1.8rem;
   color: var(--sub-color);
}

.reservation form .flex .box .input{
   padding: 1rem 0;
   margin: 1rem 0;
   border-bottom: var(--border);
   background: var(--main-color);
   color: var(--white);
   font-size: 1.8rem;
   width: 100%;
}

.reservation form .flex .box .input::placeholder{
   color: rgba(220, 198, 156, .6);
}

.reservation form .flex .box input[type="date"]::-webkit-calendar-picker-indicator{
   filter: invert(1);
}

.gallery img{
   height: 40rem;
   width: 60rem;
   border-radius: .5rem;
   object-fit: cover;
   margin-bottom: 4rem;
   user-select: none;
}

.swiper-pagination-bullets.swiper-pagination-horizontal{
   bottom: 0;
}

.swiper-pagination-bullet{
   background-color: var(--sub-color);
}

.swiper-pagination-bullet-active{
   background-color: var(--white);
}

.contact .row{
   display: flex;
   align-items: flex-start;
   gap: 3rem;
   flex-wrap: wrap;
}

.contact .row form{
   flex: 1 1 40rem;
   border: var(--border);
   border-radius: .5rem;
   padding: 2rem;
   text-align: center;
}

.contact .row .faq{
   flex: 1 1 40rem;
}

.contact .row form h3{
   border-radius: .5rem;
   padding: 1.2rem;
   color: var(--main-color);
   background-color: var(--sub-color);
   font-size: 2.2rem;
   text-transform: capitalize;
}

.contact .row form .box{
   padding: 2rem 0;
   margin: 1rem 0;
   border-bottom: var(--border);
   font-size: 1.8rem;
   color: var(--sub-color);
   background:var(--main-color);
   width: 100%;
}

.contact .row form .box::placeholder{
   color: rgba(220, 198, 156, .6);
}

.contact .row form textarea{
   height: 15rem;
   resize: none;
}

.contact .row .faq .title{
   padding-bottom: .5rem;
   font-size: 2.5rem;
   color: var(--sub-color);
   text-transform: capitalize;
   text-align: center;
}

.contact .row .faq .box{
   border-radius: .5rem;
   border: var(--border);
   margin-top: 2rem;
}

.contact .row .faq .box h3{
   background-color: var(--sub-color);
   color: var(--main-color);
   padding: 1.5rem;
   font-size: 2rem;
   border-radius: .5rem;
   cursor: pointer;
}

.contact .row .faq .box p{
   padding:1.5rem 2rem;
   line-height: 2;
   font-size: 1.6rem;
   color: var(--sub-color);
   display: none;
}

.contact .row .faq .box.active p{
   display: inline-block;
}

.reviews{
   padding-top: 0;
}

.reviews .box{
   text-align: center;
   user-select: none;
   padding: 2rem;
   margin-bottom: 4rem;
}

.reviews .box img{
   height: 7rem;
   width: 7rem;
   border-radius: 50%;
   object-fit: cover;
}

.reviews .box h3{
   margin: 1.5rem 0;
   font-size: 2rem;
   color: var(--sub-color);
}

.reviews .box p{
   line-height: 2;
   font-size: 1.5rem;
   color: var(--sub-color);
} */

.bookings .heading{
   text-align: center;
   margin-bottom: 2rem;
   color: var(--sub-color);
   font-size: 2.5rem;
   text-transform: capitalize;
}

.bookings .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap: 1.5rem;
   justify-content: center;
   align-items: flex-start;
}
.box{
   border-radius: .5rem;
   padding: 2rem;
   padding-top: 1rem;
   border: var(--border);
}
.box p{
   line-height: 1.5;
   padding-top: .5rem;
   font-size: 1.8rem;
   color: var(--sub-color);
}
.box p {
   color: var(--white);
}

/* .footer .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 1.5rem;
   justify-content: center;
   align-items: flex-start;
   padding-bottom: 3rem;
}

.footer .box-container .box a{
   display: block;
   font-size: 1.8rem;
   color: var(--sub-color);
   padding: 1rem 0;
}

.footer .box-container .box a:hover{
   color: var(--white);
}

.footer .box-container .box:first-child i{
   margin-right: 1.7rem;
}

.footer .box-container .box:nth-child(2){
   text-align: center;
}

.footer .box-container .box:last-child{
   text-align:right;
}

.footer .box-container .box:last-child i{
   margin-left: 1.7rem;
}

.footer .credit{
   border-radius: .5rem;
   padding: 2rem;
   text-align: center;
   color: var(--main-color);
   background-color: var(--sub-color);
   font-size: 2rem;
   
} */


























/* media queries  */

@media (max-width:991px){

   html{
      font-size: 55%;
   }

   .header .flex .fa-bars{
      display: inline-block;
   }

   .header .flex .btn{
      display: none;
   }

   .header .navbar{
      flex-flow: column;
      padding: 2rem;
      display: none;
   }

   .header .navbar.active{
      display: flex;
   }

}

@media (max-width:768px){

   .home .box img{
      height: 40vh;
   }

   .swiper-button-next,
   .swiper-button-prev{
      top: 35%;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .header .flex .logo{
      font-size: 2rem;
   }

   .home .box img{
      height: 25rem;
   }

   .about .row .image img{
      width: 100%;
   }

   .gallery img{
      height: 25rem;
      width: 30rem;
   }

   .bookings .box-container{
      grid-template-columns: 1fr;
   }

}
    </style>
</head>
<body>



        <?php
        // Replace these variables with your actual database credentials
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mhmsdb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
      //   if (isset($_GET['catid'])){
      //      $service = $_GET['catid'];
      //     $_SESSION['catid'] = $service;

        // Perform a query
        $res = mysqli_query($conn, "SELECT * FROM tblmaid");

        // Fetch data
        while ($row = mysqli_fetch_array($res)) {
			
            echo ' <div class="column">
			<div class="card">
			 <div class="box"> 
			 <p> <img src="admin/images/' . (isset($row["ProfilePic"]) ? $row["ProfilePic"] : '') . '" height="50px;" style="margin-left: 358px;
			 padding: 0px;
			 width: 28%;
			 height: 4%; ></p>
			 <p>ID Proof:<img src="admin/idproofimages/' . (isset($row["IdProof"]) ? $row["IdProof"] : '') . '" height="50px;" ></p>
                    <p style="margin-top:-113px"> Name:' . (isset($row['Name'])? $row['Name'] : '') . '</p> 
                    <p>Email:' . (isset($row['Email']) ? $row['Email'] : '') . '</p> 
					<p>Contact:' . (isset($row['ContactNumber']) ? $row['ContactNumber'] : '') . '</p> 
                    <p>DOB:' . (isset($row['Dateofbirth']) ? $row['Dateofbirth'] : '') . '</p>
					<p>Address:' . (isset($row['Address']) ? $row['Address'] : '') . '</p> 
                <p>Category:' . (isset($row['CatID']) ? $row['CatID'] : '') . '</p> 
					<p>Experience:' . (isset($row['Experience']) ? $row['Experience'] : '') . '</p> 
                    <p>Gender:' . (isset($row['Gender']) ? $row['Gender'] : '') . '</p> 
                   
                </div>
				</div>
				</div>
				';
        }
      
        // Close the connection
        $conn->close();
        ?>
    </table>
</div>

</body>
</html>
