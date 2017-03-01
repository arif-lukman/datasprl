<?php
	include "lib/library.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
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
    <li class="active"><a href="step2.php">Step2</a></li>
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
 <form action="step2action.php" method="post">
				<h1>Status - Lokasi</h1>
				<hr>
				<div class="well well-lg">
				
				<div class="col-xs-6">
				<label for="Status" name="Status">Status:</label>
				<select class="form-control" id="Status" name="Status">
				<option>-Pilih-</option>
				<?php
				mysql_connect("localhost", "root", "");
				mysql_select_db("data_sprl");
				$sql = mysql_query("SELECT * FROM _jenis ORDER BY nama ASC");
				if(mysql_num_rows($sql) != 0){
					while($data = mysql_fetch_assoc($sql)){
					echo '<option>'.$data['nama'].'</option>';
				}
				}
				?>
				</select>
				</div>
				
				 <div class="col-xs-6">
					<?php
					echo createInputField("text", "Kelas Upah", "Kelas_Upah", "Kelas_Upah", ""); 
					?>
					</div>
				
				<div class="col-xs-6">
					<?php
					echo createInputField("text", "Golongan", "Golongan", "Golongan", ""); 
					?>
					</div>
	
				<div class="col-xs-6">
					<?php
					echo createInputField("text", "Lokasi", "Lokasi", "Lokasi", ""); 
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
