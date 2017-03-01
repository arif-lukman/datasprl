<?php
	include "check_session.php";
	include "lib/library.php";

	//bikin koneksi
	$conn = createConnection("localhost","root", "", "data_sprl");

	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM utama", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT NIK as _id, Nama_Lengkap, Jabatan, Departemen, Join_Date FROM utama ORDER BY NIK ASC", $conn);

	//push isi field ke array
	$allValues = pushArray($fieldValues);
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
	<h3>Master Data Karyawan</h3><hr>
		<?php
			generateTable($fieldNames, $fieldValues, $allValues, "step1.php", true);
		?>
	</body>
</html>