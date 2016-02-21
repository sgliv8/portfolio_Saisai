<!DOCTYPE html>
<html>
<head>
	<title>Qianqian Wang | Web Designer</title>
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
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->
	<!--gallery-->
	<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
	<!--/gallery-->

</head>
<body>

	<div>
		<div class="menu-wrap">
			<nav class="menu">
				<div class="icon-list">
					<a href="#" style="color: #c94e50;"><span style="font-size: 1em;">Portfolio</span></a>
					<a href="kidzjet_dash.php"><i class="fa fa-fw fa-paper-plane"></i><span style="font-size: 0.59em;">Kidzjet Dashboard</span></a>
					<a href="kidzjet_mobile.php"><i class="fa fa-fw fa-shopping-bag"></i><span style="font-size: 0.59em;">Kidzjet Mobile</span></a>
					<a href="mobolet.php"><i class="fa fa-fw fa-car"></i><span style="font-size: 0.59em;">Mobolet Mobile</span></a>
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
				<div class="banner" id="home">
					<div class="container"> 
						<div class="top-header row">
							<script src="js/classie.js"></script>
							<!--top-nav---->
							<div class="logo" style="width: 70px; margin-left: 20px; margin-top: -10px;">
								<a href="index.php"><img src="images/logo250.png" alt=""/></a>
							</div>
							
							<!---start-click-drop-down-menu----->
							        <!----start-dropdown--->
							         <script type="text/javascript">
										var $ = jQuery.noConflict();
											$(function() {
												$('#activator').click(function(){
													$('#box').animate({'top':'0px'},900);
												});
												$('#boxclose').click(function(){
												$('#box').animate({'top':'-1000px'},900);
												});
											});
											$(document).ready(function(){
											//Hide (Collapse) the toggle containers on load
											$(".toggle_container").hide(); 
											//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
											$(".trigger").click(function(){
												$(this).toggleClass("active").next().slideToggle("slow");
													return false; //Prevent the browser jump to the link anchor
											});
																
										});
									</script>
							<!---//End-click-drop-down-menu----->
							<div class="clearfix"> </div>
						</div>
						<div class="banner-info">
							<div class="banner-left">
								<img src="images/qq-img.png" alt=""/>
							</div>
							<div class="banner-right">
								<h1>I’M QIANQIAN</h1>
								<div class="border"></div>
								<h2>UI/UX DESIGNER</h2>
								<a href="Qianqianwang__resume.pdf">DOWNLOAD MY RESUME</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--/header-banner-->
				<!--about-->
				<div class="about text-center" id="about">
					<div class="container">
						<h3>ABOUT ME</h3>
						<div class="strip text-center"><img src="images/about-divider.png" alt=" "/></div>
						<div class="col-md-offset-1 col-md-10">
							<p style="text-align: left;">I have always been a person fascinated with visual design.  Even at a young age, I took every opportunity to help in designing posters and newspapers for my schools. Presently, with my library science background and web development knowledge, I possess a unique understanding of the nuances needed to satisfy user demand for information and how visual design affects their experience. In past few years, I have focused on incorporating the latest design trends, which have expanded my skillset.  I take great pride in my ability to think outside the box, and my attention to details have always generated successful results of an improved user experience. </p>

							<ul>
								<li><a class="linkedin" href="https://www.linkedin.com/in/qianqianwang222"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="facebook" href="https://www.facebook.com/emily.wang.5249349"><i class="fa fa-facebook"></i></a></li>
								<li><a class="instagram" href="https://instagram.com/antongshu/"><i class="fa fa-instagram"></i></a></li>
								<li><a class="twitter" href="https://twitter.com/antongshu222"><i class="fa fa-twitter"></i></a></li>
								<li><a class="google" href="https://plus.google.com/u/8/107672409988457871944/posts"><i class="fa fa-google"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--//about-->
				<!--portfolio-->
				<div class="gallery-section text-center" id="portfolio">
					<div class="container">
						<h3>PORTFOLIO</h3>
						<div class="strip text-center"><img src="images/divider.png" alt=" "/></div>
						<p></p>
						<div class="gallery-grids">
							<div class="top-gallery">
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="kidzjet_dash.php"><img src="images/p1.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Kidzjet Dashboard</h4>
											<p>WEB DESIGN</p>
											<div class="button"><a href="hubtag_web.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="kidzjet_mobile.php"><img src="images/p1.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Kidzjet Mobile APP</h4>
											<p>MOBILE APP DESIGN</p>
											<div class="button"><a href="hubtag_web.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="mobolet.php"><img src="images/p1.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Mobolet Mobile APP</h4>
											<p>MOBILE APP DESIGN</p>
											<div class="button"><a href="hubtag_web.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="hubtag_web.php"><img src="images/p1.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Hubtag Website</h4>
											<p>WEB DESIGN</p>
											<div class="button"><a href="hubtag_web.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="hubtag_dash.php"><img src="images/p2.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Hubtag Caster Dashboard</h4>
											<p>WEB DESIGN</p>
											<div class="button"><a href="hubtag_dash.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="kapler.php"><img src="images/p3.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>404 Page -- KAPLER</h4>
											<p>WEB DESIGN</p>
											<div class="button"><a href="kapler.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="handcraft.php"><img src="images/p6.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Q' HANDCRAFT Website</h4>
											<p>WEB DESIGN</p>
											<div class="button"><a href="handcraft.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="tagether.php"><img src="images/p4.png" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Tagether -- Chrome Extension</h4>
											<p>APP UI DESIGN</p>
											<div class="button"><a href="tagether.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-sm-6 gallery-grid gallery1">
									<a href="banana.php"><img src="images/p5.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4>Juice Store -- Why Not Banana?</h4>
											<p>WEB DESIGN</p>
											<div class="button"><a href="banana.php">VIEW</a></div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
								<link rel="stylesheet" href="css/swipebox.css">
								<script src="js/jquery.swipebox.min.js"></script> 
									<script type="text/javascript">
										jQuery(function($) {
											$(".swipebox").swipebox();
										});
									</script>
						</div>
					</div>
				</div>
				<!--//portfolio-->

				<!--new section-->
				<div class="content">	
					<div class="gallery">
						<h3>PROJECTS</h3>
						<div class="strip text-center"><img src="images/process-divider.png" alt=" "/></div>
						<div class="gallery-grids">
						<ul>
							<li>
								<a href="images/g1.jpg">
									<img src="images/g1.jpg" alt="" />	
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g2.jpg">
									<img src="images/g2.jpg" alt="" />
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li class="special">
								<a href="images/g3.jpg">
									<img src="images/g3.jpg" alt="" />
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g4.jpg">
									<img src="images/g4.jpg" alt="" />	
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g5.jpg">
									<img src="images/g5.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li class="special">
								<a href="images/g6.jpg">
									<img src="images/g6.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g7.jpg">
									<img src="images/g7.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g8.jpg">
									<img src="images/g8.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g9.jpg">
									<img src="images/g9.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g10.jpg">
									<img src="images/g10.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li class="special">
								<a href="images/g11.jpg">
									<img src="images/g11.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
							<li>
								<a href="images/g2.jpg">
									<img src="images/g2.jpg" alt="" />								
									<div class="glry-bgd">
									</div>
								</a>
							</li>
						</ul>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<!--//gallery -->
				<!--//new section-->

				<div class="strip-border"><p></p></div>

				<div class="services-back"></div>
				<!-- <div class="about-back"></div> -->
				<!--my skill-->
				<div class="my-skills text-center">
					<div class="container">
						<h3>MY SKILLS</h3>
						<div class="strip text-center"><img src="images/skill-divider.png" alt=" "/></div>
						<div class="skill-grids">
									<div class="col-md-2 col-md-offset-1 skills-grid text-center">
										<div class="circle" id="circles-1"></div>
										<p>Photoshop</p>
									</div>
									<div class="col-md-2 skills-grid text-center">
										<div class="circle" id="circles-2"></div>
										<p>Illustrator</p>
									</div>
									<div class="col-md-2 skills-grid text-center">
										<div class="circle" id="circles-3"></div>
										<p>Sketch 3</p>
									</div>
									<div class="col-md-2 skills-grid text-center">
										<div class="circle" id="circles-4"></div>
										<p>Html 5 / CSS 3</p>
									</div>
									<div class="col-md-2 skills-grid text-center">
										<div class="circle" id="circles-5"></div>
										<p>After Effect</p>
									</div>
									<div class="clearfix"> </div>
								 <script type="text/javascript" src="js/circles.js"></script>
									         <script>
												var colors = [
														['#e7a5d1', '#ffffff'], ['#e7a5d1', '#ffffff'], ['#e7a5d1', '#ffffff'], ['#e7a5d1', '#ffffff'], ['#e7a5d1', '#ffffff'], ['#e7a5d1', '#ffffff']
													];
												for (var i = 1; i < 6; i++) {
													var child = document.getElementById('circles-' + i);
													var percentage;

													if(i === 1){
														percentage = 90;
													}else if(i === 2){
														percentage = 85;
													}else if(i === 3){
														percentage = 85;
													}else if(i === 4){
														percentage = 80;
													}else if(i === 5){
														percentage = 65;
													}
														
														
													Circles.create({
														id:         child.id,
														percentage: percentage,
														radius:     80,
														width:      10,
														number:   	percentage / 1,
														text:       '%',
														colors:     colors[i - 1]
													});
												}
										
								</script>
						</div>
					</div>	
				</div>
				<!--//my skill-->

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