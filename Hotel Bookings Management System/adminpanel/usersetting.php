<?php  
    session_start();  
    if(!isset($_SESSION["user"]))
    {
        header("location:index.php");
    }
    ob_start();
?> 

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
        <h1 style="color: #30475E;">Admin Accounts</h1>
      </div>
    </div>

    <div class="Section3">
      <div>
        <br>
        <input type="submit" class="btn btn-outline-dark btn-lg btn-block" href="settings.php" value="User Dashboard">
      </div>
    </div>

    <?php
        include ('database.php');
        $sql = "SELECT * FROM `adminlogin`";
		$re = mysqli_query($con,$sql)
	?>

    <div class="Section3">
      <div>
        <br><br>
        <h5 style="color: #30475E;" >List of Admins</h5>
        <hr>
      </div>
      <div>
          <div class="Section8">
          <table style="font-size:1rem; padding-bottom:50px; margin-bottom:50px;" class="table table-striped table-bordered" >
              <thead>
                  <th>Admin Id</th>
                  <th>Admin Username</th>
                  <th>Admin Password</th>
                  <th>Delete</th>
                </thead>

                <tbody>
                    <?php
					while($row = mysqli_fetch_array($re))
					{
						$id = $row['adminid'];
						$us = $row['adminusername'];
						$ps = $row['adminpassword'];
							echo"<tr class='gradeC'>
								<td>".$id."</td>
								<td>".$us."</td>
								<td>".$ps."</td>
								<td><a href=usersettingdel.php?eid=".$id ." <button class='btn btn-dark'> <i class='fa fa-edit' ></i> Delete</button></td>
								</tr>";
                    }
                    ?>
                </tbody>
        </table>
    </div>
        
    <hr>
    <div class="Section3">
      <div>
        <br>
        <h1 style="color: #9D9D9D;">Add New Admin</h1>
      </div>
    </div> 

    <div class="Section4" style="width:50%; margin-left:25%;">
      <div class="Section5">
        <form action="" name="form" method="post">
          <div class="form-group">
                <input name="newus" class="form-control form-control-lg" type="text" placeholder=" New Admin Username">
          </div>
          <br>
          <div class="form-group">
                <input name="newps" class="form-control form-control-lg" type="password" placeholder=" New Admin Password">
          </div>
          <div>
              <input style="width=50px;" type="submit" name="in" value="Add" class="btn btn-small btn-dark">
          </div>
        </form>
      </div>
    </div>
	<?php
        if(isset($_POST['in']))
        {
            $newus = $_POST['newus'];
            $newps = $_POST['newps'];
            $newsql ="Insert into adminlogin (adminusername,adminpassword) values ('$newus','$newps')";
            if(mysqli_query($con,$newsql))
            {
            echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
            }
            header("Location: usersetting.php");
        }
	?>
    </body>
</html>
