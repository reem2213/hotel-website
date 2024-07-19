<?php
include("database2.php");
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $adult=$_POST['adults'];
    $childrenn=$_POST['child'];
    $room=$_POST['rooms'];
    $roomtype=$_POST['type'];

    if(!empty($name) && !empty($email)){
        $query= "insert into booking (name, email, checkin, checkout, adults, children, rooms, roomtype) values ('$name', '$email', '$checkin', '$checkout', '$adult', '$childrenn', '$room', '$roomtype')";
        mysqli_query($con, $query);
        //$message[] = 'appointment made successfully!';
        echo "<script type='text/javascript'>alert('sucess')</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('failed')</script>";

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <style>
        table {
        margin-top: 1500px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        position: absolute;
        left: 50%;
        top: 30%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 1300px;
        height:100px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th{
        height: 10px;
        padding: 5px;
        text-align: left;
        font-size: 18px;
        border-bottom: 1px solid #ddd;
    }
    .tble{
    margin-top: 500px;
}
    
    td {
        font-size: 18px;
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        color: #1A5796;
        
    }
    #del{
      color:white;
      background-color: red;
    }
    
    #header {
        background-color: #48cae4;
        color: #fff;
        height: 10px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    #book{
      margin-left: 1150px;
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
   

   <!-- end -->

   <!-- reservation -->

   <section class="reservation" id="reservation">

      <h1 class="heading">book now</h1>

      <form action="booking.php" method="post" class="login active" id="booking" novalidate>

         <div class="container">

            <div class="box">
               <p>name</p>
               <input type="text" class="input" name="name" id="name" placeholder="Your Name">
            </div>

            <div class="box">
               <p>email</p>
               <input type="text" class="input" name="email" id="email" placeholder="Your Email">
            </div>

            <div class="box">
               <p>check in</p>
               <input type="date" class="input" name="checkin" id="checkin">
            </div>

            <div class="box">
               <p>check out</p>
               <input type="date" class="input" name="checkout" id="checkout">
            </div>

            <div class="box">
               <p>adults</p>
               <select name="adults" class="input" name="adults" id="adults">
                  <option>1 adults</option>
                  <option>2 adults</option>
                  <option>3 adults</option>
                  <option>4 adults</option>
                  <option>5 adults</option>
                  <option>6 adults</option>
               </select>
            </div>

            <div class="box">
               <p>children</p>
               <select name="child" class="input" name="child" id="children">
                  <option>1 child</option>
                  <option>2 child</option>
                  <option>3 child</option>
                  <option>4 child</option>
                  <option>5 child</option>
                  <option>6 child</option>
               </select>
            </div>

            <div class="box">
               <p>rooms</p>
               <select name="rooms" class="input" id="rooms" >
                  <option>1 room</option>
                  <option>2 rooms</option>
                  <option>3 rooms</option>
                  <option>4 rooms</option>
                  <option>5 rooms</option>
                  <option>6 rooms</option>
               </select>
            </div>

            <div class="box">
               <p>room type</p>
               <select name="type" class="input" id="type">
                  <option>exclusive rooms</option>
                  <option>family rooms</option>
                  <option>daily rooms</option>
                  <option>panoramic rooms</option>
               </select>
            </div>

         </div>
         <input type="submit" value="BOOK" id="book" onclick="printData()" class="btn">

      </form>
   </section>
   <!-- end -->

   <!--table-->
   <section class="tble">
   <table id="tb">
    <thead>
        <tr id="header">
            <th>Name</th>
            <th>Email</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Rooms</th>
            <th>Room Type</th>
            <th>Action</th>
        </tr>
    </thead>
        <tbody>
            <?php
            $sql="Select * from `booking`";
            $res=mysqli_query($con,$sql);
            if($res){
                while($row=mysqli_fetch_assoc($res)){
                    $name=$row['name'];
                    $email=$row['email'];
                    $check_in=$row['checkin'];
                    $check_out=$row['checkout'];
                    $adl=$row['adults'];
                    $childrenn=$row['children'];
                    $roomss=$row['rooms'];
                    $rtype=$row['roomtype'];

                    echo ' <tr>
                    <th scope="row">'.$name.'</th>
                    <td>'.$email.'</td>
                    <td>'.$check_in.'</td>
                    <td>'.$check_out.'</td>
                    <td>'.$adl.'</td>
                    <td>'.$childrenn.'</td>
                    <td>'.$roomss.'</td>
                    <td>'.$rtype.'</td>
                    <td><input type="button" value="delete" class="btn" id="del" onclick="deleteRow(this)" /></td>
                    </tr>';
                }
            }
            ?>
        </tbody>
    </table>
    </section>
    <!--end table-->

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
 
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <script src="script/script.js"></script>
   <script>
    function deleteRow(ele){
            var table = document.getElementById("tb");
            var rowCount = table.rows.length;
            if(rowCount <= 1){
                alert("There is no row available to delete!");
                return;
            }
            if(ele){
                //delete specific row
                ele.parentNode.parentNode.remove();
            }else{
                //delete last row
                table.deleteRow(rowCount-1);
            }
        }
   </script>
</body>
</html>