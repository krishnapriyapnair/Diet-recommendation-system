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
	  <a href='index1.php'>Back</a>
     <form action="result.php" method="POST" enctype="multipart/form-data">
     <div id="t1">
	Age :<br> <input type="text" name="age"  required id="ip1" ><br>
	Height : <input type="text" name="height"  required id="ip1" ><br>
	Weight : <input type="text" name="weight"  required id="ip1" ><br>
	Choice : <select name='choice' id='ip1'>
	<option value='Healthy'>Healthy</option>
	<option value='Weight Loss'>Weight Loss</option>
	<option value='Weight Gain'>Weight Gain</option>
	</select><br>
	Food Type : <select name='food_type' id='ip1'>
	<option value='1'>Veg</option>
	<option value='0'>Non-Veg</option>
	</select>
	<br>
 
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