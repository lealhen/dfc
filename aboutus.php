<?php
include "db.php";
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
<div class="company">
	<div class="container">
		<br><br>
		<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.php">Company Profile</a></h2>
	</div>
</div>
<div>
	<br><br>
	<img src="images/brand2.jpg" alt="" class="img img-responsive img-thumbnail center-block">
	<br><br><br>

	


	



<div class="company2">
	<div class="container-fluid">

		<div class="row">

			<div class="col-md-4 animated slideInDown">
				<p class="text-center" style="font-size: 800%; color: aquamarine"><i class="glyphicon glyphicon-check"></i></p>
				<h3	 class="text-center" style="color: whitesmoke;">Registered with the SEC in May 2016</h3>
			</div>

			<div class="col-md-4 animated slideInUp">
				<hr>
				<p class="text-center" style="font-size: 800%; color: lightyellow"><i class="glyphicon glyphicon-level-up"></i></p>
				<h3	 class="text-center" style="color: whitesmoke;">
					Provides real estate services in Property Consultancy, Property Management, Leasing Services, Buying & Selling of Property
				</h3>
				<hr>
			</div>
			<div class="col-md-4 animated slideInDown">
				<p class="text-center" style="font-size: 800%; color: aquamarine"><i class="glyphicon glyphicon-link"></i></p>
				<h3	 class="text-center" style="color: whitesmoke;">Affiliate of Vista Land Marketing Pte Ltd in Singapore</h3>
			</div>

		</div>
	</div>
</div>

<div><br><br></div>

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
					<input type="email" name="Email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email...';}" required="">
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
<script>
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();
	});
</script>
<!-- //here ends scrolling icon -->
</body>
</html>