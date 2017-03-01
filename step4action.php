<?php
	$Jenis_Kelamin=$_POST["Jenis_Kelamin"];
	$Status_Kawin=$_POST["Status_Kawin"];
	$Kewarganegaraan=$_POST["Kewarganegaraan"];
	$Agama=$_POST["Agama"];
	$PSIA=$_POST["PSIA"];
	
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

	$sql = "INSERT INTO combobox(Jenis_Kelamin, Status_Kawin, Kewarganegaraan, Agama, PSIA)
	VALUES('$_POST[Jenis_Kelamin]', '$_POST[Status_Kawin]', '$_POST[Kewarganegaraan]', '$_POST[Agama]', '$_POST[PSIA]')";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step4.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>