<?php
	include "koneksiDB.php";
	include "check_session.php";
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
<div class="well"><center><a class="left" href="step1.php" data-toggle="tooltip" title="You can create new data here">Create</a> </center></div>
<div class="well"><center><a class="right" href="edit.php" data-toggle="tooltip" title="Search and Modify some data">Search and Edit</a></center></div>
<div class="well"><center><a class="center" href="delete.php" data-toggle="tooltip" title="Delete data">Delete</a></center></div>
<div class="well"><center><a class="center" href="view.php" data-toggle="tooltip" title="View and download here">View</a></center></div>
<div class="well"><center><a class="center" href="logout.php" data-toggle="tooltip" title="Done?Please logout">Logout</a></center></div>
</div>	

	</body>
</html>