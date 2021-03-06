<!DOCTYPE html>
<html>
<head>
	<title>Mobolet Mobile App | Mobile Application Design</title>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<link rel="icon" href="favicon.png" type="image/ico">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- <link rel="shortcut icon" href="../favicon.ico"> -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/menu_elastic.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link type="text/css" href="css/bottom2.css" rel="stylesheet" />
	<!-- for-mobile-apps -->
	<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="js/snap.svg-min.js"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
	<script type="text/javascript" src="js/jquery.pikachoose.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});

			$('.subMenu').smint({
				'scrollSpeed' : 1000
			});

			//Call the pikaChoose function for slideshow plugin initialization
			$("#pikame").PikaChoose();
		});
	</script>

	<!-- start-smooth-scrolling -->

</head>
<body>

<style>
	body {
		font-family: 'Verdana';
	}

	/*overwrite bootstrap styles*/
	@media screen and (max-width: 768px){
		.container {
			padding-left: 0;
			padding-right: 0;
		}
	}
</style>

<div>
	<div class="menu-wrap">
		<nav class="menu">
			<div class="icon-list">
				<a href="#" style="color: #c94e50;"><span style="font-size: 1em;">Portfolio</span></a>
				<a href="kidzjet_mobile.php"><i class="fa fa-fw fa-car"></i><span style="font-size: 0.59em;">Kidzjet Mobile</span></a>
				<a href="kidzjet_dash.php"><i class="fa fa-fw fa-paper-plane"></i><span style="font-size: 0.59em;">Kidzjet Dashboard</span></a>
				<a href="mobolet.php"><i class="fa fa-fw fa-shopping-bag"></i><span style="font-size: 0.59em;">Mobolet Mobile</span></a>
				<a href="hubtag_web.php"><i class="fa fa-fw fa-video-camera"></i><span>Hubtag Website</span></a>
				<a href="hubtag_dash.php"><i class="fa fa-fw fa-gamepad"></i><span style="font-size: 0.59em;">Hubtag Dashboard</span></a>
				<a href="tagether.php"><i class="fa fa-fw fa-chrome"></i><span>Tagether</span></a>
				<a href="kapler.php"><i class="fa fa-fw fa-space-shuttle"></i><span>Kapler</span></a>
				<a href="banana.php"><i class="fa fa-fw fa-glass"></i><span>Why not banana</span></a>
				<a href="handcraft.php"><i class="fa fa-fw fa-gift"></i><span>Q' Handcraft</span></a>
			</div>
		</nav>
		<span class="close-button" id="close-button">Close Menu</span>
		<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
				<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
			</svg>
		</div>
	</div>
	<a id="open-button">
		<span></span>
	</a>
	<div class="content-wrap">
		<div class="content">

			<!-- banner -->
			<div class="banner sTop banner_project" id="home">
				<div class="container">
					<div class="top-header row">
						<!--top-nav---->
						<div class="logo" style="width: 70px; margin-left: 20px; margin-top: -10px;">
							<a href="index.php"><img src="images/logo250.png" alt=""/></a>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="banner-info banner_width">
						<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
							<img src="images/mobolet.png" alt="Mobolet Logo" class="mobolet_logo">
							<h2 style="margin-bottom: 0;letter-spacing: 2px; padding-bottom: 0;">MOBOLET</h2>
							<h2 style="font-size: 22px;">A Mobile Wallet for Everyone</h2>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--/header-banner-->


			<div class="wrapper">
				<div class="section s1 extra_top_pad" style="margin-bottom: 3em;">
					<div class="container">
						<div class="row">
							<div class="col-md-offset-4" style="padding-left: 1.2em;">
								<img src="images/idea.png" alt="idea" style="display: inline-block; width: 55px;">
								<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Idea</h1>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-md-4">
								<a class="popup-link" href="images/oldmobolet.png">
									<img id="mobolet_photo" src="images/oldmobolet.png" alt="Mobolet Old Design" style="width: 250px;">
								</a>
								<br/><br/>
							</div>
							<div class="col-md-8">
								<p>Mobolet is a early-stage startup that provides mobile commerce solution for their customers. The goal of the mobile application is to allow the users to search for nearby food trunks and restaurants and provide a social media platform for users to communicate with each others. </p>
								<br><br>
							</div>
						</div>
					</div>
				</div>


				<div class="section s2 extra-padding">
				</div>



				<div class="section s3 extra-padding" style="padding: 2em;">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<img src="images/design.png" alt="Idea" style="display: inline-block; width: 55px;">
								<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Design</h1>
								<div class="tags">
									<ul class="tag">
										<li><a>Photoshop</a></li>
										<li><a>Illustrator</a></li>
										<li><a>Mobile App Design</a></li>
										<li><a>UX/UI</a></li>
										<li><a>Sketch 3</a></li>
									</ul>
								</div> <!-- tags -->
								<p>My role is to redesign the food review page and food trunk review page for new Mobolet mobile application. </p>
								<br><br>
								<p>In new design of the Mobolet application, in order to make the food trunk review page clean and simple, firstly I replaced old design style with the flat design. As for the crowd section, I chose to use light grey as the background color instead of the logo color, and changed the layout of the list item. In addition, I applied a Swipeable Card Stack design style on the food review page to make the page more dynamic and user friendly. </p>
								<br><br>
							</div>
							<div class="col-md-offset-1 col-md-6">
								<ul id="pikame" class="jcarousel-skin-pika">
									<li><a href="#"><img src="images/m1.png"/></a><span>Landing Page</span></li>
									<li><a href="#"><img src="images/m2.png"/></a><span>Food Review Page</span></li>
									<li><a href="#"><img src="images/m3.png"/></a><span>Food Trunk Review Page</span></li>
								</ul>
								<p style="margin-bottom: 3em;"></p>
							</div>
						</div>
					</div>
				</div>

				<div class="section s4 extra-padding">
				</div>

				<hr class="nav_hr">

				<div class="row portfolio-nav" style="padding-bottom:6em;">
					<div class="col-xs-7 col-md-10">
						<a class="fa fa-arrow-left button" href="kidzjet_dash.php"></a>
					</div>
					<div class="col-xs-5 col-md-2 nav-btn">
						<a class="fa fa-arrow-right button" href="hubtag_web.php"></a>
					</div>
				</div>



			</div><!-- wrapper -->





			<!--footer-->
			<div class="footer">
				<div class="container">
					<p>Copyright &copy; 2016
						<span><img src="images/logo250.png" alt="logo" class="footer-logo"></span>
						<a href="index.php"> Qianqian Wang</a>
					</p>
				</div>
			</div>
			<!--//footer-->
		</div><!-- /content -->
	</div><!-- /content-wrap -->
</div><!-- /container -->


<!-- here stars scrolling icon -->
<script>

	// Show the progress bar
	NProgress.start();

	// Increase randomly
	var interval = setInterval(function() { NProgress.inc(); }, 1000);

	// Trigger finish when page fully loaded
	jQuery(window).load(function () {
		clearInterval(interval);
		NProgress.done();
	});

	// Trigger bar when exiting the page
	jQuery(window).unload(function () {
		NProgress.start();
	});

</script>
<script src="js/classie.js"></script>
<script src="js/main3.js"></script>
<script src="js/script.js"></script>
<!-- //here ends scrolling icon -->
</body>
</html>