<?php 
include("database.php"); 
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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

    <link rel="stylesheet" href="home.css">

    <!--  -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!--  -->

  </head>



  <body>
      <?php
        include ('database.php');
        $sql = "SELECT * from `customerinfo`";
	    ?>

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
        <h1 style="color: #9D9D9D;">Payment Details</h1>
      </div>
    </div>    

    <div style="background-color:#fff;"class="Section7">
      <div style="background-color:#fff;"class="Section8">
          <table class="table table-bordered" >
              <thead>
                  <th>Full Name</th>
                  <th>Room Type</th>
                  <th>Bedding Type</th>
                  <th>Check-in Date</th>
                  <th>Check-out Date</th>  
                  <th>No. of Rooms</th>                
                  <th>Meals Type</th>           
                  <th>Room price ₹</th>
                  <th>Bed price ₹</th>
                  <th>Meals ₹</th>
                  <th>Grand Total</th>  
                  <th>Print</th>
                  <th>Payment done</th>
                </thead>

                <tbody>
                <?php
                        include ('database.php');
                        $sql="SELECT * from `customerpayment`";
                        $re = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($re))
                        {
                        $id = $row['customerid'];
                            echo"<tr>
                            <td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
                            <td>".$row['roomtype']."</td>
                            <td>".$row['bedtype']."</td>
                            <td>".$row['checkin']."</td>
                            <td>".$row['checkout']."</td>
                            <td>".$row['noroom']."</td>
                            <td>".$row['mealtype']."</td>
                            <td>".$row['roomprice']."</td>
                            <td>".$row['bedprice']."</td>
                            <td>".$row['mealprice']."</td>
                            <td>".$row['grandtotal']."</td>
                            <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                            <td><a href=paymentDone.php?qid=".$id ." <button class='btn btn-light btn-outline-success'> <i class='fa fa-print' ></i>Done</button></td>
                            </tr>";
                        }
                        ?>
                </tbody>
          </table>
         
      </div>
  </div>
 <hr>

  </body>
</html>
