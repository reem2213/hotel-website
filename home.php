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
   <title>Hotel Website</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   



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

            <div class="swiper-slide slide" id="bg" style="background: url(images/im1.jpg) no-repeat;">
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

   <!-- end -->

   <section class="services">
      <h1 class="heading">our services</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/service1.png" alt="">
            <h3>swimming pool</h3>
         </div>

         <div class="box">
            <img src="images/service2.png" alt="">
            <h3>food & drink</h3>
         </div>

         <div class="box">
            <img src="images/service3.png" alt="">
            <h3>restaurant</h3>
         </div>

         <div class="box">
            <img src="images/service4.png" alt="">
            <h3>fitness</h3>
         </div>

         <div class="box">
            <img src="images/service5.png" alt="">
            <h3>beauty spa</h3>
         </div>

         <div class="box">
            <img src="images/service6.png" alt="">
            <h3>resort beach</h3>
         </div>
      </div>
   </section>

   <!-- end -->

   <!-- gallery -->

   <section class="gallery" id="gallery">

      <h1 class="heading">our gallery</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/gallery1.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery2.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery3.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery4.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery5.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery6.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>

   <!-- end -->

   <!-- review -->
   <section class="rev">
   <section class="review" style="background: url(images/review.jpg) no-repeat;">
   
      <div class="swiper review-slider">
         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>It's a great place to live and enjoy a comfortable life with lots of useful facilities providing the best living standards</p>
               <div class="user">
                  <img src="images/pic-1.png" alt="">
                  <div class="user-info">
                     <h3>James Saab</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Best Hotel ever! Great and fast services I have ever experienced in my entire life</p>
               <div class="user">
                  <img src="images/pic-2.png" alt="">
                  <div class="user-info">
                     <h3>Lora Hariss</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown. </p>
               <div class="user">
                  <img src="images/pic-3.png" alt="">
                  <div class="user-info">
                     <h3>Adam Smith</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>beautiful sunset view with delicious food and Fast services. That's amazing! enjoy your time to the maximum</p>
               <div class="user">
                  <img src="images/pic-4.png" alt="">
                  <div class="user-info">
                     <h3>Elissa yazbek</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
             </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </section>
   </section>

   <!-- end -->

<!--about us-->
<section class="about" id="about">

   <div class="row">

      <div class="image">
         <img src="images/bg.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>At Grand Hotel Group we strive to be the first choice in the mind of guests, owners and talent. In our journey to achieve this, we practice strong beliefs and actions that respect the diversity of people, the community, ethics and the planet.</p>
         <p>We are present in over 20 countries with nine distinctive brands. Together with our partners, we continue to develop new hotels and generate synergies to go much further.</p>
      </div>

   </div>

</section>
<!-- end -->



<section class="faqs" id="faq">

    <h1 class="heading">frequently asked questions</h1>

    <div class="row">

       <div class="image">
          <img src="images/FAQs.gif" alt="">
       </div>

       <div class="content">

          <div class="box active">
             <h3> Is there a deposit required when booking a room?</h3>
             <p>Yes, a deposit is required when booking a room. The amount of the deposit varies depending on the length of stay and type of reservation.</p>
          </div>

          <div class="box">
             <h3> Is there parking available at the hotel?</h3>
             <p>Yes, we offer free parking to our guests.</p>
          </div>

          <div class="box">
             <h3>What is the cancellation policy?</h3>
             <p>Our cancellation policy varies depending on the type of reservation. Please refer to your confirmation email or contact us directly for more information.</p>
          </div>

          <div class="box">
             <h3> Is there Wi-Fi available at the hotel?</h3>
             <p>Yes, we offer complimentary Wi-Fi to all of our guests.</p>
          </div>

          <div class="box">
             <h3> Are pets allowed at the hotel?</h3>
             <p> No, unfortunately we do not allow pets at our hotel.</p>
          </div>

       </div>

    </div>

 </section>




   <!-- footer -->

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

   <!-- end -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <script src="script/script.js"></script>

</body>
</html>