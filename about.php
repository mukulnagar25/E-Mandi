<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="style1.css">


</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

 <div class="flex">
    <div class="me">
        <video autoplay loop muted plays-inline class="background-c">
         <source src="pexels-sk-art-verma-11020466 (Original).mp4" type="video/mp4">
        </video>
      
    </div>
         <!-- <div class="image">
          <img src="images/about-img.jpg" alt="">
         </div> -->

       <div class="content">
         <h3>why choose us?</h3>
         <p> JAI JAVAN , JAI KISAAN </p>
         <p>There are several reasons why you should choose our E-Mandi. Firstly, we offer a vast collection of crops deals from various farmers</p>
         <p>Secondly, we pride ourselves for thinking this kind of idea in favor of farmer</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   
 </div>

</section>

<section class="authors">

   <h1 class="title">our team 😊</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mukul Nagar</h3>
      </div>

      <div class="box">
         <img src="founder2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Vedanti Chourey</h3>
      </div>

      <div class="box">
         <img src="founder1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sakshi Patel</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>