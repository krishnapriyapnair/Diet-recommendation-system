<?php
session_start();
$con=mysqli_connect("localhost","root","","dite");
if(isset($_POST['Submit']))
{
	mysqli_query($con,"UPDATE reg SET name='$_POST[name]',email='$_POST[email]',username='$_POST[username]',password='$_POST[password]' WHERE id='$_SESSION[id]'");
}

	$sqlss=mysqli_query($con,"SELECT * FROM reg WHERE id='$_SESSION[id]'");
	
	$row=mysqli_fetch_array($sqlss);
	
	?>
<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/log.css" rel="stylesheet">
</head>
<body>
  <div id="p3">
  <div class="container" id="id1">
  <div class="row-justify-content-center">
  <div class="col-sm-5" style="margin-top:10px !important;">
     <h1><center>DIET CHART</center></h1><br>
	 
	 <a href='index1.php'>Back</a>
     <form action="" method="POST" enctype="multipart/form-data">
     <div id="t1">
	 Name : <input type="text" name="name" value="<?php echo $row['name'];?>"  required id="ip1" ><br>
	 Email : <input type="email" name="email" value="<?php echo $row['email'];?>"  required id="ip1" ><br>
    User Name : <input type="text" name="username" value="<?php echo $row['username'];?>"  required id="ip1" ><br>
	Password : <input type="password" name="password" value="<?php echo $row['password'];?>"  required id="ip1" ><br>
 
     </div>
      <div class="text-center"><input type="Submit" name="Submit" value="Submit" style="height: 40px; width: 250px" class='btn btn-success'></div><br>
   </form>
  <form>
       <div class="text-center"><input type="Submit" value="Logout" formaction="index.php"style="height: 40px; width: 250px" class='btn btn-danger' ></div><br>
    </form>
   </div>
   </div>
   </div>
   </div>
   </div>
</body>
</html>