<?php
	//include library
	include "lib/library.php";

	//ambil parameter
	$Status=$_POST["Status"];
	$Kelas_Upah=$_POST["Kelas_Upah"];
	$Golongan=$_POST["Golongan"];
	$Lokasi=$_POST["Lokasi"];
	
	
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
	$count = getResults("SELECT * FROM status", $conn)->num_rows;

	//kalau ada update, kalau ga ada insert
	//if($count==0){
		$sql = "INSERT INTO status (Status, Kelas_Upah, Golongan, Lokasi)
	VALUES ('$Status', '$Kelas_Upah', '$Golongan', '$Lokasi')";
	//}
	//else{
		//$sql = "UPDATE status SET Status='$Status', Kelas_Upah='$Kelas_Upah', Golongan='$Golongan', Lokasi='$Lokasi' WHERE No='$No'";
	//}

	execCud($sql, $conn, "step2.php");
	
	$conn->close();
?>