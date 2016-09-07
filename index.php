<?php
include "db.php";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();

//if ($_SESSION['logged']!="admin") {
//	header('Location: index.php');
//}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Domus Fortem Corporation</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Domus Fortem Corporation" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- gallery -->
<link href='css/simplelightbox.css' rel='stylesheet' type='text/css'>
<!-- //gallery -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="manifest" href="images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->

</head>
	
<body>
<!-- header -->
<?php include("header.php");?>
<!-- //header -->
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.php">Home</a> / <span>Domus Fortem Corporation</span></h2>
		</div>
	</div>
<!-- //banner -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-grids">
				<div class="col-md-8 single-grid-left">

					<?php
					$sql = "SELECT * FROM videos where vid_isfeat = 1";
					$r = $conn->query($sql);
					while($row = $r->fetch_assoc()){
					?>
					<div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
						<section class="slider">
							<div class="flexslider">
										<div class="single-grid-left-grid">
											<div class="embed-responsive embed-responsive-16by9"  >
												<iframe class="embed-responsive-item" width="854" height="480" src="<?php echo $row['vid_link'];?>" frameborder="0" allowfullscreen></iframe>
											</div>
											<div class="single-grid-left-grid1">
												<div class="single-grid-left-grid1-left">
<!--													<h3>30 <span>May</span></h3>-->
												</div>
												<div class="single-grid-left-grid1-right">
													<h4><?php echo $row['vid_title'];?></h4>
												</div>
												<div class="clearfix"> </div>

											</div>
										</div>
							</div>
						</section>
					</div>
					<?php } ?>


					<div class="popular-posts">
						<h3 class="animated wow zoomIn" data-wow-delay=".5s">More Videos</h3>
						<div class="popular-posts-grids">
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">	
								<div class="popular-posts-grid1">
									<a href="single.php"><img src="images/11.jpg" alt=" " class="img-responsive" /></a>
									<h4><a href="single.php">doloribus asperiores</a></h4>
									<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".6s">
								<div class="popular-posts-grid1">
									<a href="single.php"><img src="images/4.jpg" alt=" " class="img-responsive" /></a>
									<h4><a href="single.php">rerum hic tenetur</a></h4>
									<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">
								<div class="popular-posts-grid1">
									<a href="single.php"><img src="images/12.jpg" alt=" " class="img-responsive" /></a>
									<h4><a href="single.php">saepe eveniet ut et</a></h4>
									<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>


				<div class="col-md-4 single-grid-right">
					<div class="blog-right1">
						<div class="categories animated wow slideInUp" data-wow-delay=".5s">
							<h3>Articles</h3>
							<ul>
								<li><a href="#">Aliquam dapibus tincidunt</a></li>
								<li><a href="#">Donec sollicitudin molestie</a></li>
								<li><a href="#">Fusce feugiat malesuada odio</a></li>
								<li><a href="#">Cum sociis natoque penatibus</a></li>
							</ul>
						</div>

						<div class="related-posts">
							<h3>Upcoming Events</h3>
							<div class="related-post animated wow slideInUp" data-wow-delay=".5s">
								<div class="related-post-left">
									<a href="single.php"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="related-post-right">
									<h4><a href="single.php">Donec sollicitudin</a></h4>
									<p>Aliquam dapibus tincidunt metus. 
										<span>Praesent justo dolor, lobortis.</span>
									</p>
									<ul>
										<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 10:00 AM</li>
										<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 5 May 2016</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="related-post animated wow slideInUp" data-wow-delay=".5s">
								<div class="related-post-left">
									<a href="single.php"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="related-post-right">
									<h4><a href="single.php">tincidunt metus</a></h4>
									<p>Aliquam dapibus tincidunt metus. 
										<span>Praesent justo dolor, lobortis.</span>
									</p>
									<ul>
										<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 11:30 AM</li>
										<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 9 May 2016</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="related-post animated wow slideInUp" data-wow-delay=".5s">
								<div class="related-post-left">
									<a href="single.php"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="related-post-right">
									<h4><a href="single.php">earum rerum hic</a></h4>
									<p>Aliquam dapibus tincidunt metus. 
										<span>Praesent justo dolor, lobortis.</span>
									</p>
									<ul>
										<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 12:30 PM</li>
										<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 17 May 2016</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="related-post animated wow slideInUp" data-wow-delay=".5s">
								<div class="related-post-left">
									<a href="single.php"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="related-post-right">
									<h4><a href="single.php">saepe eveniet ptates</a></h4>
									<p>Aliquam dapibus tincidunt metus. 
										<span>Praesent justo dolor, lobortis.</span>
									</p>
									<ul>
										<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 2:00 PM</li>
										<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 23 May 2016</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single -->
<!-- footer -->
	<div class="footer">	
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
						quam nihil molestiae consequatur.</p>
					<div class="social">
						<ul class="social-nav model-8">
							<li><a href="#" class="facebook"><i></i></a></li>
							<li><a href="#" class="twitter"><i> </i></a></li>
							<li><a href="#" class="g"><i></i></a></li>
							<li><a href="#" class="p"><i></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Subscribe</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis.</p>
					<form action="#" method="post">
						<input type="email" name="Email" value="Enter Your Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email...';}" required="">
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Latest Tweets</h3>
					<ul class="footer-grid-list">
						<li>Nam libero tempore, cum soluta nobis est eligendi optio 
							cumque nihil impedit. <span>1 day ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">KWEsa@mail.com</a>
							cumque nihil impedit. <span>1 day ago</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-grids1">
				<div class="footer-grids1-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="short-codes.php">Short Codes</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="mail.php">Mail Us</a></li>
					</ul>
				</div>
				<div class="footer-grids1-right">
					<p class="animated wow slideInRight" data-wow-delay=".5s">&copy 2016 Acreage. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>