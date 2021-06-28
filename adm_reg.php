<?php
	
	include_once("db.php");
	session_start();
	
	$sql = "INSERT INTO admin_registration(id,name,address,email,password,mobile) VALUES ('$_POST[aid]', '$_POST[aname]', '$_POST[aaddress]', '$_POST[aemail]', '$_POST[apassword]', '$_POST[amobile]')";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
		//die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('Registered successfully !!!');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
	mysqli_close($con);
?>