<?php

	include_once("db.php");
	
	/*$image1 = $_FILES['exampleInputFile']['name']; 			
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

	$sql="select pics from actor where id='".$_POST['id']."'";
	$result=mysqli_fetch_array(mysqli_query($con,$sql));
	
	if($result[0]=="")
	{
		$pathAndName = $pathAndName;
	}
	else
	{
		if($pathAndName=="")
		{
			$pathAndName = $result[0];
		}
	else
		{
			$sql="select pics from actor where id='".$_SESSION['id']."'";
			$result=mysqli_fetch_array(mysqli_query($con,$sql));
			$pathAndName = $pathAndName;
			unlink($result[0]);
		}
	}*/
	
	$sql = "update director set name='".$_POST['name']."', movies='".$_POST['movies']."', hit_movies='".$_POST['hits']."', flop_movies='".$_POST['flops']."', rating='".$_POST['rating']."' where id='".$_POST['id']."'";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('updated successfully!!!');</script>";
		echo "<script>window.location = 'upd_adirector.php';</script>";
	}
	mysqli_close($con);
?>
