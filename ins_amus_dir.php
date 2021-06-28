<?php
	
	include_once("db.php");
	
	include_once("db.php");
	
	$image1 = $_FILES['exampleInputFile']['name'];
	$tmp1 = $_FILES['exampleInputFile']['tmp_name'];
	
	$pathAndName = "uploads/".$image1;
	if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1))
	{
		move_uploaded_file($tmp1,$pathAndName);
	}
	else
	{
		$pathAndName="";
	}
	
	$sql = "INSERT INTO music_director(pics,id,name,movies,hit_movies,flop_movies,rating) VALUES ('".$pathAndName."', '$_POST[id]', '$_POST[name]', '$_POST[movies]', '$_POST[hits]', '$_POST[flops]', '$_POST[rating]')";

	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('1 Record added successfully !!!');</script>";
		echo "<script>window.location = 'amus_dir.php';</script>";
	}
	mysqli_close($con);
?>