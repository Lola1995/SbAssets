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
  echo "all fiels are required boss".'<br>';

  /*if(filter_var_email($email,FILTER_VALIDATE_EMAIL)===false){
    echo "thats not a valid email hoss";
  }*/
}else{
  if(!$name=='cryce'){
    echo "thats nt your name";
  }else{
    echo "ok ".$name;
  }



}




/*
if(empty($name)){
  $errors[0]="Please enter your name";

  if(empty($phone)){
    $errors[1] ="please enter your phone no";

    if(empty($email)){
      $errors[2] ="please enter your email address";
      if(empty($message)){
        $errors[3]="please enter a message to send";

foreach ($errors as $error) {
  echo $error.'<br>';
  # code...*/

}else{

}
}


?>
