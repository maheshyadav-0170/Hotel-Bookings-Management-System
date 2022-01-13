<?php
    include ("database.php");
    session_start();
    if (!isset($_SESSION["user"])) 
    {
        header("location:index.php");
    }
?>

<?php 
    if (!isset($_GET["rid"])) 
    {
    header("location:index.php");
    } 
    else 
    {
        $curdate = date("Y/m/d");
    
        $id = $_GET["rid"];

        $sql = "SELECT * from `customerinfo` where `customerid` = '$id' ";
        $re = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($re)) 
        {
            $title = $row["title"];
            $fname = $row["fname"];
            $lname = $row["lname"];
            $email = $row["emailid"];
            $nat = $row["nationality"];
            $country = $row["country"];
            $Phone = $row["phonenumber"];
            $troom = $row["roomtype"];
            $bed = $row["bedtype"];
            $non = $row["roomnos"];
            $meal = $row["mealtype"];
            $cin = $row["checkindate"];
            $cout = $row["checkoutdate"];
            $sta = $row["status"];
            $days = $row["days"];
        }
    } 
?>


<!DOCTYPE html>
    <html>

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
        <!--  -->
        <div class="Section1">
            <div>
                <a href="index.php">Homepage</a>
                <a style="padding-left:950px;" href="usersetting.php">Profile</a>
                <a href="settings.php">Settings</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <!--  -->
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
        <!--  -->
        <div class="Section3">
            <div>
                <br>
                <h1 style="color: #9D9D9D;">Room Bookings Status</h1>
            </div>
        </div>
        <!--  -->
        <div class="Section3">
            <div>
                <br>
                <h4 style="color: #9D9D9D;">Room Bookings Status : <span><?php echo $curdate; ?></span></h4>
            </div>
        </div>
        <!--  -->
        <div class="Section3">
            <div>
                <br>
                <h2 style="color: #9D9D9D;">Booking Confirmation</h2>
            </div>
        </div>
        <!--  -->
        <div style="margin-left:300px; margin-right:200px;">

            <table class="table table-bordered table-striped">
                    <tr>
                        <th>Description</th>
                        <th>Information</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th><?php echo $title." ".$fname." ".$lname; ?> </th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th><?php echo $email; ?> </th>
                    </tr>
                    <tr>
                        <th>Nationality </th>
                        <th><?php echo $nat; ?></th>
                    </tr>
                    <tr>
                        <th>Country </th>
                        <th><?php echo $country; ?></th>
                    </tr>
                    <tr>
                        <th>Phone No </th>
                        <th><?php echo $Phone; ?></th>
                    </tr>
                    <tr>
                        <th>Type Of the Room </th>
                        <th><?php echo $troom; ?></th>
                    </tr>
                    <tr>
                        <th>No Of the Room </th>
                        <th><?php echo $non; ?></th>
                    </tr>
                    <tr>
                        <th>Meal Plan </th>
                        <th><?php echo $meal; ?></th>
                    </tr>
                    <tr>
                        <th>Bedding </th>
                        <th><?php echo $bed; ?></th>
                    </tr>
                    <tr>
                        <th>Check-in Date </th>
                        <th><?php echo $cin; ?></th>
                    </tr>
                    <tr>
                        <th>Check-out Date</th>
                        <th><?php echo $cout; ?></th>
                    </tr>
                    <tr>
                        <th>No of days</th>
                        <th><?php echo $days; ?></th>
                    </tr>
                    <tr>
                        <th>Status Level</th>
                        <th><?php echo $sta; ?></th>
                    </tr>
                    </table>
  </div>
  <form action="" method="post">
    <div style=" margin-left:300px;width:50;" class="form-group">
      <select style="width:50;" name="conf">
        <option>Select Confirmation</option>
        <option>Confirm</option>
      </select>
    </div>
    <input style="margin-left:350px;" type="submit" name="co" value="Confirm" class="btn btn-outline-dark btn-lg">
  </form>
  <hr>
  <?php
     $rsql = "SELECT * from `hotelrooms`";
     $rre = mysqli_query($con, $rsql);
     $r = 0;
     $sc = 0;
     $gh = 0;
     $sr = 0;
     $dr = 0;
     while ($rrow = mysqli_fetch_array($rre)) 
     {
         $r = $r + 1;
         $s = $rrow["roomtype"];
         $p = $rrow["place"];
         if ($s == "Standard Rooms") {
             $sc = $sc + 1;
         }
         else if ($s == "Deluxe Rooms") {
             $gh = $gh + 1;
         }
         else if ($s == "Joint Rooms") {
             $sr = $sr + 1;
         }
         else if ($s == "Apartment style") {
             $dr = $dr + 1;
         }
     }
     ?>

  <?php
      $csql = "SELECT * from `customerpayment`";
      $cre = mysqli_query($con, $csql);
      $cr = 0;
      $csc = 0;
      $cgh = 0;
      $csr = 0;
      $cdr = 0;
      while ($crow = mysqli_fetch_array($cre)) 
      {
          $cr = $cr + 1;
          $cs = $crow["roomtype"];

          if ($cs == "Standard Rooms") {
              $csc = $csc + 1;
          }

          if ($cs == "Deluxe Rooms") {
              $cgh = $cgh + 1;
          }
          if ($cs == "Joint Rooms") {
              $csr = $csr + 1;
          }
          if ($cs == "Apartment style") {
              $cdr = $cdr + 1;
          }
      }
      ?>
  <div class="Section3">
    <div>
      <br>
      <h1 style="color: #9D9D9D;">Available Room Details</h1>
    </div>
  </div>

  <div style="margin-left:300px">
    <table width="400px">
      <tr>
        <td><b>Standard Rooms</b></td>
        <td>
          <button type="button" class="btn btn-primary btn-circle">
            <?php
                    $f1 = $sc - $csc;
                    if ($f1 <= 0) {
                        $f1 = "NO";
                        echo $f1;
                    } else {
                        echo $f1;
                    }
                ?>
          </button>
        </td>
      </tr>
      <tr>
        <td><b>Deluxe Rooms</b></td>
        <td>
          <button type="button" class="btn btn-primary btn-circle">
            <?php
                    $f2 = $gh - $cgh;
                    if ($f2 <= 0) {
                        $f2 = "NO";
                        echo $f2;
                    } else {
                        echo $f2;
                    }
                ?>
          </button>
        </td>
      </tr>
      <tr>
        <td><b>Joint Rooms</b></td>
        <td>
          <button type="button" class="btn btn-primary btn-circle">
            <?php
                    $f3 = $sr - $csr;
                    if ($f3 <= 0) {
                        $f3 = "NO";
                        echo $f3;
                    } else {
                        echo $f3;
                    }
                ?>
          </button>
        </td>
      </tr>
      <tr>
        <td><b>Apartment style</b> </td>
        <td>
          <button type="button" class="btn btn-primary btn-circle">
            <?php
                $f4 = $dr - $cdr;
                if ($f4 <= 0) {
                    $f4 = "NO";
                    echo $f4;
                } else {
                    echo $f4;
                }
            ?>
          </button>
        </td>
      </tr>
      <tr>
        <td><b>Total Rooms </b> </td>
        <td>
          <button type="button" class="btn btn-danger btn-circle">
            <?php
                    $f5 = $r - $cr;
                    if ($f5 <= 0) {
                        $f5 = "NO";
                        echo $f5;
                    } else {
                        echo $f5;
                    }
                ?>
          </button>
        </td>
      </tr>
    </table>
 </div>


<?php 
    if (isset($_POST["co"])) {
    $st = $_POST["conf"];

    if ($st == "Confirm") {
        $urb = "UPDATE `customerinfo` SET `status`='$st' WHERE `customerid` = '$id'";

        if ($f1 == "NO" and $troom == "Standard Rooms") {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Standard Rooms ')</script>";
        } 
        elseif ($troom == "Deluxe Rooms" and $f2 == "NO")
        {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Rooms')</script>";
        }
         elseif ($f3 == "NO" and $troom == "Joint Rooms") {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Joint Rooms')</script>";
        } elseif ($f4 == "NO" and $troom == "Apartment style") {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Apartment style')</script>";
        } elseif (mysqli_query($con, $urb)) {
             "<script type='text/javascript'> alert('Guest Room booking is confirm')</script>";
             "<script type='text/javascript'> window.location='home.php'</script>";
            $type_of_room = 0;
            if ($troom == "Standard Rooms") {
                $type_of_room = 1000;
            } elseif ($troom == "Deluxe Rooms") {
                $type_of_room = 2000;
            } elseif ($troom == "Joint Rooms") {
                $type_of_room = 3000;
            } elseif ($troom == "Apartment style") {
                $type_of_room = 4000;
            }

            if ($bed == "Single") {
                $type_of_bed = 100;
            } elseif ($bed == "Double") {
                $type_of_bed = 200;
            } elseif ($bed == "Triple") {
                $type_of_bed = 300;
            } elseif ($bed == "Quad") {
                $type_of_bed = 400;
            } elseif ($bed == "None") {
                $type_of_bed = 0;
            }

            if ($meal == "Breakfast Only") {
                $type_of_meal = 500;
            } elseif ($meal == "Breakfast and lunch") {
                $type_of_meal = 1000;
            } elseif ($meal == "Full Board") {
                $type_of_meal = 2000;
            } elseif ($meal == "Half Board") {
                $type_of_meal = 1500;
            }

            $ttot = $type_of_room * $days * $non;
            $mepr = $type_of_meal * $days;
            $btot = $type_of_bed * $days;

            $fintot = $ttot + $mepr + $btot;

            //echo "<script type='text/javascript'> alert('$count_date')</script>";
            $psql = "INSERT INTO `customerpayment`(`customerid`, `title`, `fname`, `lname`, `roomtype`, `bedtype`, `noroom`, `checkin`, `checkout`,`mealtype`, `roomprice`, `bedprice`,`mealprice`,`grandtotal`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$non','$cin','$cout','$meal','$ttot','$btot','$mepr','$fintot','$days')";

            if (mysqli_query($con, $psql)) {
                $notfree = "Not Free";
                $rpsql = "UPDATE `hotelrooms` SET `place`='$notfree',`cusid`='$id' where beddingtype ='$bed' and roomtype='$troom' ";
                if (mysqli_query($con, $rpsql)) {
                    echo "<script type='text/javascript'> alert('Booking Confirmed')</script>";
                    echo "<script type='text/javascript'> window.location='roombook.php'</script>";
                }
            }
        }
    }
}

?>

</body>

</html>