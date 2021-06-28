<?php
	
	include_once("db.php");
	
	$sql = "INSERT INTO movies(id,title,year,actor,actress,director,music_director,writer,prediction) VALUES ('$_POST[id]', '$_POST[title]', '$_POST[year]', '$_POST[actor]', '$_POST[actress]', '$_POST[director]', '$_POST[music_director]', '$_POST[writer]', '$_POST[prediction]')";

	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('1 Record added successfully !!!');</script>";
		echo "<script>window.location = 'amovie_pred.php';</script>";
	}
	mysqli_close($con);
?>