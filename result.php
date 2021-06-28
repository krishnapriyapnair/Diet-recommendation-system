<?php

set_time_limit(0);
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
  <div class="col-sm-8" style="margin-top:100px !important; background:#ffffff;margin-left:450px">
     <h1><center>DITE CHART</center></h1><br>
	  <a href='index1.php'>Back</a>
     <?php
	 
	 
$myFile = "age.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST['age'];
fwrite($fh, $stringData);
fclose($fh);

 
$myFile = "weight.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST['weight'];
fwrite($fh, $stringData);
fclose($fh);
 
$myFile = "height.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST['height'];
fwrite($fh, $stringData);
fclose($fh);
 
$myFile = "choice.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST['choice'];
fwrite($fh, $stringData);
fclose($fh);

$myFile = "veg_nonveg.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST['food_type'];
fwrite($fh, $stringData);
fclose($fh);

	 	 
	echo "<h3>OUTPUT</h3><hr>";
$python = `python pgm.py`;
echo "<pre>".$python."</pre>";
 
	 
	 
	 ?>
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