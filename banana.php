<!DOCTYPE html>
<html>
<head>
	<title>WHY NOT BANANA | Corporate Business Design</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- <link rel="shortcut icon" href="../favicon.ico"> -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_elastic.css" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script src="js/snap.svg-min.js"></script>
		<script type="text/javascript" 	src="js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});

				$('.subMenu').smint({
			    	'scrollSpeed' : 1000
			    });
			});
		</script>

	<!-- start-smooth-scrolling -->

</head>
<body>

	<style>
		body {
			font-family: 'Verdana';
		}
	</style>

	<div>
		<div class="menu-wrap">
			<nav class="menu">
				<div class="icon-list">
					<a href="#"><i class="fa fa-fw fa-star-o"></i><span>Favorites</span></a>
					<a href="#"><i class="fa fa-fw fa-bell-o"></i><span>Alerts</span></a>
					<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>Messages</span></a>
					<a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Comments</span></a>
					<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Analytics</span></a>
					<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Reading List</span></a>
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
								<a href="index.html"><img src="images/logo250.png" alt=""/></a>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						<div class="banner-info banner_width">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<h1>Why not banana</h1>
								<div class="border"></div>
								<h2>Corporate Business Design</h2>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="banner_image">
									<img src="images/banana_iphone.png" alt="why not banana" class="image_phone" style="max-width:none;">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--/header-banner-->

				<!-- nav -->
				<nav class="subMenu navbar-custom navbar-scroll-top" role="navigation" style="height: 150px;">
			        <div class="container">
			            <div class="navbar-header page-scroll">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
			                    <img src="images/nav-icon.png" title="drop-down-menu" /> 
			                </button>
			            </div>
			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse navbar-left navbar-main-collapse" style="width: 100%;">
			                <ul class="nav" style="padding-top: 1%;">
			                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
			                    <!-- <li class="page-scroll col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
			                        <a id="s1" class="subNavBtn understand" href="#">
			                        </a>
			                        <span>Understand</span>
			                    </li> -->
			                    <li class="page-scroll col-lg-3 col-md-3 col-sm-3 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
			                        <a id="s1" class="subNavBtn idea" href="#"></a>
			                        <span style="padding-left: 33px;">Idea</span>
			                    </li>
			                    <li class="page-scroll col-lg-3 col-md-3 col-sm-3">
			                        <a id="s2" class="subNavBtn design" href="#"></a>
			                        <span style="padding-left: 28px;">Design</span>
			                    </li>
			                    <!-- <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s4" class="subNavBtn communicate" href="#"></a>
			                        <span style="padding-left: 6px;">Cooperation</span>
			                    </li> -->
			                    <li class="page-scroll col-lg-3 col-md-3 col-sm-3">
			                        <a id="s2" class="subNavBtn coroporate" href="#"></a>
			                        <span>UI Testing</span>
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
									<p>“Why not banana” is a passion project that started with the urge to design a website for a juicy store that one day I will have my own. I started this corporation business website with emphasis on juice as well as other health tips of fruits. With that in mind, I decided to create a website contained with not only the sale items of the store, but various areas to share health information that inspired from fruits with visitors.</p>
									<br><br>
									
								</div>
							</div>	
						</div>
					</div>


					<div class="section s2 extra-padding">
						<div class="container">
							<div class="row">
								<div class="col-md-offset-8" style="padding-left: 1.2em;">
									<img src="images/design.png" alt="design" style="display: inline-block; width: 55px;">
									<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Design</h1>
								</div>
								<br>
							</div>
							<div class="row">
								<div class="col-md-8">
									<img src="images/Juicy.jpg" alt="Juicy Website" class="img_shadow">
									<p style="padding-bottom: 6em;"></p>
									<img src="images/banana_perspective.png" alt="Banana Perspective">
									<p style="padding-bottom: 3em;"></p>
								</div>
								<div class="col-md-4">
									<p>With a responsive layout and robust eCommerce combination, there was a heavy focus on seamless functionality and a terrific user experience across smaller devices!</p>
									<br><br>
								</div>
							</div>	
						</div>
					</div>

				</div>



				

				<!--footer-->
				<div class="footer">
					<div class="container">
						<p>Copyright &copy; 2015 
						<span><img src="images/logo250.png" alt="logo" style="width: 60px; margin: 0 30px;"></span>
						<a href="#"> Qianqian Wang</a>
					</p>
					</div>
				</div>
				<!--//footer-->
			</div><!-- /content -->
		</div><!-- /content-wrap -->
	</div><!-- /container -->
<!-- here stars scrolling icon -->
	
	<script src="js/classie.js"></script>
	<script src="js/main3.js"></script>
	<script src="js/script.js"></script>
<!-- //here ends scrolling icon -->
</body>
</html>