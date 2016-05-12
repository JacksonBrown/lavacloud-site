<?php

	// BEGIN THE SESSION
	session_start();

	// IF THE USER VARIABLE IS SET IN A SESSION
	if ( isset( $_SESSION['user'] ) != "" ){

		// REDIRECT TO HOMEPAGE
		header( "Location: home.php" );

	}
	// END IF USER VARIABLE IS SET IN A SESSION


	// INCLUDE DATABASE CONNECTION ATTEMPT
	include_once 'dbconnect.php';


	// IF BTN-SIGNUP IS CLICKED
	if ( isset( $_POST['btn-signup'] ) ){

		// SET THE USERNAME AND EMAIL VARIABLES
 		$uname = mysql_real_escape_string( $_POST['uname'] );
		$email = mysql_real_escape_string( $_POST['email'] );

		// SET THE ENCRYPTED PASSWORD
		$upass = md5(mysql_real_escape_string( $_POST['pass'] ));


		// IF THE MYSQL QUERY EXECUTES SUCCESSFULLY
		if ( mysql_query("INSERT INTO users(username,email,password) VALUES ('$uname', '$email', '$upass')") ){

			// CUT PHP
			?>


			<script> alert( 'successfully registered' );</script>


			<?php
			// RESUME PHP

		}
		// END IF MYSQL QUERY EXECUTES SUCCESSFULLY


		// ELSE ( MYSQL QUERY NOT SUCCESSFULL )
		else{

			// CUT PHP
			?>


			<script>alert('Error whilst trying to register.');</script>


			<?php
			// RESUME PHP

		}
		// END ELSE ( MYSQL QUERY NOT SUCCESSFULL )

	}
	// END IF BTN-SIGNUP IS CLICKED

?>
// END PHP

<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> LOGIN AND REGISTER TEST </title>
	</head>

	<body>
		<div id="login-form">
			<form method="post">
				<input type="text" name="uname" placeholder="Username" required />
				<input type="text" name="email" placeholder="Email" required />
				<input type="password" name="pass" placeholder="Password" required />
				<button type="submit" name="btn-signup">GIMME THAT GOOD KUSH</button>
				<a href="index.php">SIGN IN DADDY</a>
			</form>
		</div>
	</body>

</html>
