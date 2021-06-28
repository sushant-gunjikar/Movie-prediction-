<?php
	include_once("db.php");
	session_start();
	
	$sql="select * from user_registration where email='".$_POST['uemail']."' and password='".$_POST['upassword']."' ";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) ==1 )
	{
		$_SESSION['SESS'] = $_POST['uemail'];
		echo "<script>window.location = 'user_dashboard.php';</script>";
	}
	else
	{
		echo "<script>alert('Invalid Details');</script>";
		echo "<script>window.location = 'index.html';</script>";
		
	}
	mysqli_close($con);
?>

	