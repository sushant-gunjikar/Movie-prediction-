<?php
//session_start();

$con=mysqli_connect("localhost","root","","msp");

if(mysqli_connect_errno())
{
	echo "failed";
	mysqli_connect_error();
}

?>