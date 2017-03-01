<?php
	include "lib/library.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>NPP - Join Date</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <nav class="col-sm-3">
<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
    <li class="active"><a href="step1.php">Step1</a></li>
    <li><a href="step2.php">Step2</a></li>
    <li><a href="step3.php">Step3</a></li>
    <li><a href="step4.php">Step4</a></li>
	<li><a href="#">Step5</a></li>
	<li><a href="#">Step6</a></li>
	<li><a href="#">Step7</a></li>
	<li><a href="#">Step8</a></li>
	<li><a href="#">Step9</a></li>
	<li><a href="#">Step10</a></li>
	<li><a href="#">Step11</a></li>
	<li><a href="#">Step12</a></li>
	<li><a href="#">Step13</a></li>
	<li><a href="#">Step14</a></li>
	<li><a href="main_menu.php">Home</a></li>
  </ul>
</nav>

<div class="col-sm-9">
 <form action="step1action.php" method="post">
				<h1>NPP - Join Date</h1>
				<hr>
					 <div class="well well-lg">
				
				<div class="col-xs-6">
			  		<?php
					echo createInputField("text", "NPP", "NPP", "NPP", ""); 
					?>
				</div>
				
				<div class="col-xs-6">
			  		<?php
					echo createInputField("text", "Nama Lengkap", "Nama_Lengkap", "Nama_Lengkap", ""); 
					?>
				</div>
				
				 <div class="col-xs-6">
					<?php
					echo createInputField("text", "Jabatan", "Jabatan", "Jabatan", ""); 
					?>
					</div>
				
				<div class="col-xs-6">
					<?php
					echo createInputField("text", "Departemen", "Departemen", "Departemen", ""); 
					?>
					</div>
	
				<div class="col-xs-6">
					<?php
					echo createInputField("date", "Join Date", "Join_Date", "Join_Date", ""); 
					?>
					</div>
				
<br><br><br><br><br><br><br><br><br><br><br><br><br>				
<center><button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-primary">Reset</button></center>
<hr>

  
			</form>
</div>
</div>
</div>
</body>
</html>
