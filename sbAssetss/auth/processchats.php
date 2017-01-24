<?php
include 'connect.php';
include 'core.php';


if(isset ($_POST['submit'])){

		if(isset ($_POST['message'])){

			$messa=htmlentities($_POST['message']);
			$messag=trim($messa);


			if(!empty($messag)){
			$message=mysqli_real_escape_string($messag);
				$sql="INSERT INTO `chats` (`message_id`, `posted_on`, `user_name`, `message`) VALUES ('', CURRENT_TIME(), '','$message')";
				$result2=mysqli_query($mysql_connect,$sql);

				header("location:http://localhost/sbAssetss/chat.php");
			}else{
				echo "make sure you enter a message(text)";
			}

		}

	}
?>
