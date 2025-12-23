<?php
$con = mysqli_connect("localhost","root","","test");

if(mysqli_connect_error())
{
	echo "Cannot connect to db";
	exit();
}
?>