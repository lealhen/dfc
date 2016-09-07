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
<!-- banner-slider -->
<script type="text/javascript" src="js/jquery.devrama.slider-0.9.4.js"></script>
<!-- //banner-slider -->
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
<!-- banner -->
<div class="example-animation">
	<div data-lazy-background="images/banner.jpg" class="banner">
		<div class="container">
			<div class="banner-info">
				<h3>Vista Suarez</h3>
				<p>116 Gorordo Avenue, Cebu City</p>
				<div class="more">
					<a href="products.php?suarez" class="hvr-shutter-in-vertical">Learn More...</a>
				</div>
			</div>
		</div>
	</div>
	<div data-lazy-background="images/banner1.jpg" class="banner">
		<div class="container">
			<div class="banner-info">
				<h3>Salcedo Square</h3>
				<p>106 L.P. Leviste Street, Salcedo Village, Makati City, 1227</p>
				<div class="more">
					<a href="products.php?salcedo" class="hvr-shutter-in-vertical">Learn More...</a>
				</div>
			</div>
		</div>
	</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.example-animation').DrSlider(); //Yes! that's it!
	});
</script>
<!-- //banner -->
<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Services</h3>
			<p class="qui animated wow zoomIn" data-wow-delay=".5s">

			</p>
			<div class="services-grids">
				<div class="col-md-6 services-grids-left">
					<div class="services-grids-left-grids">
						<div class="services-grids-left-grid1">
							<div class="services-grids-left-grid animated wow slideInLeft" data-wow-delay=".5s">
<!--								<h5>25th April 2016</h5>-->
								<h4>University Belt Units</h4>
								<p>University Belt is a selection of
									value priced mid and high-rise towers strategically located within
									university clusters in the country’s top cities.</p>
								<div class="more">
									<a href="#ubelt" class="hvr-shutter-in-vertical">Learn More...</a>
								</div>
							</div>
							<div class="services-grids-left-grid1-pos">
								<span></span>
							</div>
						</div>
						<div class="services-grids-left-grid1">
							<div class="services-grids-left-grid animated wow slideInLeft" data-wow-delay=".5s">
<!--								<h5>30 April 2016</h5>-->
								<h4>Industrial-Residential Units</h4>
								<p>Here comes the condominium towers nestling on top of
									key transport and nearby places for the residents' convenience.</p>
								<div class="more">
									<a href="#ind" class="hvr-shutter-in-vertical">Learn More...</a>
								</div>
							</div>
							<div class="services-grids-left-grid3-pos">
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 services-grids-right">
					<div class="services-grids-right-grids">
						<div class="services-grids-left-grid1">
							<div class="services-grids-left-grid services-grids-right-grid animated wow slideInRight" data-wow-delay=".5s">
<!--								<h5>28th April 2016</h5>-->
								<h4>Central Business District Units</h4>
								<p>This is a collection of systematically engineered and fabulously designed towers
									that stand centrally within one of Metro Manila’s
									Central Business Districts (CBDs).</p>
								<div class="more">
									<a href="#cbd" class="hvr-shutter-in-vertical">Learn More...</a>
								</div>
							</div>
							<div class="services-grids-left-grid2-pos">
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="service-grids-bottom animated wow slideInUp" data-wow-delay=".5s">
				<h2>We promise to keep building and managing
					preferred condominiums in the most
					desired locations in the country.</h2>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<div class="col-md-3 services-bottom-left">
<!--				<p class="counter">89,147</p>-->
				<h3>relaxing</h3>
				<div class="services-bottom-left-grid hvr-shutter-in-horizontal">
					<i class="glyphicon glyphicon-glass" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-3 services-bottom-left">
<!--				<p class="counter">99,434</p> -->
				<h3>secured</h3>
				<div class="services-bottom-left-grid hvr-shutter-in-horizontal">
					<i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-3 services-bottom-left">
<!--				<p class="counter">76,454</p> -->
				<h3>convenient</h3>
				<div class="services-bottom-left-grid hvr-shutter-in-horizontal">
					<i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-3 services-bottom-left">
<!--				<p class="counter">45,000</p> -->
				<h3>accessible</h3>
				<div class="services-bottom-left-grid hvr-shutter-in-horizontal">
					<i class="glyphicon glyphicon-ok" aria-hidden="true"></i>
				</div>
			</div>
			<div class="clearfix"> </div>
			<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 


			<!-- //Stats-Number-Scroller-Animation-JavaScript -->
		</div>
	</div>
	<div class="container-fluid">
		<?php
			$query = "SELECT * FROM category";
			$rs = $conn->query($query);
			while($r = $rs->fetch_assoc()){
		?>

		<div class="popular-posts" id="<?php echo $r['shortname'];?>">
			<div class="row">
				<div class="col-md-4">
					<h3 class="animated wow zoomIn" data-wow-delay=".5s"><?php echo $r['catname'];?></h3>
				</div>
				<div class="col-md-2 more">
					<a href="products.php?viewlist=<?php echo $r['cat_id'];?>" class="btn hvr-shutter-in-horizontal">SEE MORE</a>
				</div>
			</div>
			<div class="popular-posts-grids">
				<?php
					$catid = $r['cat_id'];
					$sql = "SELECT * FROM products WHERE cat_id=$catid limit 3";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							 ?>

							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">
								<div class="popular-posts-grid1">
									<a href="upload/<?php echo $row['prod_image'];?>"><img src="upload/<?php echo $row['prod_image'];?>" alt=" " class="img-responsive" style="width: 640px;height: 205px;"  /></a>
									<h4><a href="products.php?viewprod=<?php echo $row['prod_id'];?>"><?php echo $row['prod_name'];?></a></h4>
									<p><?php echo $row['prod_address'];?></p>
								</div>
							</div>

							<?php
						}
					} else {
						echo "No products created.";
					} ?>




				<div class="clearfix"> </div>
			</div>
		</div>

		<?php } ?>


	</div>

<!-- //services-bottom -->
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
						<li class="active"><a href="index.php">Home</a></li>
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

		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
		$(function () {
			$('[data-toggle="popover"]').popover()
		});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>