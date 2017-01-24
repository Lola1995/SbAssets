<?php
require 'connect.php';
ob_start();
session_start();

function loggedin()
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getuserfield($field)
{
	global $mysql_connect;
	$query = "SELECT ".$field." FROM users WHERE id='".$_SESSION['user_id']."'";
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row[$field];
		return $return_field;
		
	}	
}
?>