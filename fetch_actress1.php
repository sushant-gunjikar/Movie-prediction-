<?php

	$con=mysqli_connect("localhost","root","","msp");

	if(mysqli_connect_errno())
	{
		echo "failed";
		mysqli_connect_error();
	}
	
	$sql="select rating from actress where name='".$_GET['name']."'";
	$result=mysqli_query($con,$sql);
	
	$cnt=0;
	$branch="";
	while($res=mysqli_fetch_array($result))
	{
			$branch[$cnt]=$res[0];
			$cnt=$cnt+1;
	}
	
	echo json_encode($branch);
?>