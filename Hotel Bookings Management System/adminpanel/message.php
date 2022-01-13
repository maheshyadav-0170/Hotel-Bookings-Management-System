<?php
include ("database.php");

?> 

<?php

$sql = "SELECT email FROM subscribers";
$result = mysqli_query($con,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
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

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!--  -->
        <link rel="stylesheet" href="message.css">

  </head>

<body style="margin-top:30px;">
    <div style="margin-top:30px;">
        <div style="margin-top:30px;">
            <a href="../index.php">Homepage</a>
            <a style="padding-left:950px;" href="usersetting.php">Profile</a>
            <a href="settings.php">Settings</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

        <div class="Section2">
        <div>
            <a style=" color: #fff; padding-right:100px;" href="home.php">Status</a>
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
        <h1 style="color: #30475E;" >Newsletter Panel</h1>
        <br>
        <h5 style="color: #30475E;" >Send the newsletters to subscribers..!</h5>
      </div>
      <div>
<br>
    <form action="mailto: <?php
						$csql = "select * from subscribers";
						$cre = mysqli_query($con,$csql);
						while($crow=mysqli_fetch_array($cre) )
						{	
							echo $crow['email'].";\n";
						}
					?> "method="POST"enctype="multipart/form-data"name="EmailForm">
      <input class="btn btn-outline-dark btn-lg" type="submit" value="Compose Newsletter"> 
    </form>

      </div>
    </div>

    <?php
		include('database.php');
		$mail = "SELECT * FROM `subscribers`";
		$rew = mysqli_query($con,$mail);
	?>
    <div class="Section3">
      <div>
        <br><br>
        <h5 style="color: #30475E;" >List of subscribers</h5>
        <hr>
      </div>
      <div>
          <div class="Section8" style="font-size:1.3rem;color:#DD4A48;">
          <table style="font-size:1.3rem;color:#DD4A48;" class="table table-striped table-bordered" >
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
        </div>
        <hr>
</body>
</html>