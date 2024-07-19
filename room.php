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
   <title>Rooms</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
   
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <style>
      #h3{
         color:#1A5796;
         font-size: 15px;
         margin-left: 20px;
         margin-top: -5px;
      }
   </style>


   <!-- header -->
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

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/im1.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true.
                  We are available 24/7 for you! 
                  </h3>
                  <h3>enjoy Your time!</h3>
                  <a href="booking.php" class="btn"> book now</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/im8.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true.
                  We are available 24/7 for you! 
                  </h3>
                  <h3>enjoy Your time!</h3>
                  <a href="booking.php" class="btn"> book now</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/im9.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true.
                  We are available 24/7 for you!
                  </h3>
                  <h3>enjoy Your time!</h3>
                  <a href="booking.php" class="btn"> book now</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(im4.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true.
                  We are available 24/7 for you! 
                  </h3>
                  <h3>enjoy Your time!</h3>
                  <a href="booking.php" class="btn"> book now</a>
               </div>
            </div>
         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </section>
      <!-- DARK MODE button -->
      <div class="switch-box">
         <label id="switch" class="switch">
         <input type="checkbox" onchange="toggleTheme()" id="slider">
         <span class="slider round"></span>
         </label>
         </div>
      <div id="menu-btn" class="fas fa-bars"></div>

   </header>

   <section class="room" id="room">

    <h1 class="heading">our room</h1>
    <h3 id="h3">Enjoy our elegant guest rooms designed in warm beige tones and tailored to the needs of private and business travelers alike with free internet access </h3>

    <div class="swiper room-slider">

       <div class="swiper-wrapper">

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$65.99/night</span>
                <img src="images/e1.jpg" alt="">
             </div>
             <div class="content">
                <h3>exclusive room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$40.99/night</span>
                <img src="images/r3.jpg" alt="">
             </div>
             <div class="content">
                <h3>Family room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$18.99/night</span>
                <img src="images/r5.jpg" alt="">
             </div>
             <div class="content">
                <h3>Daily room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$95.99/night</span>
                <img src="images/r2.jpg" alt="">
             </div>
             <div class="content">
                <h3>Family room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$75.99/night</span>
                <img src="images/r66.jpg" alt="">
             </div>
             <div class="content">
                <h3>Daily room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$95.99/night</span>
                <img src="images/e2.jpg" alt="">
             </div>
             <div class="content">
                <h3>exclusive room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

       </div>

       <div class="swiper-pagination"></div>
    </div>

    <!--part2-->

    <div class="swiper room-slider">

       <div class="swiper-wrapper">

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$84.99/night</span>
                <img src="images/r6.jpg" alt="">
             </div>
             <div class="content">
                <h3>Daily room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$72.99/night</span>
                <img src="images/r4.jpg" alt="">
             </div>
             <div class="content">
                <h3>Family room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$59.99/night</span>
                <img src="images/room-3.jpg" alt="">
             </div>
             <div class="content">
                <h3>Exclusive room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$65.99/night</span>
                <img src="images/room-4.jpg" alt="">
             </div>
             <div class="content">
                <h3>Exclusive room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$45.99/night</span>
                <img src="images/e1.jpg" alt="">
             </div>
             <div class="content">
                <h3>Exclusive room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">$59.99/night</span>
                <img src="images/r1.jpg" alt="">
                
             </div>
             <div class="content">
                <h3>Family room</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="booking.php" class="btn">book now</a>
             </div>
          </div>

       </div>

       <div class="swiper-pagination"></div>



       

    </div>

 </section>
 <!--footer-->
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
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

 <script src="script/script.js"></script>

</body>
</html>