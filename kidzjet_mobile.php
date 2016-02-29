<!DOCTYPE html>
<html>
<head>
	<title>Kidzjet Mobile App | Mobile Application Design</title>
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
		<link type="text/css" href="css/bottom.css" rel="stylesheet" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
					<a href="kidzjet_dash.php"><i class="fa fa-fw fa-paper-plane"></i><span style="font-size: 0.59em;">Kidzjet Dashboard</span></a>
					<a href="kidzjet_mobile.php"><i class="fa fa-fw fa-car"></i><span style="font-size: 0.59em;">Kidzjet Mobile</span></a>
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
								<h1>Kidzjet Mobile App</h1>
								<div class="border"></div>
								<h2>Mobile Application Design</h2>
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

				<!-- nav -->
				<nav class="subMenu navbar-custom navbar-scroll-top" role="navigation" style="height: 120px;">
			        <div class="container">
			            <div class="navbar-header page-scroll">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
			                    <img src="images/nav-icon.png" title="drop-down-menu" /> 
			                </button>
			            </div>
			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse navbar-left navbar-main-collapse" style="width: 100%;">
			                <ul class="nav">
			                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
			                        <a id="s1" class="subNavBtn understand" href="#">
			                        </a>
			                        <span>Idea</span>
			                    </li>
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s2" class="subNavBtn idea" href="#"></a>
			                        <span style="padding-left: 33px;">Wireframe</span>
			                    </li>
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s3" class="subNavBtn design" href="#"></a>
			                        <span style="padding-left: 28px;">Design</span>
			                    </li>
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s4" class="subNavBtn communicate" href="#"></a>
			                        <span style="padding-left: 6px;">Cooperation</span>
			                    </li>
			                </ul>
			            </div>
			            <!-- /.navbar-collapse -->
		                <div class="clearfix"> </div>
	        		</div>
   	  			</nav>
				<!--/nav-->

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
									<p>The fact that I have a big collection of handcrafts was just one of many factors that made working on this project a must! I had a deep understanding of the handcrafts’ target audience -- it was well represented in my cabinet. So I desire to design a single page eCommerce website with elegant look and feel that I am able to share all the handcrafts that I like with others.</p>
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
									<p>Hubtag is going to launch their live streaming software for gamers. In order to bring gamers better user experience, the company decided to develop a web-based dashboard to simplify the management of the software. After getting the data from user research, the client had a clear understanding of what functionalities they want on the dashboard.</p>
									<br><br>
								</div>
							</div>	
						</div>
					</div>



					<div class="section s3 extra-padding">
						<div class="container">
							<div class="row">
								<div class="col-md-5">
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
									<p>With the new redesign Hubtag website you’ll notice the creative direction included establishing an elegant yet dynamic, user friendly and efficient look and feel with hints of contemporary.</p>
									<br><br>
									<p>A skyline of Seattle is used as background image in the welcome section of the home page to identify the location of Hubtag. In order to emphasize the new live streaming product, I decided to incorporate the slogan and the four advantages of Caster in the welcome section. </p>
									<br><br>
									<p>To maintain the consistency of the homepage, an introduction and showcase section of the software is designed followed by the welcome section.</p>
									<br><br>
								</div>
								<div class="col-md-offset-1 col-md-6">
									<ul id="pikame" class="jcarousel-skin-pika">
										<li><a href="#"><img src="images/k1.png"/></a><span>Login Screen</span></li>
										<li><a href="#"><img src="images/k2.png"/></a><span>Landing Page</span></li>
										<li><a href="#"><img src="images/k3.png"/></a><span>Add New Trip</span></li>
										<li><a href="#"><img src="images/k4.png"/></a><span>Live Tracking</span></li>
										<li><a href="#"><img src="images/k5.png"/></a><span>Tracking Detail</span></li>
										<li><a href="#"><img src="images/k6.png"/></a><span>Driver Info</span></li>
										<li><a href="#"><img src="images/k7.png"/></a><span>Trip Management</span></li>
										<li><a href="#"><img src="images/k8.png"/></a><span>Profile</span></li>
										<li><a href="#"><img src="images/k9.png"/></a><span>Payment</span></li>
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
									<p>I collaborate with the mobile application developer of the company to bring the new design mobile application to live.</p>
									<br><br>
								</div>
							</div>	
						</div>
					</div>

					<hr class="nav_hr">

					<div class="row portfolio-nav" style="padding-bottom:6em;">
	                    <div class="col-xs-7 col-md-10">
	                    	<a class="fa fa-arrow-left button" href="kidzjet_dash.php"></a>
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