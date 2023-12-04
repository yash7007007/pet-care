<?php

	$con = mysqli_connect('localhost', 'root',"", 'mini_project');

	if(!$con)
	{
		echo 'DataBase Connection Failed';
	}

?>