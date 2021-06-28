<?php

	include_once("db.php");
	session_start();
	
	
	$sql = "update actress set  name='".$_POST['name']."', movies='".$_POST['movies']."', hit_movies='".$_POST['hits']."', flop_movies='".$_POST['flops']."', rating='".$_POST['rating']."' where id='".$_POST['id']."'";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('updated successfully!!!');</script>";
		echo "<script>window.location = 'upd_aactress.php';</script>";
	}
	mysqli_close($con);
?>
