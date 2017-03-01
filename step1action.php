<?php
	//include library
	include "lib/library.php";

	//ambil parameter
	$NPP=$_POST["NPP"];
	$Nama_Lengkap=$_POST["Nama_Lengkap"];
	$Jabatan=$_POST["Jabatan"];
	$Departemen=$_POST["Departemen"];
	$Join_Date=$_POST["Join_Date"];
	
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
	$count = getResults("SELECT * FROM utama", $conn)->num_rows;

	//kalau ada update, kalau ga ada insert
	//if($count==0){
		$sql = "INSERT INTO utama (NPP, Nama_Lengkap, Jabatan, Departemen, Join_Date)
	VALUES ('$NPP', '$Nama_Lengkap', '$Jabatan', '$Departemen', '$Join_Date')";
	//}
	//else{
	//	$sql = "UPDATE utama SET NPP='$NPP', Nama_Lengkap='$Nama_Lengkap', Jabatan='$Jabatan', Departemen='$Departemen', Join_Date='$Join_Date' WHERE No='$No'";
	//}

	execCud($sql, $conn, "step1.php");
	
	$conn->close();
?>