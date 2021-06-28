<?php
session_start();
$con=mysqli_connect("localhost","root","","dite");
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

	$sqlss=mysqli_query($con,"SELECT * FROM reg WHERE username='$myusername' and password='$mypassword'");
	//echo "SELECT * FROM reg WHERE username='$myusername' and password='$mypassword'";
	$cc=mysqli_num_rows($sqlss);
	$row=mysqli_fetch_array($sqlss);
	if($cc==1)
	{
		$_SESSION['id']=$row['id'];		
		
	header("location:index1.php");
		
	}
	else{
		
		header("location:index.php?a=1");
		
	}
	











?>
 
 



