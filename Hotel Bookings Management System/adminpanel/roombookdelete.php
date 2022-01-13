<?php
    include ('database.php');
    $id =$_GET['sid'];		
	$newsql ="DELETE FROM `customerinfo` WHERE `customerid` ='$id' ";
	if(mysqli_query($con,$newsql))
	{
		echo '<script>alert("Customer Details Deleted")</script>';
	} 
	header("Location: home.php");
?>


