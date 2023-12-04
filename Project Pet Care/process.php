<?php

	require_once('connection.php');

	if (isset($_POST['btn-save'])) {
		
		$UserName = mysqli_real_escape_string ($con,$_POST['UserName']);
		$Email = mysqli_real_escape_string ($con,$_POST['Email']);
		$Password = mysqli_real_escape_string ($con,$_POST['Password']);
		$CPassword = mysqli_real_escape_string ($con,$_POST['Cpass']);
	}

	// echo $UserName, $Email, $Password, $CPassword;


	$Pass = md5($Password);
	$sql ="insert into users (UName,Email,Password) values('$UserName','$Email','$Pass')";
	$result =mysqli_query($con,$sql);

	if($result)
	{
		header("location:https://www.youtube.com");
	} else{
		echo 'error';

	}

?>