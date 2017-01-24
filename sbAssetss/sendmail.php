<?php

$feedback="";

$errors=array();

if(isset ($_POST['submit'])){
if(isset ($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['message'])){
$name=trim($_POST['name']);
$phone=trim($_POST['phone']);
$email=trim($_POST['email']);
$message=trim($_POST['message']);



if(empty($name)||empty($phone)||empty($email)||empty($message)){
  echo "all fiels are required boss";
}else{



$to="crycetruly@gmail.com";
$subject="Email from .$name. on Sbassets website";
$body=<<<EMAIL
$name with phone number $phone sent this:
$message



EMAIL;




$header="From:".$email;





if(mail($to,$subject,$body,$header)){


  $feedback="Thanks $name for contacting us we will get in touch with you shortly";
}
}

}else{

}
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SbAssets | Thanks for mailing us</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
  </head>
  <header class="header-main">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
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
        <li class="active"><a href="index.php">Home</a></li>
          <li><a href="marketplace.html">On MarketNow</a></li>
          <li><a href="selling.html">Sell Asset</a></li>
          <li><a href="rent.html">Rent Property</a></li>
        <li><a href="contact.html">Contact Us</a></li>

      </ul>

      </div>
    </div>
  </header>

  <body>
<div class="well well-lg feedback">
<?php

echo '<h1>' .$feedback.'</h1>';

 ?>


</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
