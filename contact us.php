<?php

include("database.php");
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact us</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
    <div class="top-header top-header-bg">
      <div class="container">
      <div class="header-left">
      <div class="header-left-card">
      <ul>
      <li>  
      <div class="head-icon">
      <i class="fa fa-envelope"></i>
      </div>
      <a href="mailto:hello@medizo.com">grandhotel@gmail.com</a>
      </li>
      <li>
      <div class="head-icon">
      <i class="fas fa-location"></i>
      </div>
      <a href="#">Lebanon,Beirut City</a>
      </li>
      <li>
      <div class="head-icon">
         <i class="fa fa-phone"></i>
      </div>
      <a href="#">  :+961 70 845 112</a>
      <li>
         <a href="#" target="_blank">
         <i class="fab fa-facebook-f"></i>
         </a>
            <a href="#" target="_blank">
            <i class="fab fa-twitter"></i>
            </a>
            
            <a href="#" target="_blank">
            <i class="fab fa-youtube"></i>
            </a>
            
            <a href="#" target="_blank">
            <i class="fab fa-instagram"></i>
            </a>
            
            <a href="#" target="_blank">
            <i class="fab fa-google"></i>
            </a>
      </li>

      </li>
      </ul>
      </div>
      </div>
      </div>
      </div>
      
   </div>

   <header class="header">
      

      <a href="#" class="logo"> <i class="fas fa-hotel"></i> GrandHotel </a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="#about">about</a>
         <a href="room.php">room</a>
         <a href="#gallery">gallery</a>
         <a href="#review">review</a>
         <a href="contact us.php">Contact Us</a>
         <a href="booking.php" class="btn"> book now</a>
         <a href="Login.php" class="user" id="user-icon"> <i class="fa fa-sign-out"></i></a>
      </nav>

      <div class="switch-box">
         <label id="switch" class="switch">
         <input type="checkbox"  id="slider">
         <span class="slider round"></span>
         </label>
      </div>
      <div id="menu-btn" class="fas fa-bars"></div>

   </header>

   <!-- end -->

   <!-- home -->

   

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                
                font-family: 'poppins', sans-serif;
            }
            .container2{
                width:100%;
                height: 100vh;
                background:  url('images/cu.jpg');
               
                display:flex;
                align-items: center;
                margin-top: 80px;
                justify-content: center;  
            }
            form{
                background: white;
                background-color: #48cae4;
                display: flex;
                flex-direction: column;
                padding: 2vw 3vw;
                width:90%;
                max-width: 600px;
                border-radius: 10px;
            }

            form h1{
                columns: #555;
                font-weight: 800;
                font-size: 40px;
                margin-bottom: 20px;
                margin-left: 110px;
                color: #1A5796;

            }
            form input, form textarea{
                border: 0;
                border-radius: 10px;
                margin: 10px 0;
                padding: 20px;
                outline: none;
                background: floralwhite;
                font-size: 16px;
            }
            form button{
                padding: 15px;
                background: #1A5796;
                color:white;
                font-size: 18px;
                border:0;
                outline: none;
                cursor: pointer;
                width: 150px;
                margin: 20px auto 0;
                border-radius: 30px;

            }
            form button:hover{
                background: green;

            }
        </style>
        <div class="container2">
            <form action="https://formspree.io/f/xnqyrgna" method="POST">
                <h1>GET IN TOUCH</h1>
                <input type="text" id="name" name="name" placeholder="Your name" required>
                <input type="email" id="email" name="email" placeholder="Your email" required>
                <input type="type" id="phone" pattern=".{,8}" name="phone" placeholder="Phone no." required>
                <textarea id="message" rows="5" name="message" placeholder="how can we help you?" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>

        <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +961 70 845 112 </a>
            <a href="#"> <i class="fas fa-phone"></i> +961 76 232 550</a>
            <a href="#"> <i class="fas fa-envelope"></i> grandhotel@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Lebanon,Beirut City</a>
         </div>

         <div class="box">
            <h3>Quick Links</h3>
            <a href="index.html"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="About.html"> <i class="fas fa-arrow-right"></i> about</a>
            <a href="Room.html"> <i class="fas fa-arrow-right"></i> rooms</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> gallery</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reservation</a>
         </div>

         <div class="box">
            <h3>Our Location</h3>
            <a href="#"> <i class="fa fa-map-marker"></i>Lebanon</a>
            <a href="#"> <i class="fa fa-map-marker"></i>USA</a>
            <a href="#"> <i class="fa fa-map-marker"></i>Switzerland</a>
            <a href="#"> <i class="fa fa-map-marker"></i>France</a>
            <a href="#"> <i class="fa fa-map-marker"></i>Uk</a>
         </div>

      </div>
      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-pinterest"></a>
      </div>

      <div class="credit">&copy; copyright @ 2023</div>

   </section>
    </body>
</html>