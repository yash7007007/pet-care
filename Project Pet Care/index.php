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

		<form action="process.php" method="post">
			<h1>Sign UP</h1>
			<input type="text" placeholder="user name" class="txt" name="UserName" >
			<input type="text" placeholder="email" class="txt" name="Email" >
			<input type="text" placeholder="password" class="txt" name="Password" >
			<input type="text" placeholder="Confirm password" class="txt" name="Cpass" >
			<input type="submit" value="Create a Account" class="btn" name="btn-save" >

			<a href="login.php">Login<a>

		</form>
	</div>
</body>
</html>