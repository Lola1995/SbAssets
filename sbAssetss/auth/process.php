<?php
require 'init.php';
if(isset ($_POST['submit'])){
		if(isset ($_POST['message'])){
			$messa=htmlentities($_POST['message']);
			
			

			$messag=trim($messa);
			
			
			if(!empty($messag)){

			$message=mysql_real_escape_string($messag);
				$sql="INSERT INTO users(time,user,message)VALUES(NOW(),'You','$message')";
				$result2=mysqli_query($connect,$sql);
				
				header("location:http://localhost/sbAssetss/chat.php");
				
			}else{
				echo "make message(text)";
			}
			
			
		}

}



?>