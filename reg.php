<?php
error_reporting(0);
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
     <h1><center>DITE CHART</center></h1><br>
     <form action="insert.php" method="POST" enctype="multipart/form-data">
     <div id="t1">
	 Name : <input type="text" name="name"  required id="ip1" ><br>
	 Email : <input type="email" name="email"  required id="ip1" ><br>
    User Name : <input type="text" name="username"  required id="ip1" ><br>
	Password : <input type="password" name="password"  required id="ip1" ><br>
 
     </div>
     <div class="text-center"><input type="Submit" name="Submit" value="Submit" style="height: 40px; width: 250px" id="p1"></div><br>
   </form>
  <form>
     <div class="text-center"><input type="Submit" value="Login" formaction="index.php"style="height: 40px; width: 250px" id="p2"></div><br>
    </form>
   </div>
   </div>
   </div>
   </div>
   </div>
</body>
</html>