<?php 
require 'core.php';
require 'connect.php';

if(loggedin())
{
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
	echo 'You\'re logged in, '.$firstname.' '.$surname.'.<br/>';
	echo '<a href="logout.php">Log Out</a>';
}
else
{
	include 'loginform.inc.php';
}	

?>