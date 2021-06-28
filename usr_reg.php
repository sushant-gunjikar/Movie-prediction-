<?php
	include_once("db.php");
	session_start();
	$sql="insert into user_registration(id,name,address,email,password,mobile) values('".$_POST['uid']."', '".$_POST['uname']."', '".$_POST['uaddress']."', '".$_POST['uemail']."', '".$_POST['upassword']."', '".$_POST['umobile']."')";
	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Registation successful!');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
?>