<?php
	include "koneksiDB.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysql_query("select * from login where username='$username' and password='$password'");
	$count = mysql_num_rows($query);
	$row = mysql_fetch_array($query);

	if($count == 1){
		if(!isset($_SESSION)){
			session_start();
			$_SESSION['uid'] = $row['id'];
		}
		header ("location:main_menu.php");
	}
	else{
		echo "<script> alert('Anda bukan Administrator database ini');
		location='index.php';
		</script>";
	}
?>