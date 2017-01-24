<?php
include 'connect.php';

include 'core.php';

if(loggedin()){
	echo "you are already logged in";
}

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password))
	{
		$password_hash = md5($password);
		$query = "SELECT userid FROM users WHERE username='".mysqli_real_escape_string($db, $username)."' AND password='".mysqli_real_escape_string($db, $password_hash)."'";
		if($query_run = mysqli_query($db, $query))
		{
			$query_run = mysqli_query($db, $query);

			$query_num_rows = mysqli_num_rows($query_run);
			if($query_num_rows===0)
			{
				echo 'Invalid username/password.';
			}
			else if($query_num_rows===1)
			{
				$query_row = mysqli_fetch_assoc($query_run);
				$user_id = $query_row['userid'];
				$_SESSION['user_id'] = $user_id;
				header('Location:http://localhost/sbAssetss/admin/index.php');
			}
		}
	}
	else
	{
		echo 'You must enter a username and password.';
	}
}
?>
