<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=" Buy property in uganda,sell assets rent out property whatever you want we have got it in uganda be it cars,land,houses">
    <title>Marketplace | Houses cars land to buy in mbarara.search and settle once</title>
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
				<li><a class="navbar-brand" href="index.php">SBAssets</a></li>
			</div>

			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.html">Home</a></li>
          <li  class="active"><a href="marketplace.html">On MarketNow</a></li>
          <li><a href="selling.html">Sell Asset</a></li>
          <li><a href="rent.html">Rent Property</a></li>
        <li><a href="contact.html">Contact Us</a></li>

      </ul>
		  </div>
		</div>
	</header>

	<section class="section-showcase container">
		<div class="container showcase-content">
		<h3>Taketime to explore what is on sale<h3>
      <p>Find your Dream Assest </p>
      <h3 class="lead">GoodLuck</h3>

		</div>
	</section>

			</div>
		</div>
	</section>

	<section class="marketplace">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="cars ">
<button class="btn btn-success">Cars and other Vehicles</button>

<?php

include 'admin/connect.php';

$query="SELECT * FROM `vehicles` ORDER BY `vehicle_id` DESC ";
$result=mysqli_query($db,$query);

while ($row=mysqli_fetch_array($result)){
echo "<img class=\"img img-responsive\"  alt=\"A car for sale\" width=\"300\" height=\"200\" src='admin/images/".$row['vehicle_image']."'>";
echo "<p>".$row['vehicle_description']."</p>";

echo "<br>";
echo     "<mark> This item was posted on ".$row['posted_on']."</mark>";
echo "<br>";
  echo " <a href=\".\contact.html\">Contact us for more information </a>";

echo "<hr>";




// class=\"img-responsive\"alt=\"brandnew toyota car\"/>";



}

?>
		</div>
				</div>


				<div class="col-md-6">
          <div class="houses">
            <button class="btn btn-success">Houses and apartments</button>

            <?php

           include 'admin/connect.php';

            $query="SELECT * FROM `houses` ORDER BY `house_id` DESC ";
            $result=mysqli_query($db,$query);

            while ($row=mysqli_fetch_array($result)){
            echo "<img class=\"img img-responsive\"  alt=\"A car for sale\" width=\"300\" height=\"200\" src='admin/images/".$row['house_image']."'>";
            echo "<p>".$row['house_description']."</p>";


            echo "<br>";
            echo     "<mark> This item was posted on ".$row['posted_on']."</mark>";
            echo "<br>";
  echo " <a href=\".\contact.html\">Contact us for more information </a>";

            echo "<hr>";




            // class=\"img-responsive\"alt=\"brandnew toyota car\"/>";



            }

            ?>




					</div>
				</div>
      </div>

    <hr>









    <div class="row">
      <div class="col-md-6">
        <div class="land ">


          <button class="btn btn-success">Land and firms</button>

          <?php

         include 'admin/connect.php';

          $query="SELECT * FROM `land` ORDER BY `land_id` DESC";
          $result=mysqli_query($db,$query);

          while ($row=mysqli_fetch_array($result)){
          echo "<img class=\"img img-responsive\"  alt=\"A car for sale\" width=\"300\" height=\"200\" src='admin/images/".$row['land_image']."'>";
          echo "<p>".$row['land_description']."</p>";


          echo "<br>";
          echo     "<mark> This item was posted on ".$row['posted_on']."</mark>";
          echo "<br>";
        echo " <a href=\".\contact.html\">Contact us for more information </a>";

          echo "<hr>";




          // class=\"img-responsive\"alt=\"brandnew toyota car\"/>";



          }

          ?>

        </div>
      </div>
      <div class="col-md-6">
        <div class="Laptops">







          <button class="btn btn-success">devices and other Machines</button>

          <?php

         include 'admin/connect.php';

          $query="SELECT * FROM `devices`  ORDER BY `device_id` DESC";
          $result=mysqli_query($db,$query);

          while ($row=mysqli_fetch_array($result)){
            echo "<h4 class=\"bg-danger text-center\">".$row['device_name']."</h4>";
          echo "<img class=\"img img-responsive\"  alt=\"A car for sale\" width=\"300\" height=\"200\" src='admin/images/".$row['device_image']."'>";
          echo "<p>".$row['device_description']."</p>";


          echo "<br>";
          echo     "<mark> This item was posted on ".$row['posted_on']."</mark>";
          echo "<br>";
        echo " <a href=\".\contact.html\">Contact us for more information </a>";

          echo "<hr>";




          // class=\"img-responsive\"alt=\"brandnew toyota car\"/>";



          }

          ?>

        </div>
      </div>
    </div>
    </div>

	</section>


  	<footer class="footer-main">
  		<div class="container">
  			<div class="row">

  				<div class="col-md-6">

  					<ul><h4>About</h4>
  					<li><a href="index.html">What is SBAssets?</a></li>
  						<li><a href="addvertise.html">Advertise With Us</a></li>

  					</ul>
  				</div>
  				<div class="col-md-6">

  					<ul><h4>Support</h4>
  						<li><a href="community.html">Our Community</a></li>
  						<li><a href="contact.html">Contact Us</a></li>
  					</ul>
  				</div>
  			</div>
  		</div>
      <div class="row">
        <div class="col-md-5 col-sm-6 col-xs-5">
        </div>
          <div class="col-md-7 col-sm-6 col-xs-7">
  <a href="https://www.facebook.com/SBAssets-Mbarara-1855453564702152/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
  <i class="fa fa-twitter" aria-hidden="true"></i>
  <i class="fa fa-instagram" aria-hidden="true"></i>
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
