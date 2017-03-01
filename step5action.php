<?php
	$Nama_Anggota_Keluarga=$_POST["Nama_Anggota_Keluarga"];
	$No_KK_Keluarga=$_POST["No_KK_Keluarga"];
	$NIK_Keluarga=$_POST["NIK_Keluarga"];
	$NPWP_Keluarga=$_POST["NPWP_Keluarga"];
	$Jamsostek_Keluarga=$_POST["Jamsostek_Keluarga"];
	
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

	$sql = "INSERT INTO pribadi(Nama_Anggota_Keluarga, No_KK_Keluarga, NIK_Keluarga, NPWP_Keluarga, Jamsostek_Keluarga)
	VALUES('$_POST[Nama_Anggota_Keluarga]', '$_POST[No_KK_Keluarga]', '$_POST[NIK_Keluarga]', '$_POST[NPWP_Keluarga]', '$_POST[Jamsostek_Keluarga]')";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step5.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>