<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

  <!--  -->

  <title>Park Inn - Admin Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--  -->

  <link rel="stylesheet" href="show.css">

  <!--  -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <!--  -->

</head>

<body>
  <?php
	ob_start();
	include ('database.php');

	$pid = $_GET['sid'];

	$sql ="select * from customerinfo where customerid = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['customerid'];
		$title =  $row["title"];
		$Fname = $row["fname"];
		$lname = $row['lname'];
		$email = $row['emailid'];
		$National = $row['nationality'];
		$country = $row['country'];
		$phone = $row['phonenumber'];
		$room_type = $row['roomtype'];
		$Bed_type = $row['bedtype'];
		$Noof_room = $row['roomnos'];
		$meal_type = $row['mealtype'];
		$cin_date = $row['checkindate'];
		$cout_date = $row['checkoutdate'];
		$nodays = $row['days'];

	}


	?>
  <header>
    <h1>Guest Info</h1>
    <h2>Park Inn</h2>
    <address style="font-family: 'Quicksand', sans-serif; font-size:15px; font-weight:bolder;">
      <p>Kanakapura Main Road<br>Bengaluru South<br>Bengaluru</p>
      <p>Karnataka, India</p>
      <p>Pin - 560078</p>
      <p>+91 9876545679</p>
    </address>
    <span><img style="width:100px; margin-right:100px;" alt="Logo Image" src="../images/Favicon.png"></span>
  </header>
  <article>
    <h1></h1>
    <hr>
    <address>

      <p><br></p>
      <p style="font-family: 'Quicksand', sans-serif; font-size:15px; font-weight:bolder;">Coustomer Name : <?php echo $title." ".$Fname." ".$lname;?><br></p>
    </address>
    <table style="font-family: 'Quicksand', sans-serif; font-size:15px; font-weight:bolder;" class="meta">
      <tr>
        <th><span>Customer Id </span></th>
        <td><span><?php echo $id; ?></span></td>
      </tr>
      <tr>
        <th><span>Check in Date</span></th>
        <td><span><?php echo $cin_date; ?> </span></td>
      </tr>
      <tr>
        <th><span>Check out Date</span></th>
        <td><span><?php echo $cout_date; ?> </span></td>
      </tr>
    </table>
    <table style="font-family: 'Quicksand', sans-serif; font-size:15px; font-weight:bolder;">
      <tr>
        <td>Customer phone :<?php echo " ".$phone; ?> </td>

        <td>Customer email :<?php echo " ".$email; ?> </td>
      </tr>
      <tr>
        <td>Customer Country :<?php echo " ".$country; ?> </td>
        <td>Customer National :<?php echo " ".$National; ?> </td>
      </tr>
    </table>
    <br>
    <br>
    <table style=" text-align:center; font-family: 'Quicksand', sans-serif; font-size:15px; font-weight:bolder;" class="inventory">
      <thead>
        <tr>
          <th><span>Selected</span></th>
          <th><span>No of Days</span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span><?php echo $room_type; ?></span></td>
          <td><span><?php echo $nodays; ?> </span></td>
        </tr>
        <tr>
          <td><span><?php echo $Bed_type; ?> Bed </span></td>
          <td><span><?php echo $nodays; ?></span></td>

        </tr>
        <tr>
          <td><span><?php echo $meal_type; ?> </span></td>
          <td><span><?php echo $nodays; ?></span></td>

        </tr>
      </tbody>
    </table>

  </article>
  <aside>
    <h1><span>Contact us</span></h1>
    <div>
      <p align="center">Email :- parkinnbengaluru@gmail.com || Web :- www.parkinn.com || Phone :- 91+ 9999999999 </p>
    </div>
  </aside>
  <?php

ob_end_flush();

?>

</body>

</html>