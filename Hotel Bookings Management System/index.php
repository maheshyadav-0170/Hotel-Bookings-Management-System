<?php
include ("database.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

  <!--  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
  <title>Park Inn - Bengaluru</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--  -->

  <link rel="stylesheet" href="index.css">

  <!--  -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <!--  -->

</head>

<body>
   <div class="Section1">
      <h1 class="Section2" style="padding-top:20px;"><span><img src="images/Favicon.png" style="width:130px; margin-right:30px; padding-top:0px"alt=""></span>Park Inn - Bengaluru</h1>
   </div>

   <div class=Section3">
      <h1 class="Section4">Book your stay...</h1>
      <br>
      <center>
      <button type="button"onclick="window.location.href='adminpanel/reservation.php'" style="width:50%; height:20%; font-family: 'Orelega One', cursive;"class="btn btn-lg btn-block btn-outline-danger">Book now</button>
      </center>
   </div>
   <center>
      <br>
      <br>
      <hr>
      <br>
   </center>
   <div class="Section5">
      <div class="Section6">
         <h1 class="Section7">About us</h1>
         <p>Stop at Park Inn Hotel - Bengaluru to discover the wonders of Bengaluru. </p>
         <p>The hotel has everything you need for a comfortable stay. 24-hour room service, free Wi-Fi in all rooms, 24-hour front desk, facilities for disabled guests, luggage storage are just some of the facilities on offer. </p>
         <p>Some of the well-appointed guestrooms feature television LCD/plasma screen, internet access– wireless, internet access – wireless (complimentary), non smoking rooms, air conditioning. Entertain  the hotel's recreational facilities, including fitness center.Park Inn Hotel - Bengaluru is an excellent choice from which to explore Jaipur or to simply relax and rejuvenate.</p> 
         <img src="images/about_img.jpg" alt="About">
      </div>
         <center>
      <br>
      <br>
      <hr class="white">
      <br>
   </center>
   </div>

   <div class="Section3">
      <div>
      <h1 class="Section4">Gallery</h1>
      <br>
         <img src="images/img1.jpg" alt="Images"><span></span><span><img style="margin-left:20px;" src="images/img2.jpg" alt="Images"><br></span>
         <br>
         <img style="width:25%;" src="images/img3.jpg" alt="Images"><span></span><span><img style=" width: 26.5%; margin-left:20px;" src="images/img4.jpg" alt="Images"></span>
      </div>

              <center>
      <br>
      <br>
      <hr>
      <br>
   </center>
   </div>

   <div class="Section9">
      <div>
      <div>
      <h1 class="Section7" style=" color: #CD1818;padding-bottom:0px;">Subscribe to our newsletter</h1>
      <br>
         <form action="" name="form" method="post">
          <div class="form-group"style=" padding-left:450px;" >
                <input style="width:55%; text-align:center;"name="name" class="form-control form-control-lg" type="text" placeholder="Full Name">
          </div>
          <div class="form-group"style=" padding-left:450px;" >
                <input style="width:55%; text-align:center;"name="phone" class="form-control form-control-lg" type="text" placeholder="Phone Number">
          </div>
          <div class="form-group"style=" padding-left:450px;" >
                <input style="width:55%; text-align:center;"name="email" class="form-control form-control-lg" type="text" placeholder="Email Id">
          </div>
          <div class="form-group">
                <input   style="background-color: #DD4A48; color:#fff;"type="submit" name="sub"  class="btn btn-light">
          </div>
          </form>
          <?php if (isset($_POST["sub"])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $sql = "INSERT INTO `subscribers`(`fullname`, `phoneno`, `email`,`subscribeddate`) VALUES ('$name','$phone','$email',now())";

        if (mysqli_query($con, $sql)) {
            echo "Ok";
        }
    } ?>
      </div>

   </div>

   <footer style="background-color: #fff; color:black;">
   <center>
      <div class="footerdiv" style="background-color: #fff; color:black;">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p style="background-color: #fff; color:#CD1818;" class="EnjoyYourStay1">© Copyright 2022 Park Inn - Bengaluru</p>
    </div>

   </center>

  </footer>
</body>
