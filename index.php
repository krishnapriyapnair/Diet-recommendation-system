<?php
error_reporting(0);
if($_REQUEST['a']=="1")
{
	echo"<script>alert('LOGIN FAILED!!!!!')</script>";
}
if($_REQUEST['a']=="2")
{
	echo"<script>alert('Registration Failed!!!!!')</script>";
}
if($_REQUEST['a']=="3")
{
	echo"<script>alert('Registration Successful !!!!!')</script>";
}
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
  <div class="col-sm-5">
     <h1><center>DIET CHART</center></h1><br>
     <form action="redirect.php" method="POST" enctype="multipart/form-data">
     <div id="t1">
    User Name : <input type="text" name="username"  required id="ip1" ><br><br>
	Password : <input type="password" name="password"  required id="ip1" ><br><br>
 
     </div>
     <div class="text-center"><input type="Submit" name="Submit" value="Submit" style="height: 40px; width: 250px" id="p1"></div><br>
   </form>
  <form>
     <div class="text-center"><input type="Submit" value="Are You New User" formaction="reg.php"style="height: 40px; width: 250px" id="p2"></div><br>
    </form>
   </div>
   </div>
   </div>
   </div>
   </div>
</body>
</html>