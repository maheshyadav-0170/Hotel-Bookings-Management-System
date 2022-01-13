<?php
    include ('database.php');
    $id =$_GET['eid'];		
	$newsql ="DELETE FROM `adminlogin` WHERE adminid ='$id' ";
	if(mysqli_query($con,$newsql))
	{
		echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
	}
	header("Location: usersetting.php");
?>


