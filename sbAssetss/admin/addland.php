<?php
//adding a house

if(isset ($_POST['submitland'])){
//path to store ImagickPixel
//getting data from FilesystemIterator

 $image=htmlentities($_FILES['image']['name']);
$description = htmlentities($_POST['description']);

if(empty($image)||empty($description)){

echo "<div class=\"alert\">please fill all fields.</div>";

}else{


$target="images/".basename($_FILES['image']['name']);

//connect to database

include "connect.php";




$sql="INSERT INTO `land` (`land_id`, `posted_on`, `land_image`, `land_description`) VALUES (NULL, NOW(),'$image', '$description');";




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
