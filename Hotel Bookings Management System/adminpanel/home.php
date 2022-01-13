<!--  -->

<?php  
 session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?>

<!--  -->

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

  <title>Park Inn - Admin Panel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--  -->

  <link rel="stylesheet" href="home.css">

  <!--  -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <!--  -->

</head>


<body>
  <div class="Section1">
    <div>
      <a href="index.php">Homepage</a>
      <a style="padding-left:950px;" href="usersetting.php">Profile</a>
      <a href="settings.php">Settings</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>

  <div class="Section2">
    <div>
      <a style="color: #fff; padding-right:100px;" href="home.php">Status</a>
      <a style="color: #fff;padding-right:100px;" href="message.php">News Letter</a>
      <a style="color: #fff;padding-right:100px;" href="roombook.php">Room Bookings</a>
      <a style="color: #fff;padding-right:100px;" href="payment.php">Payments</a>
      <a style="color: #fff;padding-right:100px;" href="profit.php">Profit</a>
      <a style="color: #fff;padding-right:100px;" href="logout.php">Logout</a>
    </div>
  </div>

  <div class="Section3">
    <div>
      <br>
      <h1 style="color: #30475E;">Room Bookings Status</h1>
    </div>
  </div>

  <!--  -->

  <?php
        include ('database.php');
        $sql = "select * from customerinfo";
        $re = mysqli_query($con,$sql);
        $c =0;
        while($row=mysqli_fetch_array($re) )
            {
                $new = $row['status'];
                $cin = $row['checkindate'];
                $id = $row['customerid'];
                if($new=="Not Confirm")
                {
                    $c = $c + 1;
                }
            }
	?>

  <!--  -->

  <div class="Section7">
    <div>
      <a style="font-size:2rem;color:#DD4A48;" href="index.php">New Room Bookings (<span style="font-weight:bolder;color: #DD4A48;"><?php echo $c; ?></span><span>)</span></a><br><br>
    </div>
    <div style="background-color:#fff;" class="Section8">
      <table class="table table-bordered" style="font-size:1rem;color:#DD4A48;">
        <thead>
          <th>Customer Id</th>
          <th>Full Name</th>
          <th>Email Id</th>
          <th>Nationality</th>
          <th>Country</th>
          <th>Phone</th>
          <th>Room Type</th>
          <th>Bedding Type</th>
          <th>No. of Rooms</th>
          <th>Meals</th>
          <th>Check-in Date</th>
          <th>Check-out Date</th>
          <th>No. of Days</th>
          <th>Booking Status</th>
          <th>Send Confirm. Mail</th>
          <th>Action</th>
        </thead>

        <tbody>
          <?php
						$tsql = "select * from customerinfo";
						$tre = mysqli_query($con,$tsql);
							while($trow=mysqli_fetch_array($tre) )
							{	
								$co =$trow['status']; 
								if($co=="Not Confirm")
									{
										echo"<tr>
										<th>".$trow['customerid']."</th>
										<th>".$trow['fname']." ".$trow['lname']."</th>
										<th>".$trow['emailid']."</th>
                    <th>".$trow['nationality']."</th>
										<th>".$trow['country']."</th>
                    <th>".$trow['phonenumber']."</th>
										<th>".$trow['roomtype']."</th>
										<th>".$trow['bedtype']."</th>
                    <th>".$trow['roomnos']."</th>
										<th>".$trow['mealtype']."</th>
										<th>".$trow['checkindate']."</th>
										<th>".$trow['checkoutdate']."</th>
                   <th>".$trow['days']."</th>
										<th>".$trow['status']."</th>
                    <th><a href='mailto:".$trow['emailid']." ' class='btn btn-dark'>Send Mail</a></th>
                    <th><a href='roombook.php?rid=".$trow['customerid']." ' class='btn btn-dark'>Action</a></th>
										</tr>";
									}	
							}
					?>
        </tbody>
      </table>

    </div>
    <br>
  <hr>
  <?php
		$rsql = "SELECT * FROM `customerinfo`";
		$rre = mysqli_query($con,$rsql);
		$r =0;
		while($row=mysqli_fetch_array($rre) )
		{		
			$br = $row['status'];
			if($br=="Confirm")
			{
			$r = $r + 1;
			}
		}
	    ?>

  <div>
    <br>
    <div>
      <a style="font-size:2rem;color:#DD4A48;">Booked Rooms (<span style="color: #DD4A48;"><?php echo $r; ?></span><span>)</span></a><br><br>
    </div>
    <?php
			$msql = "SELECT * FROM `customerinfo`";
			$mre = mysqli_query($con,$msql);
			while($mrow=mysqli_fetch_array($mre) )
			{		
				$br = $mrow['status'];
				if($br=="Confirm")
				{
					$fid = $mrow['customerid'];		
                    echo"<div >
                    <div>
                        <div>
                            <h3>".$mrow['fname']."</h3>
                        </div>
                        <div>
                        <a href=show.php?sid=".$fid ."><button  class='btn btn-light btn-outline-dark'>Show </button></a>".$mrow['roomtype']."                 <a href=roombookdelete.php?sid=".$fid ."><button  class='btn btn-light btn-outline-danger'>Delete</button></a>
						</div>
					</div>";		
				}
		    }
		?>
    <?php
                                            
            $fsql = "SELECT * FROM `subscribers`";
           $fre = mysqli_query($con,$fsql);
            $f =0;
            while($row=mysqli_fetch_array($fre) )
            {
               $f = $f + 1;
            }
        ?>
        <hr>
    <div>
      <a style="font-size:2rem;color:#DD4A48;" href="index.php">Newsletter Subscribers(<span style="color: #DD4A48;"><?php echo $f; ?></span><span>)</span></a><br><br>
    </div>
      <table class="table table-bordered" style="font-size:1.3rem;color:#DD4A48;">
        <thead>
          <th>Customer Id</th>
          <th>Full Name</th>
          <th>Email Id</th>
          <th>Start Date</th>
        </thead>

        <tbody>
          <?php
						$csql = "select * from subscribers";
						$cre = mysqli_query($con,$csql);
						while($crow=mysqli_fetch_array($cre) )
						{	
							echo"<tr>
							<th>".$crow['subscribersid']."</th>
							<th>".$crow['fullname']."</th>
							<th>".$crow['email']." </th>
							<th>".$crow['subscribeddate']." </th>
							</tr>";
						}
					?>
        </tbody>
      </table>
      <a href="message.php" class="btn btn-dark">More Action</a>

  </div>

  </div>
</body>

</html>