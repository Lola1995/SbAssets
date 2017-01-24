<?php

include 'connect.php';
include 'core.php';

if(loggedin()){
	die("you are already logged in ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SbAssets | Buy assets,sell assets whatever you want we have got it</title>
	<!-- Bootstrap core CSS -->
	<link href="..//css/bootstrap.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="..//css/font-awesome.css" rel="stylesheet">
	<link href="..//css/main.css" rel="stylesheet">
</head>

<body>
<header class="header-main">
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<li><a class="navbar-brand" href="index.html">SBAssets</a></li>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="Login.php">Sign In</a></li>
				</ul>

			</div><!--/.nav-collapse -->
		</div>
	</div>
</header>

<div class="section-showcase container">
	<div class="container showcase-content">
    <form class="form" method="post" action="loginn.php" autocomplete="off">
      <div class="form-group">
      <p>Username</p>
        </div>
				<div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required autocomplete="off">
      </div>
      <div class="form-group">
    <p>Password</p>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Log In"/>

    </form>
	</div>
</div>
</div>
</div>
</section>

<section>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>
