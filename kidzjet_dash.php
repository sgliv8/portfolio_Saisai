<!DOCTYPE html>
<html>
<head>
	<title>Kidzjet Dashboard | User Dashboard design</title>
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
	<link type="text/css" href="css/bottom1.css" rel="stylesheet" />
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
						<div class="col-lg-6 col-md-6 col-sm-6">
							<h1>Kidzjet Dashboard</h1>
							<div class="border"></div>
							<h2>User Dashboard design</h2>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="banner_image">
								<img src="images/kidzjet_p.png" alt="hubtag_website" class="image_size" style="max-width:none;">
							</div>
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
							<div class="col-md-12">
								<div>
									<img src="images/idea.png" alt="idea" style="display: inline-block; width: 55px;">
									<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Idea</h1>
								</div>
								<br>
								<p>Kidzjet is a startup company that provides kids transportation service and kids outdoor science summer camps. In order to improve the current workflow and offer a better user experience for their customers, Kidzjet decided to design and develop a fully responsive web-based dashboard. The main goal of the dashboard is to provide a complimentary functionality with the Kidzjet mobile app, therefore the schools and parents will have more freedom and flexibility in their daily trip management as well as offering a better user experience.
								</p>
								<br><br>
							</div>
						</div>
					</div>
				</div>


				<div class="section s2 extra-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-offset-8" style="padding-left: 1.2em;">
								<img src="images/understand.png" alt="understand" style="display: inline-block; width: 55px;">
								<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">WIREFRAME</h1>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-md-8">
								<a class="popup-link" href="images/wireframe_dash.png">
									<img src="images/kidzjet_sitemap.png" alt="hubtag dashboard wireframe">
								</a>
							</div>
							<div class="col-md-4">
								<p>Base upon the mobile app project, the product team mapped out the requirement and defined the scope for this dashboard project . After that, I created numerous wireframes and initial mockups that met the business goals and ensured a positive user experience. </p>
								<br><br>
							</div>
						</div>
					</div>
				</div>



				<div class="section s3 extra-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<img src="images/design.png" alt="Idea" style="display: inline-block; width: 55px;">
								<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Design</h1>
								<div class="tags">
									<ul class="tag">
										<li><a>Photoshop</a></li>
										<li><a>Illustrator</a></li>
										<li><a>Web Design</a></li>
										<li><a>UX/UI</a></li>
										<li><a>Responsive Design</a></li>
									</ul>
								</div> <!-- tags -->
								<p>To make it consistent with the mobile app, the design of dashboard maintained the same color palette and style as the mobile app. Various Icons are being used in the design to visualize the information so that it is easy on the eye and communicate data in a more visually applying way than just bare numbers and texts.</p>
								<br><br>
								<p>Regarding the overall design of the web dashboard, I kept the flat design as the main style, which makes the interface simple and efficient. While at the same time, the flat design makes it easier to design the dashboard user interface that is fully responsive to changes in all browser size across different devices. </p>
								<br><br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<ul id="pikame" class="jcarousel-skin-pika">
									<li><a href="#"><img src="images/d1.png"/></a><span>Login Screen</span></li>
									<li><a href="#"><img src="images/d2.png"/></a><span>Landing Page</span></li>
									<li><a href="#"><img src="images/d3.png"/></a><span>Add New Trip</span></li>
									<li><a href="#"><img src="images/d4.png"/></a><span>Live Tracking</span></li>
									<li><a href="#"><img src="images/d5.png"/></a><span>Tracking Detail</span></li>
								</ul>
								<p style="margin-bottom: 3em;"></p>
							</div>
						</div>
					</div>
				</div>

				<div class="section s4 extra-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div>
									<img src="images/cooperation.png" alt="cooperation" style="display: inline-block; width: 55px;">
									<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Cooperation</h1>
								</div>
								<br>
								<p>I collaborate with the software developer of the company to bring the new web-based dashboard to live.</p>
								<br><br>
							</div>
						</div>
					</div>
				</div>

				<hr class="nav_hr">

				<div class="row portfolio-nav" style="padding-bottom:6em;">
					<div class="col-xs-7 col-md-10">
						<a class="fa fa-arrow-left button" href="kidzjet_mobile.php"></a>
					</div>
					<div class="col-xs-5 col-md-2 nav-btn">
						<a class="fa fa-arrow-right button" href="mobolet.php"></a>
					</div>
				</div>



			</div><!-- wrapper -->





			<!--footer-->
			<div class="footer">
				<div class="container">
					<p>Copyright &copy; 2015
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