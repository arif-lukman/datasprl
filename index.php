<?php
	//Hapus session
	if(isset($_SESSION)){
		unset($_SESSION['uid']);
		session_unset();
		session_destroy();
	}
?>

<!doctype html>
<html>
	<head>
		<title>SPR Langgak</title>

		<!--override css-->
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<style>
		p.putih{
			color: white;
		}
		</style>
	</head>

	<body>
		<!--header-->

				<div class="text-center motto">
				<p class="putih">You can login if you are really administrator this data</p>
			</div>


		<!--form login-->

			<div class="col-sm-3"></div>
			<form action="login.php" method="post" class="col-sm-8">
			<br><br><br><br><br><br><br><br>

				<h2>Administrator</h2>
				<br><br>
				<div class="col-sm-4">
					<label for="name">Username:</label>
					<input type="text" class="form-control" id="name" name="username">
				</div>
				<div class="col-sm-4">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password">
				</div>
				<br><br><br><br><br><br>
				<div class="col-sm-4">
				<input class="btn btn-primary" type="submit" value="LOGIN">
				</div>

			</form>

	</body>
</html>