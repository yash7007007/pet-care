
<?php

require_once('connection.php');


	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "mini_project";

	mysql_connect($host, $user, $password);
	mysql_select_db($db);

	if(isset($_POST['username'])) {
		$uname = $_POST['username'];
		$uname = $_POST['password'];

		$sql ="select * from users where user ='".$uname."'AND Pass'".$password."' limit 1";

		$result=mysql_query($sql);

		if(mysql_num_rows($result)==1){
			echo "login done";
			exit();
		}else{
			echo "You have enter incorrect Username or Password";
			exit();
		}

	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="form.css">
</head>
<body>
	<div class="signup-form">

		<form action="process2.php" method="post">
			<h1>Login</h1>
			<input type="text" placeholder="user name" class="txt" name="UserName" >
			<input type="password" placeholder="password" class="txt" name="Password" >
			<input type="submit" value="Login" class="btn" name="btn-login" >

			<a href="index.php">Login<a>

		</form>
	</div>
</body>
</html>