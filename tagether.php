<!DOCTYPE html>
<html>
<head>
	<title>Tagether | A Chrome Extension For Dropbox</title>
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
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_elastic.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
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
								<img src="images/tagether_logo.png" alt="Tagether Logo" class="tagether_logo">
								<h2>A Chrome Extension For Dropbox</h2>
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
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
			                        <a id="s1" class="subNavBtn idea" href="#">
			                        </a>
			                        <span style="padding-left: 33px;">Idea</span>
			                    </li>
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s2" class="subNavBtn research" href="#"></a>
			                        <span>Research</span>
			                    </li>
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s3" class="subNavBtn design" href="#"></a>
			                        <span style="padding-left: 28px;">Design</span>
			                    </li>
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s4" class="subNavBtn communicate" href="#"></a>
			                        <span style="padding-left: 6px;">Cooperation</span>
			                    </li>
			                    <li class="page-scroll col-lg-2 col-md-2 col-sm-2">
			                        <a id="s5" class="subNavBtn presentation" href="#"></a>
			                        <span>Presentation</span>
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
								<div class="col-md-offset-4" style="padding-left: 1.2em;">
									<img src="images/idea.png" alt="idea" style="display: inline-block; width: 55px;">
									<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Idea</h1>
								</div>
								<br>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="img_con">
										<a class="popup-link" href="images/folder.png">
											<img src="images/folder.png" alt="old hubtag website" style="width: 120px;">
										</a>
									</div>
								</div>
								<div class="col-md-7 col-md-offset-1">
									<p>The idea of the project is to eventually help improve how people using tagging model based upon the folders structure in their personal information management. The main focus of the project is implementing the concept of “Universal tagging” with the traditional folders, resulting in better performance in organizing and refinding personal information items.</p>
								</div>
							</div>	
						</div>
					</div>


					<div class="section s2 extra-padding">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<div>
										<img src="images/research.png" alt="Research" style="display: inline-block; width: 65px;">
										<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Research</h1>
									</div>
									<br>
									<p>Personal information management  (PIM)  is  a vital  topic  in  information  studies.  Traditionally,  PIM systems provided folders for information storage and retrieval. Nevertheless, in the era of Web 2.0, it is possible that tags can be widely used in the PIM systems. In recent years, much progress has been made  in PIM,  but  many  fail  to achieve  the  goal  of  making  tagging  method widely  used.  The goal is to design and deliver a web-based application on the basis of the solution that we achieved in the research process. The outcome of the final results should indicate that the web-based application does actually help the users manage and share their personal information items on the web more efficient and effective.</p>
									<br><br>
								</div>
								<div class="col-md-7 col-md-offset-1" style="padding-top: 7em;">
									<a class="popup-link" href="images/papers.png">
										<img src="images/papers.png" alt="old hubtag website">
									</a>
								</div>
								
							</div>	
						</div>
					</div>



					<div class="section s3 extra-padding">
						<div class="container">
							<div class="row">
								<div class="col-md-offset-8" style="padding-left: 1.2em;">
									<img src="images/design.png" alt="Idea" style="display: inline-block; width: 55px;">
									<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Design</h1>
								</div>
								<br>
							</div>
							<div class="row">
								<div class="col-md-8">
									<a class="popup-link" href="images/poster.png">
										<img src="images/poster.png" alt="tagether poster">
									</a>
									<p style="margin-bottom: 3em;"></p>
								</div>
								<div class="col-md-4">
									<div class="tags">
			                            <ul class="tag">
			                            	<li><a>Sketch 3</a></li>
			                            	<li><a>iMovie</a></li>
			                            	<li><a>Web Design</a></li>
			                            	<li><a>UX/UI</a></li>
			                            	<li><a>Poster Design</a></li> 
			                            	<li><a>Video Production</a></li>
			                            </ul>
			                        </div> <!-- tags -->
									<p>The poster of Tagether project was designed with the concept of using the folder as the universal tagging. The logo derived from the user interface of the application and set the tone of the color palette of the poster design. The main body of the poster was to show the process of using the application in a real situation. The strategy was to communicate the steps of operating Tagether effectively and that involved the use of wonderfully crafted illustration. Features section was design at the bottom of the poster with clean and eye-catching icons to draw the attention of the audience.</p>
									<br><br>
								</div>
							</div>	
						</div>
					</div>

					<div class="section s4 extra-padding" style="padding-bottom:6em;">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div>
										<img src="images/cooperation.png" alt="cooperation" style="display: inline-block; width: 55px;">
										<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Cooperation</h1>
									</div>
									<br>
									<p>Working with the developer of our team, I designed the icon set, the main interface of the application and the functionalities inside the modal dialog in a iteration process. Also I was responsible for the promotion video of Tagether application for the Capstone Showcase Event.</p>
									<br><br>
									<p>You can download the Tagether Chrome Extension from the Google Chrome Web Store.</p>
									<br><br>
									<div class="visit_site pull-right">
										<a href="https://chrome.google.com/webstore/search/tagether?_category=extensions">Visit Chrome Web Store</a>
									</div>
									<br><br>
								</div>
							</div>	
						</div>
					</div>


					<div class="section s5 extra-padding">
						<div class="container">
							<div class="row">
								<div class="col-md-offset-8" style="padding-left: 1.2em;">
									<img src="images/presentation.png" alt="Presentation" style="display: inline-block; width: 65px;">
									<h1 style="display: inline-block; vertical-align: middle; padding-left: 10px; font-size: 20px; font-weight: 700; color: #ffbbe0;">Presentation</h1>
								</div>
								<br>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
										<iframe src="https://www.youtube.com/embed/vIIFtjPwI8w" frameborder="0" allowfullscreen></iframe>
									</div>
									<p style="padding-bottom: 3em;"></p>
								</div>
								<div class="col-md-4">
									<br>
									<p>Tags are increasingly favored in file management systems, especially for web applications. Nevertheless, though many applications leverage tags for rapid retrieval, they oftentimes fail to support in-situ tagging across web applications. Tagether introduces a novel way to use folder names as tags to manage new content from any web pages while maintaining your repository structure. Just select and save, it is that simple.</p>
									<br><br>
								</div>
								
								
							</div>	
							<p style="padding-bottom: 1em;"></p>
						</div>
					</div>

					<hr class="nav_hr">

					<div class="row portfolio-nav" style="padding-bottom:6em;">
	                    <div class="col-xs-7 col-md-10">
	                    	<a class="fa fa-arrow-left button" href="hubtag_dash.php"></a>
	                    </div>
	                    <div class="col-xs-5 col-md-2 nav-btn">
	                        <a class="fa fa-arrow-right button" href="kapler.php"></a>
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