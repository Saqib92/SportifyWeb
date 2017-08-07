
<!DOCTYPE html>
<html>
<head>
<title>SPORTIFY- Play Like A Boss</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Baseball Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/styles.css?v=1.6" rel="stylesheet">
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/scripts.js?v=1.7"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>	
</head>
<body>
	<div class="main-content">
		<!-- header -->
		<div class="navigation">
			<div class="container-wrap-fluid">
					<nav class="pull">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="hvr-bounce-to-bottom"><a href="index.php" class="active">Home</a></li>
									<li class="hvr-bounce-to-bottom"><a href="about.php">About</a></li>
									<li><a href="groundlist.php">Grounds</a></li>
									<li><a href="#" class="menu1">Gallery<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
										<ul class="nav-sub">
											<li><a href="gallery.php">Gallery1</a></li>                                             
											<li><a href="#" class="menu">Gallery2<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
												<ul class="nav-sub1">
													<li><a href="gallery.php">Gallery4</a></li>                                             
													<li><a href="gallery.php">Gallery5</a></li>   
													<li><a href="gallery.php">Gallery6</a></li> 
												</ul>
												<script>
													$( "li a.menu" ).click(function() {
													$( "ul.nav-sub1" ).slideToggle( 300, function() {
													// Animation complete.
													});
													});
												</script>
											<li><a href="gallery.php">Gallery3</a></li> 
										</ul>
										<!-- script-for-menu -->
										<script>
											$( "li a.menu1" ).click(function() {
											$( "ul.nav-sub" ).slideToggle( 300, function() {
											// Animation complete.
											});
											});
										</script>
									<li><a href="tournaments.php">Tournaments</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>
					</nav>
			</div>
		</div>
		<div class="header-top">
				<div class="head-logo">
					<h1><a href="index.php">SPORTIFY</a></h1>
				</div>
				<div class="top-nav">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><img src="images/menu.png" alt=""></a>
					</div>	
				</div>
				<div class="header-right">
					<div class="social">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="facebook twitter"> </a></li>
							<li><a href="#" class="facebook chrome"> </a></li>
							<li><a href="#" class="facebook dribbble"> </a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>				
				<div class="clearfix"> </div>
		</div>
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<!-- container-wrap -->
			<div class="container-wrap-wrap">
				<div class="col-md-4 banner-img">
					<img src="images/1.png" alt="Main Image" />
				</div>
				<div class="col-md-8 banner-top-slide">
					<div class="banner-top-text">
						<h2>PLAY</h2>
						<h5>Like A <b>Boss</b></h5>
					</div>
					<div class="banner-bottom-bottom">
						<div class="banner-top-slide-grids">
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								</script>
								<div  id="top" class="callbacks_container-wrap">
									<ul class="rslides" id="slider3">
										<li>
											<div class="banner-slid">
												<h3 style="font-size: 25px;">Sportify  is an Online <span>Ground Booking</span> Platform.</h3>
												<p>Sportify is an online Platform where Cricket lovers can find available Grounds and book right under sitting one roof with hasseling on reasonble fee. 
												</p>
												<div class="banner-button">
													<a href="groundlist.php">Book Now</a>
												</div>
											</div>
										</li>
										<li>
											<div class="banner-slid">
												<h3>Sporfity <span>Play Like a Boss.</span> &nbsp;</h3>
												<p>Play your Favourite Sports i.e (Cricket) with availbale teams. Find Tournaments, Register teams and get free coverage of your matches anywhere anytime.
												</p>
												<div class="banner-button">
													<a href="#">Find Things</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container-wrap -->
		</div>
		<!-- //banner -->
		<!-- about -->
		<div class="about">
			<!-- container-wrap -->
			<div class="container-wrap">
				<div class="about-grids">
					<div class="col-md-6 about-left">
						<h2>Find out more about Sportify</h2>
						<h4>Sportify is an online platform for the people who loves to play sports but face problems like opponent teams or grounds availability. with this single application they can find available teams and can book grounds without any hassle or going out. </h4>
						<p>With this Platform Teams can find new openents, Grounds, Tournaments, Sports Accessories, Free Match Coverage and much more. Register Now and get free T-Shirt on first Ground Booking.</p>
					</div>
					<div class="col-md-6 about-right">
						<img src="images/2.png" alt="" />
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container-wrap -->
		</div>
		<!-- //about -->
		<!-- rules -->
		<div class="rules">
			<!-- container-wrap -->
			<div class="container-wrap">
				<div class="rules-info">
					<h3>Rules & Standards</h3>
				</div>
				<div class="rules-top-grids">
					<div class="rules-grids">
						<div class="col-md-6 rules-grid">
							<div class="rules-left">
								<h4>Resource center</h4>
							</div>
						</div>
						<div class="col-md-6 rules-grid">
							<div class="rules-right">
								<h5>Praesent congue elit pulvinar molestie sodales. Nulla blandit tellus in interdum gravida.</h5>
								<p>Etiam eget arcu tincidunt tortor tristique consectetur eu purus elementum tristique consectetur eu purus elementum, egestas nisi non, sollicitudin eros ac quis arcu. Donec eu urna venenatis, sagittis erat at, condimentum mi. </p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="rules-grids">
						<div class="col-md-6 rules-grid">
							<div class="rules-right">
								<h5>Praesent congue elit pulvinar molestie sodales. Nulla blandit tellus in interdum gravida.</h5>
								<p>Etiam eget arcu tincidunt tortor tristique consectetur eu purus elementum tristique consectetur eu purus elementum, egestas nisi non, sollicitudin eros ac quis arcu. Donec eu urna venenatis, sagittis erat at, condimentum mi. </p>
							</div>
						</div>
						<div class="col-md-6 rules-grid">
							<div class="rules-left rules-left-bg">
								<h4>National teams</h4>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //container-wrap -->
		</div>
		<!-- //rules -->
		<!-- news -->
		<div id="news" class="news">
			<div class="news-left">
				<div class="news-left-info">
					<div class="news-left-text">
						<h3>News</h3>
					</div>
					<div class="rules-grids">
						<div class="col-md-6 news-grid">
							<a href="about.html">Integer vitae ligula sed lectus</a>
							<h6>10.00 - 12.00 | sep 24,2014</h6>
							<img src="images/7.jpg" alt="">
							<div class="news-info">
								<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
							</div>
						</div>
						<div class="col-md-6 news-grid news-grid-text">
							<a href="about.html">Integer vitae ligula sed lectus</a>
							<h6>09.00 - 11.00 | Jun 09,2014</h6>
							<img src="images/8.jpg" alt="">
							<div class="news-info">
								<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="news-right">
				<div class="news-left-info event-left-info">
					<div class="news-left-text event-left-text">
						<h3>Events</h3>
					</div>
					<div class="event-grids">
						<div class="event-grid">
							<h4>Pellentesque bibendum</h4>
							<h6>09.00 - 11.00 | Jun 09,2014</h6>
							<p>Duis sollicitudin vulputate felis sed iaculis. In faucibus mauris sit amet dictum rutrum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</div>
						<div class="event-grid">
							<h4>Vestibulum id lorem sit</h4>
							<h6>09.00 - 11.00 | Jun 09,2014</h6>
							<p>Duis sollicitudin vulputate felis sed iaculis. In faucibus mauris sit amet dictum rutrum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //news -->
		<!-- footer -->
		<div class="footer">
			<!-- container-wrap -->
			<div class="container-wrap">
				<div class="footer-top">
						<div class="footer-grids">
							<div class="col-md-3 f-address">
								<h5>Address</h5>
								<ul>
									<li>Looking for office,</li>
									<li>please eait for address.</li>
									<li>Telephone: +92-342-2351025</li>
									<li>E-mail : <a href="mailto:sportify@gmail.com">sportify@gmail.com</a></li>
								</ul>
							</div>
							<div class="col-md-3 f-address f-phone">
								<h5>Phone</h5>
								<div class="f-address-text">
									<p>+92-342-2351025</p>
									<!-- <p>+1 456 789 3450</p> -->
								</div>
							</div>
							<div class="col-md-6 f-address f-contact">
								<h5>Stay in Touch</h5>
								<form>
									<input type="text" placeholder="Email address" required="">
									<input type="submit" value="Subscribe">
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="footer-bottom">
							<div class="footer-nav">
								<ul>
									<li><a href="index.html" class="active">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="groundlist.html">Grounds</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="tournaments.php">Tournaments</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<div class="copyright">
								<p> © 2017 Sportify . All rights reserved | <span style="color: grey;"> Design by <a href="http://w3layouts.com/" style="color: grey;">W3layouts</a></span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>
			</div>
			<!-- //container-wrap -->
		</div>
		<!-- //footer -->
	</div>
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			container-wrapID: 'toTop', // fading element id
											container-wrapHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
</body>	
</html>