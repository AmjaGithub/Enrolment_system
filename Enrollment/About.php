<?php
//  echo "<script src="assert/js/sweetalert.js"></script>;
$connection=mysqli_connect("localhost","root","","enrollment");

if(!$connection)
{
    die("Connection Error".mysqli_connect_error());
}
else
{
    $message = "Connected";
    echo "<script>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/views.css">

</head>
<body>
   
<?php include 'user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="img24" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm Amjath. A Student of HNDIT Department from sammanthurai ATI . I love designing websites and exploring new things. Learning new things is my hobby.</p>

         <p>I would like to thank <a href="https://web.facebook.com/amm.tharik" target="_blank"> Mr.A.M.M.Tharik</a> Sir for guiding me through the session and making me able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>