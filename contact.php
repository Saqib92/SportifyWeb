<!DOCTYPE html>
<html>
<head>
<title>Contact - SPORTIFY</title>
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
									<li class="hvr-bounce-to-bottom"><a href="index.php">Home</a></li>
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
									<li><a href="index.php">News</a></li>
									<li><a href="contact.php" class="active">Contact</a></li>
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
		<!-- contact -->
		<div class="contact">
			<!-- container-wrap -->
			<div class="container-wrap">
				<div class="contact-info">
					<h2>Contact</h2>
				</div>
				
				<div class="mail-grids">
					<div class="col-md-6 mail-grid-left">
						<h3>Address</h3>
						<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
						<h4>Headquarters</h4>
						<p>756 GT. Globel Place.
							<span>CG 09-123</span>
							Italy, Ba. 4567
						</p>
						<h4>Get In Touch</h4>
						<p>Telephone: +1 234 567 9871
							<span>FAX: +1 234 567 9871</span>
							E-mail: <a href="mailto:info@example.com">mail@example.com</a>
						</p>
					</div>
					<div class="col-md-6 contact-form">
						<form action="index.php" method="POST">
							<input type="text" placeholder="Name" name="name" required="">
							<input type="text" placeholder="Email" name="email" required="">
							<input type="text" placeholder="Subject" name="subject" required="">
							<textarea placeholder="Message" name="message" required=""></textarea>
							<input type="submit" name="submit" value="SEND">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container-wrap -->
		</div>
		<!-- //contact -->
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
									<li><a href="index.php" class="active">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="groundlist.php">Grounds</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="#news" class="scroll">News</a></li>
									<li><a href="contact.php">Contact</a></li>
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