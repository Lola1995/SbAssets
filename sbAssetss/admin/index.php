<?php

error_reporting(0);
include 'core.php';

if(loggedin())
{
	$username = getuserfield('username');
}
else
{
	header('Location:login.php');
}

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


    <title>SbAssets | Add new Property/asset</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/font-awesome.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">

</head>
<header class="header-main">
  <div class="navbar navbar-inverse" role="navigation">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <li><a class="navbar-brand" href="../index.html">SBAssets</a></li>
    </div>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="../marketplace.php">Marketplace home</a></li>

                <li><a href="#" data-toggle="modal" data-target="#popUpWindow">Add Vehicle</a></li>
                <li><a href="#" data-toggle="modal" data-target="#addhouse">Add Houses</a></li>
                <li><a href="#" data-toggle="modal" data-target="#addland">Add Land</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#devices">Add a device</a></li>


    </ul>
    <!--right align -->
    <ul class="nav navbar-nav navbar-right">
  <li>
<?php echo '<a href="logout.php">Log Out</a>'.$username;?>
    </li>
    </ul>
    </ul>
    </div>
  </div>
</header>




<!--adding a vehicle-->

<div class="modal fade" id="popUpWindow">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- header -->
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h3 class="modal-title lead">Add vehicle</h3>
               </div>

               <!-- body (form) -->
               <div class="modal-body">
                     <form action="?"  method="POST" enctype="multipart/form-data" role="form">
                       <div class="form-group">
                          <label class="text-primary">Enter vehicle name</label>
                         <input type="text" class="form-control" name= "vehicle" placeholder="Vehicle Name" required>
                       </div>

                       <div class="form-group">
                         <label class="text-primary">Add an image</label>
                           <input type="file" class="form-control btn btn-default"name="image" required>
                       </div>

                         <label class="text-primary">Add a description</label>
                       <div class="form-group">
                           <textarea class="form-control" type="text" name="description" required>Add Description</textarea>
                       </div>



               <!-- button -->
               <div class="modal-footer">
                 <input type="submit" value="submit" name="submit" class="btn btn-primary"/>
               </div>
                  </form>
                   </div>

           </div>
</div>

</div>



<!--adding a house-->




<div class="modal fade" id="addhouse">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- header -->
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h3 class="modal-title">Add House</h3>
               </div>

               <!-- body (form) -->
               <div class="modal-body">
                   <form role="form" action="?" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                         <label>Add an image</label>
                           <input type="file" class="form-control" name="image"required>
                       </div>

                         <label>Add a house description</label>
                       <div class="form-group">
                           <input type="text" class="form-control" name="description" placeholder="Add Description" required>
                       </div>

               </div>

               <!-- button -->
               <div class="modal-footer">
                    <input type="submit" value="submit" name="submithouse" class="btn btn-primary"/>
               </div>
            </form>
           </div>
</div>

</div>

<!--adding land-->




<div class="modal fade" id="addland">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- header -->
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h3 class="modal-title">Add Land details</h3>
               </div>

               <!-- body (form) -->
               <div class="modal-body">
                  <form role="form" action="addland.php" method="post" enctype="multipart/form-data">

                       <div class="form-group">
                         <label>Add an image</label>
                           <input type="file" class="form-control" name="image">
                       </div>

                         <label>Add  Land  description</label>
                       <div class="form-group">
                           <input type="text" name="description" class="form-control" placeholder="Add Description">
                       </div>

               </div>

               <!-- button -->
               <div class="modal-footer">
                    <input type="submit" value="submit" name="submitland" class="btn btn-primary"/>
               </div>
							    </form>

           </div>
</div>

</div>


<!--adding houses for rent-->




<div class="modal fade" id="devices">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- header -->
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h3 class="modal-title">Add a device</h3>
               </div>

               <!-- body (form) -->
							 <div class="modal-body">
	 									<form action="adddevice.php"  method="POST" enctype="multipart/form-data" role="form">
	 										<div class="form-group">
	 											 <label class="text-primary">Enter a device name</label>
	 											<input type="text" class="form-control" name= "device" placeholder="Device Name" required>
	 										</div>

	 										<div class="form-group">
	 											<label class="text-primary">Add an image</label>
	 												<input type="file" class="form-control btn btn-default"name="image" required>
	 										</div>

	 											<label class="text-primary">Add a description</label>
	 										<div class="form-group">
	 												<textarea class="form-control" type="text" name="description" required>Add Description</textarea>
	 										</div>

										</div>

	 						<!-- button -->
	 						<div class="modal-footer">
	 							<input type="submit" value="submit" name="submitdevice" class="btn btn-primary"/>
	 						</div>
	 							 </form>
           </div>
</div>

</div>
<div class=row>

<div class="col-md-5">



  <div class="alert fade in well-lg">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <h5 class="text-primary">Welcome admin hope you are doing good</h5>
         </div>

</div>

<div class="col-md-7">



  <div class="well fade in well-lg">

          <h4 class="text-info">Please dont forget to logout after your session</h4>
         </div>

</div>



</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

</body>
</html>
















<?php

if(isset ($_POST['submit'])){
//path to store ImagickPixel
//getting data from FilesystemIterator

 $image=htmlentities($_FILES['image']['name']);
$name=htmlentities($_POST['vehicle']);

$description = htmlentities($_POST['description']);

if(empty($image)||empty($name)||empty($description)){

echo "please fill all fields";

}else{


$target="images/".basename($_FILES['image']['name']);

//connect to database

include "connect.php";

$time=time();
$actualtime=date('D M Y H:i:s',$time);


$sql="INSERT INTO `vehicles` (`vehicle_id`,`posted_on`, `vehicle_name`, `vehicle_image`,`vehicle_description`)
 VALUES (NULL, '$actualtime','$name', '$image','$description')";




 if(mysqli_query($db,$sql)){

 }else{
   die("cant submit".mysql_error());
 }


 //move photo to images folder


if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
  echo '<div class=\"alert alert-success\">

          <h4 class="text-center text-success">information was successfully posted</h4>
       "</div>"';


}else{
  echo '<div class=\"alert alert-danger\">

          <h4 class="text-center text-danger">Something went wrong could not update</h4>
       "</div>"';

}


}









}



//adding the houses
//adding a house

if(isset ($_POST['submithouse'])){
//path to store ImagickPixel
//getting data from FilesystemIterator

 $image=htmlentities($_FILES['image']['name']);
$description = htmlentities($_POST['description']);

if(empty($image)||empty($description)){

echo "please fill all fields";

}else{


$target="images/".basename($_FILES['image']['name']);

$time=time();

$actualtime=date('D M Y h:i:s',$time);


$sql="INSERT INTO `houses` (`house_id`, `posted_on`, `house_image`, `house_description`) VALUES (NULL,'$actualtime', '$image','$description')";




 if(mysqli_query($db,$sql)){

 }else{
   die("cant submit".mysql_error());
 }


 //move photo to images folder


if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
  echo '<div class=\"alert alert-success\">

          <h4 class="text-center text-success">information was successfully posted</h4>
       </div>';


}else{
  echo '<div class=\"alert alert-danger\">

          <h4 class="text-center text-danger">Something went wrong could not update</h4>
       "</div>"';

}

}
}


?>
