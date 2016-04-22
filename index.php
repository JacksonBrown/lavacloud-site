<!DOCTYPE html>
<html lang="en">
<head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway|Montserrat:700' rel='stylesheet' type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    	<title>Hey we're Lava Cloud</title>
</head>
<body id ="site-content">
  	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>
		if( $(window).width() > 767 ){
			$('#site-content').load('site-partials/full.php');
		}else{
			$('#site-content').load('site-partials/mobile.php');
		}
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  	<script type="text/javascript" src="js/jquery.slides.min.js"></script>
  	<script type="text/javascript" src="js/app.js"></script>
	<script>
		$(function() {
     			$('#slides').slidesjs({
				    play: {
        				active: false,
	       	 			effect: "slide",
        				interval: 5000,
        				auto: true,
        				swap: true,
        				pauseOnHover: true,
	        			restartDelay: 2000
    				},
    				navigation: false,
				pagination: false
	      		});
    		});
	</script>
</body>
</html>
