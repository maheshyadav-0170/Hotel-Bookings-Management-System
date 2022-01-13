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

    <link rel="stylesheet" href="message.css">

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
        <h1 style="color: #30475E;">Profit Details</h1>
      </div>
    </div>

<?php 
    //index.php
    $connect = mysqli_connect("localhost", "root", "", "parkinn");
    include('database.php');
    $query = "SELECT * FROM customerpayment";
	$result = mysqli_query($con, $query);
	$chart_data = '';
	$tot = 0;
	while($row = mysqli_fetch_array($result))
	{
	$tot = $tot + $row["grandtotal"] *30/100;
	}
	$chart_data = substr($chart_data, 0, -2);
?>
		
<div style="padding-bottom:100px;"class="Section8">
          <table class="table table-bordered table-striped" style="font-size:20px;" >
              <thead style="font-size:20px;">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Room Price</th>
                    <th>Meal Price </th>
                    <th>Bed Price</th>                    
                    <th>GrandTotal</th>
                    <th>Profit</th>
			    </thead>

                <tbody>
                <?php
                        include ('database.php');
                        $sql="select * from customerpayment";
                        $re = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($re))
                        {
                        $id = $row['customerid'];
							echo"<tr >
							<td>".$row['customerid']." </td>
							<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
							<td>".$row['checkin']."</td>
							<td>".$row['checkout']."</td>
							<td>₹".$row['roomprice']."</td>
							<td>₹".$row['mealprice']."</td>
							<td>₹".$row['bedprice']."</td>
							<td>₹".$row['grandtotal']."</td>
							<td>₹".$row['grandtotal']*30/100 ."</td>
							</tr>";
                        }
                        ?>
                </tbody>
          </table>     
      </div>
      <hr>
</body>
</html>