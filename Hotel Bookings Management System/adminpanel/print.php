<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

  <!--  -->

  <title>Park Inn - Admin Panel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--  -->

  <link rel="stylesheet" href="print.css">

  <!--  -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <!--  -->

</head>

<body style="background-color:#fff;">
  <?php
	ob_start();	
	include ('database.php');
    $con = mysqli_connect("localhost","root","","parkinn");
	$pid = $_GET['pid'];
	
	$sql ="SELECT * from `customerpayment` where customerid = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['customerid'];
		$title = $row['title'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$troom = $row['roomtype'];
		$bed = $row['bedtype'];
		$nroom = $row['noroom'];
		$cin = $row['checkin'];
		$cout = $row['checkout'];
		$meal = $row['mealtype'];
		$ttot = $row['roomprice'];
		$mepr = $row['mealprice'];
		$btot = $row['bedprice'];
		$fintot = $row['grandtotal'];
		$days = $row['noofdays'];		
	}
	
	$type_of_room = 0;       
	if($troom=="Standard Rooms")
	{
		$type_of_room = 1000;
	}
	else if($troom=="Deluxe Rooms")
	{
		$type_of_room = 2000;
	}
	else if($troom=="Joint Rooms")
	{
		$type_of_room = 3000;
	}
	else if($troom=="Apartment style")
	{
		$type_of_room = 4000;
	}
									
	if($bed=="Single")
	{
		$type_of_bed = 100;
	}
	else if($bed=="Double")
	{
		$type_of_bed = 200;
	}
	else if($bed=="Triple")
	{
		$type_of_bed =  300;
	}
	else if($bed=="Quad")
	{
		$type_of_bed = 400;
	}
	else if($bed=="None")
	{
		$type_of_bed = 0;
	}
									
									  
    if($meal=="Breakfast Only")									
    {										
        $type_of_meal= 500;
	}								
    else if($meal=="Breakfast and lunch")
	{									
    $type_of_meal=1000;									
    }
    else if($meal=="Full Board")									
    {										
    $type_of_meal=2000; 																	
    }
    else if($meal=="Half Board")									
    {
    $type_of_meal=1500;
    }
	
?>
  <div class="Section" style="background-color:#fff;">

    <div class="Section1" style="background-color:#fff;">
      <div>
        <hr>
        <h1>
          <center>Invoice</center>
        </h1>
        <hr>
      </div>
    </div>

    <div class="Section2" style="background-color:#fff;">
      <div>
        <h2>
          <center>Park Inn</center>
        </h2>
        <center>
          <p>Kanakapura Main Road, Bengaluru South, Bengaluru - 560080</p>
          <p>Email Id : parkinnbengaluru@gmail.com</p>
          <p>91+ 9876545678</p>
          <img style="width:100px;" src="../images/Favicon.png" alt="Logo">
        </center>
      </div>
    </div>

    <div class="Section3" style="background-color:#fff;">
      <table style="background-color:#fff;" class="table table-striped table-bordered">
        <tr>
          <th><span>Recipient</span></th>
          <td><span><?php echo $title.". ".$fname." ".$lname; ?></span></td>
        </tr>
        <tr>
          <th><span>Invoice No.</span></th>
          <td><span><?php echo $id; ?></span></td>
        </tr>
        <tr>
          <th><span>Date</span></th>
          <td><span><?php echo $cout; ?></span></td>
        </tr>
      </table>
    </div>

    <div class="Section4">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Selected</th>
            <th>No. of Days</th>
            <th>Price</th>
            <th>No. of Rooms</th>
            <th>Grand Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span><?php echo $troom; ?></span></td>
            <td><span><?php echo $days; ?> </span></td>
            <td><span data-prefix>₹</span><span><?php  echo $type_of_room;?></span></td>
            <td><span><?php echo $nroom;?> </span></td>
            <td><span data-prefix>₹</span><span><?php echo $ttot; ?></span></td>
          </tr>
          <tr>
            <td><span><?php echo $bed; ?> Bed </span></td>
            <td><span><?php echo $days; ?></span></td>
            <td><span data-prefix>₹</span><span><?php  echo $type_of_bed;?></span></td>
            <td><span><?php echo $nroom;?> </span></td>
            <td><span data-prefix>₹</span><span><?php echo $btot; ?></span></td>
          </tr>
          <tr>
            <td><span><?php echo $meal; ?> </span></td>
            <td><span><?php echo $days; ?></span></td>
            <td><span data-prefix>₹</span><span><?php  echo $type_of_meal?></span></td>
            <td><span><?php echo $nroom;?> </span></td>
            <td><span data-prefix>₹</span><span><?php echo $mepr; ?></span></td>
          </tr>
        </tbody>
      </table>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
          <tr>
            <th><span>Total</span></th>
            <td><span data-prefix>₹</span><span><?php echo $fintot; ?></span></td>
          </tr>
          <tr>
            <th><span>Amount Paid</span></th>
            <td><span data-prefix>₹</span><span>0.00</span></td>
          </tr>
          <tr>
            <th><span>Balance Due</span></th>
            <td><span data-prefix>₹</span><span><?php echo $fintot; ?></span></td>
          </tr>
          </tr>
        </thead>
      </table>
    </div>


    <div class="Section5">
      <center>
        <p align="center">Email Id : parkinnbengaluru@gmail.com || Web :- www.Parkinn.com || Phone :- 91+ 9876545678</p>
      </center>
    </div>
  </div>
  <?php
$free="Free";
$nul = null;
$rpsql = "UPDATE `hotelrooms` SET `place`='$free',`cusid`='$nul' where `cusid`='$id'";
if(mysqli_query($con,$rpsql))
{
	$delsql= "DELETE FROM `customerinfo` WHERE customerid='$id' ";
	
	if(mysqli_query($con,$delsql))
	{
	
	}
}
?>
  <?php 

ob_end_flush();

?>
</body>

</html>