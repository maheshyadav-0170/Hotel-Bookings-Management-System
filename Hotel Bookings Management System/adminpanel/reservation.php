<?php
include "database.php"; ?>
<!DOCTYPE html>
<html>

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

    <link rel="stylesheet" href="reservation.css">

    <!--  -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!--  -->

  </head>

<body>


<!--  -->
    <div class="Section1" style="background-color: #DD4A48;">
      <div>
        <a href="../index.php"><i class="fa fa-home"></i> Homepage</a>
      </div>
    </div>
<!--  -->

    <div class="Section2">
      <div>
        <br>
        <h1>Book your stay now!!!</h1>
      </div>
    </div>

<!--  -->

    <div class="Section3">
      <div>
        <br>
        <h3>Personal Details</h3>
      </div>
    </div>

    <div class="Section4">
      <div class="Section5">
        <form action="" name="form" method="post">

              <!--  -->
              <div class="form-group">
                  <select name="title" placeholder="Title"  class="form-control">
                      <option>Select Title</option>
                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Miss</option>
                      <option>Dr</option>
                      <option>Master</option>
                  </select>
              </div>
              <!--  -->

              <div class="form-group">
                <input name="fname" class="form-control form-control-lg" type="text" placeholder="First Name">
              </div>

              <!--  -->

              <div class="form-group">
                <input name="lname" class="form-control form-control-lg" type="text" placeholder="Last Name">
              </div>

              <!--  -->

              <div class="form-group">
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Id">
              </div>

              <!--  -->

              <div class="form-group">
                <input name="nation" class="form-control form-control-lg" type="text" placeholder="Nationality">
              </div>

              <!--  -->

              <div class="form-group">
                <input name="country" class="form-control form-control-lg" type="text" placeholder="Country">
              </div>

              <!--  -->

              <div class="form-group">
                <input name="phone" type="tel" class="form-control form-control-lg" placeholder="Phone">
              </div>

              <!--  -->

              <div class="form-group">
                <strong><h2 style="padding-left:180px;">Reservation Details</h2></strong>
              </div>

              <!--  -->

              <div class="form-group">
                  <select name="troom" placeholder="Title" name="title" class="form-control">
                      <option>Select Room Type</option>
                      <option>Standard Rooms</option>
                      <option>Deluxe Rooms</option>
                      <option>Joint Rooms</option>
                      <option>Apartment style</option>
                  </select>
              </div>

              <!--  -->

              <div class="form-group">
                  <select name="bed" placeholder="Title" name="title" class="form-control">
                      <option>Bed Type</option>
                      <option>Single</option>
                      <option>Double</option>
                      <option>Triple</option>
                      <option>Quad</option>
                  </select>
              </div>

              <!--  -->

              <div class="form-group">
                  <select name="nroom" placeholder="Title" name="title" class="form-control">
                      <option>No. of Rooms</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
              </div>

              <!--  -->

              <div class="form-group">
                  <select name="meal" placeholder="Title" name="title" class="form-control">
                      <option>Meal Type</option>
                      <option>Breakfast Only</option>
                      <option>Breakfast and lunch</option>
                      <option>Full Board</option>
                      <option>Half Board</option>
                  </select>
              </div>

              <!--  -->

              <div class="form-group">
                <input name="cin" class="form-control form-control-lg" type="date" placeholder="Check-in Date">
              </div>

              <!--  -->

              <div class="form-group">
                <input name="cout" class="form-control form-control-lg" type="date" placeholder="Check-out Date">
              </div>

              <!--  -->

              <div class="form-group">
                <div class="form-group">
                <strong><h2 style="padding-left:180px;">Human Verification</h2></strong>
                </div>
                <h4>Type Below this code : <?php
                $Random_code = rand();
                echo $Random_code;
                ?> </h5>
                <h5>Enter the random code : <br/></h6>
                <input class="form-control form-control-lg" type="text" name="code1" title="random code" />
                <input class="form-control form-control-lg" type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                <br>
                <input  type="submit" name="submit" class="btn btn-dark">

                <?php if (isset($_POST["submit"])) 
                {
                    $code1 = $_POST["code1"];
                    $code = $_POST["code"];
                    if ($code1 != "$code") 
                    {
                        $msg = "Invalide code";
                    } else 
                    {
                        $con = mysqli_connect("localhost","root","","parkinn");
                        $check = "SELECT * FROM customerinfo WHERE emailid = '$_POST[email]'";
                        $rs = mysqli_query($con, $check);
                        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                        if ($data[0] > 1) 
                        {
                            echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                        } else 
                        {
                            $new = "Not Confirm";
                            $newUser = "INSERT INTO `customerinfo`(`title`, `fname`, `lname`, `emailid`, `nationality`, `country`, `phonenumber`, `roomtype`, `bedtype`, `roomnos`, `mealtype`, `checkindate`, `checkoutdate`,`status`,`days`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                            if (mysqli_query($con, $newUser)) 
                            {
                                echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                            } else 
                            {
                                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                            }
                        }

                    $msg = "Your code is correct";
                }
                } ?>
            </div>          
        </form>
      </div>
    </div>

</body>

</html>