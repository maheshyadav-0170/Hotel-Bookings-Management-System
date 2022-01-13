<?php
    include ('database.php');
    $id =$_GET['qid'];		
	$newsql ="DELETE FROM `customerpayment` WHERE `customerid` ='$id' ";
	if(mysqli_query($con,$newsql))
	{
		echo '<script>alert("Customer Payment Done")</script>';
	} 
	header("Location: home.php");
?>


