<?php
session_start();
$con=mysqli_connect("localhost","root","","dite");


	$sql="INSERT INTO reg(name,email,username,password) VALUE ('$_POST[name]','$_POST[email]','$_POST[username]','$_POST[password]')";
	
	if(mysqli_query($con,$sql))
	{
	header("location:index.php?a=3");
		
	}
	else{
		
		header("location:index.php?a=2");
		
	}
	











?>
 
 



