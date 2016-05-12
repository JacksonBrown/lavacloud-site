<?php

	// BEGIN SESSION
	session_start();

	// INCLUDE THE DATABASE CONNECTION FILE
	include_once('dbconnect.php');

	// IF THE USER VARIABLE IS SET AND IS NOT BLANK
	if ( isset($_SESSION['user']) != "" ){

		// MOVE LOCATION TO HOME.PHP
		header("Location: home.php");

	}

	// IF BTN-LOGIN IS CLICKED
	if ( isset($_POST['btn-login']) ){

		// SET THE EMAIL AND PASS VARIABLES
		$email = mysql_real_escape_string( $_POST['email'] );
		$upass = mysql_real_escape_string( $_POST['pass'] );

		// SET THE RES AND ROW MYSQL VARIABLES
		$res=mysql_query("SELECT * FROM users WHERE email='$email'");
		$row-mysql_fetch_array($res);

		// IF PASSWORD IS MD5 HASHED PASSWORD VARIABLE
		if ( $row['password'] == md5($upass) ){

			// SET SESSION USER ITEM
			$_SESSION['user'] = $row['user_id'];
			header("Location: home.php");

		}
		// END IF PASSWORD IS MD5 HASHED PASSWORD VARIABLE

		// ELSE FOR IF PASSWORD IS MD5 HASHED PASSWORD VARIABLE
		else{

			// CUT PHP
			?>

			<script>alert('Wrong details.');</script>

			<?php
			// START PHP

		}
		// END ELSE FOR IF PASSWORD IS MD5 HASHED PASSWORD VARIABLE

	}
	// END IF BTN LOGIN IS CLICKED

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> LOGIN AND REGISTER INDEX </title>
	</head>

	<body>
		<div id="login-form">
			<form method="post">
				<input type="text" name="email" placeholder="Email" required />
				<input type="password" name="pass" palceholder="Password" required />
				<button type="submit" name="btn-login">SIGN DAT BOI</button>
				<a href="register.php">GET IN OUR CLIQUE HERE</a>
			</form>
		</div>
	</body>
</html>
