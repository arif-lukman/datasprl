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
    <li><a href="step1.php">Step1</a></li>
    <li><a href="step2.php">Step2</a></li>
    <li><a href="step3.php">Step3</a></li>
    <li class="active"><a href="step4.php">Step4</a></li>
	<li><a href="step5.php">Step5</a></li>
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
 <form action="step4action.php" method="post">
				<h1>Jenis Kelamin - PSIA</h1>
				<hr>
					 <div class="well well-lg">
					 
				<div class="form-group">
					<tr><td><strong>Jenis Kelamin</strong></td><td> :
					<br>
					<input type=radio name='Jenis_Kelamin' id='Jenis_Kelamin' value='L'>Laki-Laki
					<input type=radio name='Jenis_Kelamin' id='Jenis_Kelamin' value='P'>Perempuan</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
					<tr><td><strong>Status Kawin</strong></td><td> :
					<br>
					<input type=radio name='Status_Kawin' id='Status_Kawin' value='B'>Belum
					<input type=radio name='Status_Kawin' id='Status_Kawin' value='K'>Kawin <br>
					<input type=radio name='Status_Kawin' id='Status_Kawin' value='J'>Janda
					<input type=radio name='Status_Kawin' id='Status_Kawin' value='D'>Duda</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
					<tr><td><strong>Kewarganegaraan</strong></td><td> :
					<br>
					<input type=radio name='Kewarganegaraan' id='Kewarganegaraan' value='WNI'>WNI
					<input type=radio name='Kewarganegaraan' id='Kewarganegaraan' value='WNA'>WNA</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
			  		<?php
					echo createInputField("text", "Agama", "Agama", "Agama", ""); 
					?>
				</div>
				<div class="form-group">
					<tr><td><strong>PSIA</strong></td><td> :
					<br>
					<input type=radio name='PSIA' id='PSIA' value='P'>P 
					<input type=radio name='PSIA' id='PSIA' value='S'>S 
					<input type=radio name='PSIA' id='PSIA' value='I'>I 
					<input type=radio name='PSIA' id='PSIA' value='A'>A 
					<input type=radio name='PSIA' id='PSIA' value='T'>T</td></tr>
					<?php 'mysql_query'; ?>
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
