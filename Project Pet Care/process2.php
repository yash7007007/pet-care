<?php

require('connection.php');


	if(isset($_POST['btn-login'])) {

		$UName = $_POST['UserName'];
		$Pass = $_POST['Password'];

		if(empty($UName) || empty($Pass)){
			echo 'Please Fill UserName And Password';
		}
		else{
			$query = "select * from users where UName = '$UName'";
			$result = mysqli_query($con,$query);

			 
			if($row = mysqli_fetch_array($result)){
				$db_password = $row['Password'];

				if(md5($Pass) == $db_password){
					header("location:https://www.youtube.com");
				}else{
					echo 'Incorrect Password';
				}
			}
		}

	}

?>













