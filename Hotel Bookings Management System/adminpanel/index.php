<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
     header("location:home.php");  
 }  
?>

<!--  -->

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

    <title>Park Inn - Admin Panel </title>

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

  <!--  -->
    <div class="Section1" style="background-color:#DD4A48; margin-top:30px; margin-left:30px; margin-right:30px">
      <div>
        <a href="../index.php"><i class="fa fa-home"></i>Home</a>
      </div>
    </div>
<!--  -->
    <div>
    </div>
    <div class="Section2">
      <div>
        <br>
        <h1><i style="width:100px;" class="fad fa-user-shield"></i>Admin Login</h1>
      </div>
    </div>

    <div class="Section4">
      <div class="Section5" style="padding-top:30px;">
        <form action="" name="form" method="post">
          <div class="form-group">
                <input name="user" class="form-control form-control-lg" type="text" placeholder="Admin Username">
          </div>
          <div class="form-group">
                <input name="pass" class="form-control form-control-lg" type="password" placeholder="Admin Password">
          </div>
          <div class="form-group">
                <input   style="background-color: #DD4A48; color:#fff;"type="submit" name="sub" class="btn btn-light">
          </div>

      </div>
    </div>
</body>
</html>

<?php
   include('database.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $con = mysqli_connect("localhost","root","","parkinn");
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT adminid FROM adminlogin WHERE adminusername = '$myusername' and adminpassword = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location:home.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>




