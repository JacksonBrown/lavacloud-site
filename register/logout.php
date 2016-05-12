<?php

	// INITIALIZE SESSION FUNCTION
	session_start();

	// IF USER SESSION VARIABLE IS NOT SET
	if( !isset($_SESSION['user']) ){
		header("Location: index.php");
	}
	else if( isset($_SESSION['user']) != "" ){
		header("Location: home.php");
	}

	// IF LOGOUT IS ACHIEVED
	if ( isset($_GET['logout']) ){

		// DESTROY THE SESSION
		session_destroy();

		// UNSET THE SESSION USER VARIABLE
		unset( $_SESSION['user'] );

		// REDIRECT TO THE HOME
		header("Location: index.php");

	}

?>