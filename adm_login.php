<?php

	include_once("db.php");
	session_start();

	$sql="select * from admin_registration where email='".$_POST['aemail']."' and password='".$_POST['apassword']."'";
	$result=mysqli_query($con,$sql); //true if Succedded
	$result1=mysqli_fetch_array($result);

	if(mysqli_num_rows($result) == 1) //Fetch atleast 1 row from db
	{
		$_SESSION['SESS'] = $_POST['aemail'];
		$_SESSION['SESS2'] = $result1[1];
		echo "<script>window.location = 'admin_dashboard.php';</script>"; //Login Successful
	}
	else
	{
		echo "<script>alert('Invalid Details');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
mysqli_close($con);
?>