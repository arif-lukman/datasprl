<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>
</head>
<body>

<div class="container-fluid" style="background-color:#3224ba;color:#fff;height:200px;">
  <h1>WELCOME</h1>
  <h3>Please fill blank below</h3>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    <li class="active"><a href="step1.php">Step1</a></li>
    <li><a href="step2.php">Step2</a></li>
    <li><a href="#">Step3</a></li>
    <li><a href="#">Step4</a></li>
	<li><a href="#">Step5</a></li>
	<li><a href="#">Step6</a></li>
	<li><a href="#">Step7</a></li>
	<li><a href="#">Step8</a></li>
	<li><a href="#">Step9</a></li>
	<li><a href="#">Step10</a></li>
	<li><a href="#">Step11</a></li>
	<li><a href="#">Step12</a></li>
	<li><a href="#">Step13</a></li>
	<li><a href="#">Step14</a></li>
  </ul>
</nav>

<div class="container-fluid" style="height:1000px">
  <h1>Step1</h1>

</div>

</body>
</html>
