<section id="home" class="lava-home home-fullscreen">
	<div id="mask" class="mask"></div>

	<header id="lava-header" class="lavacloud-header">
		<div class="col-md-12 header-logo">
			<div class="col-md-6 header-div text-left">
				<h1 style="font-size: 40px; padding-top: 30px;">Lava Cloud</h1>
			</div>
			<div class="col-md-6">
				<a href="" class="menu-toggle" id="nav-expander" style="position: fixed; margin: 0; padding: 0; color: red; z-index: 1000;"><i class="fa fa-bars"></i></a>
			</div>
			<!-- Offsite navigation -->
			<nav class="menu" style="z-index: 1001;">
				<a href="#" class="close"><i class="fa fa-close"></i></a>
				<br />
				<h3>Site Map</h3>
				<ul class="nav">
					<li><a data-scroll href="#home">Home</a></li>
					<li><a data-scroll href="#gallery">Videos</a></li>
					<li><a data-scroll href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div> 
	</header>

	<div class="container-fluid">
        	<div class="row single-page-nav">
			<ul class="bxslider">
			<li>
        		<!--<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center splash-text">-->
			<div class="col-md-12 col-md-offset-1 text-left splash-text">
            			<h1>Hey We're <br />Lava Cloud</h1>
            			<p>We are an online community dedicated to generating <span style="color: red">funny</span> and <span style="color: red">entertaining</span> content.</p>
                		<a href="#about" class="btn btn-border" style="margin-left: 0;"><i class="fa fa-eye"></i>Join Us</a>
			</div>
			</li>

			<li>
        		<!--<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center splash-text">-->
			<div class="col-md-12 col-md-offset-1 text-left splash-text">
            			<h1>Gaming, friends & <br />Adventure</h1>
            			<p>We upload funny Youtube videos in hopes of making ad revenue. Check us out!</p>
                		<a href="#about" class="btn btn-border" style="margin-left: 0;"><i class="fa fa-play"></i>Subscribe</a>
			</div>
			</li>

			<li>
        		<!--<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center splash-text">-->
			<div class="col-md-12 col-md-offset-1 text-left splash-text">
            			<h1>We love to <br />collaborate</h1>
            			<p>If youwould like to collab with us, send an email!</p>
                		<a href="#about" class="btn btn-border" style="margin-left: 0;"><i class="fa fa-diamond"></i>We Don't Bite</a>
			</div>
			</li>

			</ul>
        	</div>
        </div>
</section>

<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({
			auto: true,
			controls: false,
			pager: false,
			speed: 3000,
			pause: 7000
		});
	});
</script>

