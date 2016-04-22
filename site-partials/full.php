<section id="home" class="lava-home home home-fullscreen">
	<div id="mask" class="mask"></div>
	<a href="" class="menu-toggle" id="nav-expander" style="color: #fff;"><i class="fa fa-gamepad"></i></a>
	<nav class="menu">
		<a href="#" class="close"><i class="fa fa-close"></i></a>
		<h3>Site Map</h3>
		<br />
		<ul class="nav">
			<li><a href="#home">Home</a></li>
			<br />
			<li><a href="#services">About</a></li>
			<br />
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="container-fluid">
        	<div class="row single-page-nav">
        		<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center splash-text">
            			<h1>Lava Cloud</h1>
				<div class="container">
					<i class="fa fa-diamond" style="color: red; font-size: 70px;"></i>
				</div>
            			<p>We are an online community dedicated to generating <span style="color: red">funny</span> and <span style="color: red">entertaining</span> content.</p>
                		<a href="#gallery" class="btn btn-border"><i class="fa fa-facebook"></i>Facebook</a>
                		<a href="#about" class="btn btn-border"><i class="fa fa-play"></i>Youtube</a>
			</div>
        	</div>
        </div>
</section>
<section id="gallery" style="background: url('images/pattern_bg.png') repeat fixed 100%; box-shadow: inset 0px 0px 20px 10px rgba(0,0,0,0.6);">
	<div class="container">
		<header class="slideshow-header" style="height: 70px;">
			<div class="text-center col-md-12" style="display: none;">
				<h2>Recent Videos</h2>
			</div>
		</header>
		<div id="slides" style="width: 100%; height: 100%; margin-bottom: 10%; display: none;">
      			<img src="images/hh.png"      alt="Let's Play: Hooker Hideout">
      			<img src="images/codzep1.png" alt="Let's Play: COD Zombies | Episode One">
      			<img src="images/codzep2.png" alt="Let's Play: COD Zombies | Episode Two">
      			<img src="images/cod-bo2.png" alt="Let's Play: COD Black Ops 2">
    		</div>
	</div>
</section>
<section id="contact">
	<div class="container">
        	<div class="row lava-section-header">
        		<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center" style="padding: 10px;">
        			<h1 style="font-family: 'Raleway', sans-serif;">Contact</h1>
				<p style="font-family: 'Montserrat', sans-serif;">You may contact us if you have any questions or concerns</p>
            		</div>
        	</div>
	</div>
	<div class="container">
        	<div class="row">
            		<div class="lavano col-lg-8 col-md-12">
                		<form action="#contact" method="post" id="contact-form">
                			<div class="col-md-6">
               					<fieldset class="form-group">
                        				<label for="name">Your Name</label>
                        				<input type="text" class="form-control" id="name" placeholder="Write a full name">
                  				</fieldset>
                  
                  				<fieldset class="form-group">
                    					<label for="email">Your Email</label>
                    					<input type="email" class="form-control" id="email" placeholder="Enter your email">
                  				</fieldset>

                 				<fieldset class="form-group">
                        				<label for="subject">Subject</label>
                        				<input type="text" class="form-control" id="subject" placeholder="Subject">
                  				</fieldset>
                    
                			</div> 
                			<div class="col-md-6">
                 
                    
                  				<fieldset class="form-group">
                    					<label for="message">Your Message</label>
                    					<textarea class="form-control" id="message" rows="4" placeholder="Write a message"></textarea>
                  				</fieldset>
                  
                  				<div class="checkbox">
                    					<label>
                      						<input type="checkbox"> I am not a robot.
                    					</label>
                  				</div>
                  
                  				<button type="submit" class="btn btn-success btn-lg">Submit</button>
                			</div>  
            			</form>
		</div>
		<div class="lava-content col-lg-4 col-md-12">
        		<h3>Our Address</h3>
                	<p>106 Tommye Ln.</p>
          		<p><span class="contact-icon fa fa-envelope-o"></span> Email: <br /> jacksonconnerbrown@gmail.com</p>
                	<p><span class="contact-icon fa fa-phone"></span> Phone: <br />  918-931-7486</p>
            	</div>
        </div>
</section>
<footer>
	<div class="container-fluid">
    		<div class="row">
            		<div class="col-md-12">
            			<hr class="lava-hr">
            		</div>
        	</div>
        	<div class="row">
        		<div class="lava-copyright col-lg-8">
            			<p>Copyright © 2016 Lava Cloud
                    		| design: <a rel="nofollow" href="http://www.ohhi.net23.net" target="_parent">Steele Ind.</a></p>
            		</div>
            	<div class="lava-copyright col-lg-4 single-page-nav text-right" style="font-size: 30px;">
			<ul>
				<a class="social" href="#"><i class="fa fa-facebook"></i></a>
				<a class="social" href="#"><i class="fa fa-youtube"></i></a>
				<a class="social" href="#"><i class="fa fa-google"></i></a>
				<a class="social" href="#"><i class="fa fa-instagram"></i></a>
			</ul>
            	</div>
	</div>
</footer>
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
<script type="text/javascript" src="js/app.js"></script>
