<?php
	//include library
	include "lib/library.php";

	//ambil parameter
	$Tempat_Lahir=$_POST["Tempat_Lahir"];
	$Tanggal=$_POST["Tanggal"];

	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "data_sprl";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	//bikin koneksi ke db yang diperlukan
	$conn = createConnection("localhost", "root", "", "data_sprl");

	//ambil jumlah barisnya
	$count = getResults("SELECT * FROM tanggal_lahir", $conn)->num_rows;

	//kalau ada update, kalau ga ada insert
	//if($count==0){
		$sql = "INSERT INTO tanggal_lahir (Tempat_Lahir, Tanggal)
	VALUES ('$Tempat_Lahir', '$Tanggal')";
	//}
	//else{
		//$sql = "UPDATE status SET Status='$Status', Kelas_Upah='$Kelas_Upah', Golongan='$Golongan', Lokasi='$Lokasi' WHERE No='$No'";
	//}

	execCud($sql, $conn, "step3.php");
	
	$conn->close();
?>