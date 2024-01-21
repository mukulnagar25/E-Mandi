<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_type = $_POST['product_type'];
   $product_mobile_no = $_POST['product_mobile_no'];
   $product_description = $_POST['product_description'];
   $product_address = $_POST['product_address'];

   

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to truck!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, type, mobile_no, description, address ) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_type','$product_mobile_no', '$product_description','$product_address')") or die('query failed');
      $message[] = 'product added to truck!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <video autoplay loop muted plays-inline class="background-clip">
         <source src="pexels-roman-odintsov-7046806 (2160p).mp4" type="video/mp4">
      </video>
      <h3>-: FEEL THE FARMER :-</h3>
      <p>Welcome to the greatest arena of farmers here you explore there own deals</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest Deals </h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">₹<?php echo $fetch_products['price']; ?>/-</div>
      
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="hidden" name="product_type" value="<?php echo $fetch_products['type']; ?>">
      <input type="hidden" name="product_mobile_no" value="<?php echo $fetch_products['mobile_no']; ?>">
      <input type="hidden" name="product_description" value="<?php echo $fetch_products['description']; ?>">
      <input type="hidden" name="product_address" value="<?php echo $fetch_products['address']; ?>">
      <input type="submit" value="SEEMS GOOD" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>We are here to digitalize the farmer, The motive is to get them there values</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>If you have any questions or concerns about E-Mandi, to know how it works, please don't hesitate to contact us. Our customer service team is always ready to assist you in any way they can.</p>
      <a href="contact.php" class><input type="submit" value="contact us" name="add_to_cart" class="btn" fdprocessedid="larhf"></a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>