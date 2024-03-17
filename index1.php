<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'Booking made successfully!';
   }else{
      $message[] = 'Booking failed';
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MOTORBIKE SERVICING WEBSITE </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Moto<span>Care.</span><img src="https://www.graphicsprings.com/filestorage/stencils/6658e537767711d19f911c852900686c.png?width=500&height=500" height="100" width="90"></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make booking</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>"Customize your ride, unleash your style!"</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
            <a href="#contact" class="link-btn">make booking</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/modified.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>"If you want to be happy for a lifetime, ride a motorcycle."</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
            <a href="#contact" class="link-btn">make booking</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/conceptdesign.webp" alt="">
         <h3>Concept Design</h3>
         <p>We discuss with you how your dream bike should look and give you the latest design trends.</p>
      </div>

      <div class="box">
         <img src="images/fabrication.svg" alt="" >
         <h3>Body Fabrication</h3>
         <p>Once the design is approved by you we start our work by fabrication different body parts.</p>
      </div>

      <div class="box">
         <img src="images/servicing.png" alt="" >
         <h3>Routine Servicing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima.</p>
      </div>

      <div class="box">
         <img src="images/paintwork.webp" alt="">
         <h3>Paint Work</h3>
         <p>Once the previous steps are completed, its time to give it the look and paint job.</p>
      </div>

      <div class="box">
         <img src="images/delivery.png" alt="">
         <h3>Delivery</h3>
         <p>We test the bike and once we are satisfied with the performance your dream bike is delivered.</p>
      </div>

      <div class="box">
         <img src="images/consultation.png" alt="">
         <h3>Consultation</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">LATEST FROM OUR STORE</h1>

   <div class="box-container container">

      <div class="box">
         <img src="https://static-01.daraz.com.np/p/7410ceeb35a69f7ee009517d438e0122.png" alt="">
         <h3>HELMETS</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="https://thumbs.dreamstime.com/b/vector-illustration-motorcycle-riding-race-suit-protective-gear-hovering-motorcycle-hovercraft-suit-boots-gloves-helmet-108652274.jpg" alt="">
         <h3>RIDING GEAR</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="https://thumbs.dreamstime.com/b/vector-illustration-motorbike-parts-repair-maintenance-set-motorcycle-parts-icons-silhouette-vector-124169064.jpg" alt="">
         <h3>ACCESSORIES</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> Satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Prashant Aryal</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="https://scontent.fktm3-1.fna.fbcdn.net/v/t39.30808-6/306705342_131166562992807_6997232898269503051_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_ohc=_GC-6ramkPsAX-klOki&_nc_ht=scontent.fktm3-1.fna&oh=00_AfBtPLmdsRjyWmE3fMIAXNOc97ywIIbrHZB5hkQ0ar5lDQ&oe=64232D9A" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Adhish Aryal</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.webp" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pragyan Shrestha</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>9840404040</p>
         <p>9841414141</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>kathamandu, nepal - 44600</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>aryalprashant3@gmail.com</p>
         <p>019bsccsit019@sxc.edu.np</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mr Prashant</span>  </div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

