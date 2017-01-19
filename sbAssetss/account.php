<?php

require 'auth/core.php';
require 'auth/connect.php';

if(loggedin())
{
	/*$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
	echo 'You\'re logged in, '.$firstname.' '.$surname.'.<br/>';
	echo '<a href="logout.php">Log Out</a>';

	*/
}
else
{
	header('Location:http://localhost/sbassetss/index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkyApp | Services</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
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
			  <a class="navbar-brand" href="#">SBAssets</a>
			</div>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.html">Account</a></li>
				<li><a href="about.html">update profile</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-sub pull-right">
				<li><a href="auth/logout.php">Logout</a></li>


			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
	</header>
	
	<section class="section-light top-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form class="form search">


<a href="chat.php" type="button" class="btn btn-success btn-block">chat with us</a>

					</form>

				</div>
				<div class="col-md-6">
					<form class="search">
						<div>
							<input type="search" placeholder="Search Our Website & Products">
							<button type="submit" value=""><img src="img/search.png" alt="Search"></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

    <div class="container-fluid posts">
        <div class="row">
            <div class="col-md-3">
                <h1>Vehicles</h1>
                <h3>A Hammer car</h3>
                <p>This good car is up for grabs at affordable price</p>

                <h4 class="text-muted">posted on 21st january 2017</h4>


                </div>


            <div class="col-md-3">
                <h1> Land</h1>
            <h3>A 50000 by 70000 farm in Rwampala Mbarara</h3>
            <p>a nice farm in rwampala mbrarara uganda condusive environment</p>

            <h4 class="text-muted">posted on 21st janauary 2017</h4>

                <h3>A 50000 by 70000 farm in Rwampala Mbarara</h3>
                <p>a nice farm in rwampala mbrarara uganda condusive environment</p>

                <h4 class="text-muted">posted on 21st janauary 2017</h4>

                <h3>A 50000 by 70000 farm in Rwampala Mbarara</h3>
                <p>a nice farm in rwampala mbrarara uganda condusive environment</p>

                <h4 class="text-muted">posted on 21st janauary 2017</h4>

                <h3>A 50000 by 70000 farm in Rwampala Mbarara</h3>
                <p>a nice farm in rwampala mbrarara uganda condusive environment</p>

                <h4 class="text-muted">posted on 21st janauary 2017</h4>

                <h3>A 50000 by 70000 farm in Rwampala Mbarara</h3>
                <p>a nice farm in rwampala mbrarara uganda condusive environment</p>

                <h4 class="text-muted">posted on 21st janauary 2017</h4>

                <h3>A 50000 by 70000 farm in Rwampala Mbarara</h3>
                <p>a nice farm in rwampala mbrarara uganda condusive environment</p>

                <h4 class="text-muted">posted on 21st janauary 2017</h4>

                <h3>A 50000 by 70000 farm in Rwampala Mbarara</h3>
                <p>a nice farm in rwampala mbrarara uganda condusive environment</p>

                <h4 class="text-muted">posted on 21st janauary 2017</h4>

        </div>


            <div class="col-md-3">
                <h1>Houses</h1>
                <h3>A nice house</h3>
                <p>a fully furnished house up for grabs in kamukuzi mbarara</p>

                <h4 class="text-muted">posted on 21st fenruary 2017</h4>

                <h3>A nice house</h3>
                <p>a fully furnished house up for grabs in kamukuzi mbarara</p>

                <h4 class="text-muted">posted on 21st fenruary 2017</h4>

                <h3>A nice house</h3>
                <p>a fully furnished house up for grabs in kamukuzi mbarara</p>

                <h4 class="text-muted">posted on 21st fenruary 2017</h4>
                <h3>A nice house</h3>
                <p>a fully furnished house up for grabs in kamukuzi mbarara</p>

                <h4 class="text-muted">posted on 21st fenruary 2017</h4>

            </div>
            <div class="col-md-3">
                <h1>Others</h1>
                <h3>A nice Laptop</h3>
                <p>A brand new Macbook up for grabs</p>

                <h4 class="text-muted">posted on 21st february 2017</h4>


                <h3>A nice Laptop</h3>
                <p>A brand new Macbook up for grabs</p>

                <h4 class="text-muted">posted on 21st february 2017</h4>

            </div>



        </div>


    </div>

	<footer class="footer-main">
		<div class="container">
			<div class="row">

				<div class="col-md-6">

					<ul><h4>About</h4>
						<li><a href="#">What is SBAssets?</a></li>
						<li><a href="#">View Our Clients</a></li>
						<li><a href="#">Advertise With Us</a></li>
						<li><a href="#">Work for us</a></li>
					</ul>
				</div>
				<div class="col-md-6">

					<ul><h4>Support</h4>
						<li><a href="#">Support Home</a></li>
						<li><a href="#">Our Community</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
  </body>
</html>
