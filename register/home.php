<?php

	// INITIALIZE SESSION FUNCTION
	session_start();

	// INCLUDE DATABASE CONNECTION
	include_once('dbconnect.php');

	// IF THE USER VARIABLE IS SET IN THE SESSION
	if ( !isset($_SESSION['user']) ){

		// REDIRECT TO INDEX PHP
		header('Location: index.php');

	}
	// END IF THE SUER VARIABLE IS SET IN THE SESSION

	// SET RES VARIABLE
	$res = mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);

	// SET USER ROW FETCH VARAIBLE
	$userRow = mysql_fetch_array($res);

?>

<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Welcome - <?php echo $userRow['email']; ?></title>	
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>

	<body>
		<div id="header">
			<div id="left">
				<label>cleartuts</label>
			</div>
    			<div id="right">
     				<div id="content">
         				hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        			</div>
    			</div>
		</div>
	</body>
</html>