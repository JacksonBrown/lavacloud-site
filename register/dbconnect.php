<?php

	$user = "root";
	$pass = "meggiemoo12";
	$base = "UAP1";
	$serv = "localhost";

	if(!mysqli_connect($serv, $user, $pass)){
		echo "error";
	}
	if (!mysqli_select_db("UAP1")){
		echo "error";
	}
?>
