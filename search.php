<?php
	include "koneksiDB.php";
	include "check_session.php";
	include "lib/library.php";

	//bikin koneksi
	$conn = createConnection("localhost","root", "", "data_sprl");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SPR Langgak</title>

		<!--override css-->
		<link rel="stylesheet" type="text/css" href="style2.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Main Menu</h1>      
    <p>Welcome Mrs. Reggy</p>
  </div>   
</div>

<div class="container">
	<form method="post" action="search_results.php">
		<?php
			echo createInputField("text", "Search:", "search", "search", "", "", false, "");
		?>
		<div class="form-group">
	  		<label for='filter'>Filter:</label>
		  	<select class='form-control' id='filter' name='filter'>
		  		<option value="Nama_Lengkap">Nama</option>
		  		<option value="NIK">NIK</option>
			</select>
		</div>
		<input class="btn btn-primary" type="submit" value="Search">
	</form>
</div>	

	</body>
</html>