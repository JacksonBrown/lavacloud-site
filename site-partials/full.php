<?php
include('header.php');
include('gallery.php');
include('contact.php');
include('footer.php');
?>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/smooth-scroll.js"></script>
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
