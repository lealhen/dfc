<?php
include "db.php";
session_start();

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
<div class="banner2">
	<div class="container">
		<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.php">Home</a> / <span>Leasing Services</span></h2>
	</div>
</div>
<!-- //banner -->
<!-- single -->
		<div class="">

			<div class="col-md-8">

			


				<?php if(isset($_GET['ubelt'])){ ?>
					<div class="popular-posts" id="ubelt">
					<h3 class="animated wow zoomIn text-center" data-wow-delay=".5s">University Belt Units</h3>
					<div class="popular-posts-grids">
						<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">
							<div class="popular-posts-grid1">
								<a href="leasingservices.php?katipunan"><img src="images/katipunan/katipunan.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;"  /></a>
								<h4><a href="leasingservices.php?katipunan">POINTE KATIPUNAN</a></h4>
								<p>Katipunan Avenue cor. B.Gonzales, Quezon City 1105</p>
							</div>
						</div>
						<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".6s">
							<div class="popular-posts-grid1">
								<a href="leasingservices.php?melissa"><img src="images/brenthill/brenthill.jpg" alt=" " class="img-responsive"  style="width: 640px;height: 205px;" /></a>
								<h4><a href="leasingservices.php?melissa">MELISSA'S CONDO</a></h4>
								<p>9 Yangco Road, Upper Pacdal, Baguio City 2600</p>
							</div>
						</div>


						<div class="clearfix"> </div>
					</div>
				</div>
				<?php } ?>
				<?php if(isset($_GET['cbd'])){ ?>
					<div class="popular-posts" id="cbd">
					<h3 class="animated wow zoomIn text-center" data-wow-delay=".5s">Central Business District Units</h3>
					<div class="popular-posts-grids">
						<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".6s">
							<div class="popular-posts-grid1">
								<a href="leasingservices.php?salcedo"><img src="images/salcedo/salcedo.jpg" alt=" " class="img-responsive"  style="width: 640px;height: 205px;" /></a>
								<h4><a href="leasingservices.php?salcedo">SALCEDO SQUARE</a></h4>
								<p>106 L.P. Leviste Street, Salcedo Village, Makati City, 1227</p>
							</div>
						</div>


						<div class="clearfix"> </div>
					</div>
				</div>
				<?php } ?>
				<?php if(isset($_GET['industrial'])){ ?>
					<div class="popular-posts" id="industrial">
						<h3 class="animated wow zoomIn text-center" data-wow-delay=".5s">Industrial-Residential Units</h3>
						<div class="popular-posts-grids">
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">
								<div class="popular-posts-grid1">
									<a href="leasingservices.php?tivoli"><img src="images/tivoli/tivoli.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;"  /></a>
									<h4><a href="leasingservices.php?tivoli">TIVOLI GARDEN RESIDENCES</a></h4>
									<p>69 Coronado, Mandaluyong, 1550 Metro Manila</p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">
								<div class="popular-posts-grid1">
									<a href="leasingservices.php?trevi"><img src="images/laureanoditrevi/trevi.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;"  /></a>
									<h4><a href="leasingservices.php?trevi">LAUREANO DI TREVI</a></h4>
									<p>2216 Calle Estacion Street, Chino Roces Avenue, Makati City, 1230</p>
								</div>
							</div>

							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">
								<div class="popular-posts-grid1">
									<a href="leasingservices.php?pinecrest"><img src="images/pinecrest/pinecrest.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;" /></a>
									<h4><a href="leasingservices.php?pinecrest">PINE CREST</a></h4>
									<p>Balete Drive, New Manila Quezon City, 1100</p>
								</div>
							</div>






							<!--						<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".6s">-->
							<!--							<div class="popular-posts-grid1">-->
							<!--								<a href="symphony.php"><img src="images/symphonytower/symphony.jpg" alt=" " class="img-responsive"  style="width: 640px;height: 205px;" /></a>-->
							<!--								<h4><a href="symphony.php">THE SYMPHONY TOWERS</a></h4>-->
							<!--								<p>6 Sgt. Esguerra Street, South Triangle, Quezon City 1103</p>-->
							<!--							</div>-->
							<!--						</div>-->
							<!--						<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">-->
							<!--							<div class="popular-posts-grid1">-->
							<!--								<a href="cerritos.php"><img src="images/cerritosresidences/cerritos.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;" /></a>-->
							<!--								<h4><a href="cerritos.php">CERRITOS RESIDENCES</a></h4>-->
							<!--								<p>Mercedes Avenue, San Miguel, Pasig, Metro Manila, 1600</p>-->
							<!--							</div>-->
							<!--						</div>-->



							<div class="clearfix"> </div>
						</div>
					</div>
				<?php } ?>

				<?php include "l_ubelt.php"; ?>
				<?php include "l_industrial.php"; ?>
				<?php include "l_cbd.php"; ?>

				<div class="author">
					<h3 class="animated wow zoomIn" data-wow-delay=".5s">Contact Person</h3>
					<div class="author-grid animated wow slideInLeft" data-wow-delay=".5s">
						<div class="author-grid-left">
							<img src="images/6.png" alt=" " class="img-responsive "/>
						</div>
						<div class="author-grid-right">
							<h4>Allen Rosy<span>Contractor Chief</span></h4>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio
								cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
								voluptas assumenda est, omnis dolor repellendus.</p>
							<ul class="social-nav model-8">
								<li><a href="#" class="facebook"><i></i></a></li>
								<li><a href="#" class="twitter"><i> </i></a></li>
								<li><a href="#" class="g"><i></i></a></li>
								<li><a href="#" class="p"><i></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
<!--				<div class="leave-reply">-->
<!--					<h3 class="animated wow zoomIn" data-wow-delay=".5s">Leave a Reply</h3>-->
<!--					<form action="#" method="post">-->
<!--						<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>-->
<!--						<input type="text" name="Name" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}" required="">-->
<!--						<input type="email" name="Email" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" required="">-->
<!--						<input type="text" name="Subject" value="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject...';}" required="">-->
<!--						<input type="submit" value="Submit" >-->
<!--					</form>-->
<!--				</div>-->
			</div>


			<div class="col-md-4 single-grid-right">
				<br><br>
				<hr>
				<div class="blog-right1">
					<div class="" data-wow-delay=".5s">
						<h3 class="text-center">C A T E G O R I E S</h3><br>
						<select name="" id="" onChange="document.location = this.value" value="GO" class="form-control">

								<option value="leasingservices.php?ubelt" <?php if(isset($_GET['ubelt']) or isset($_GET['katipunan']) or isset($_GET['melissa'])){ ?> selected <?php } ?>>University Belt Units</option>
								<option value="leasingservices.php?cbd" <?php if(isset($_GET['cbd']) or isset($_GET['salcedo'])){ ?> selected <?php } ?>>Central Business District Units</option>
								<option value="leasingservices.php?industrial" <?php if(isset($_GET['industrial']) or isset($_GET['tivoli']) or isset($_GET['trevi']) or isset($_GET['pinecrest'])){?> selected <?php } ?>>Industrial-Residential Units</option>


						</select>
					</div>
				</div>
				<?php if(isset($_GET['ubelt']) or isset($_GET['katipunan']) or isset($_GET['melissa']) )  { ?>
					<hr>
					<div class="blog-right1">
						<div class="" data-wow-delay=".5s">
							<h3 class="text-center">University Belt Units</h3><br>
							<a href="leasingservices.php?katipunan" class=" btn btn-md more hvr-shutter-in-vertical text-success btn-block">Pointe Katipunan</a>
							<a href="leasingservices.php?melissa" class=" btn btn-md more hvr-shutter-in-vertical text-success btn-block">Melissa's Condo</a>
						</div>
					</div>
				<?php } ?>
				<?php if(isset($_GET['cbd']) or isset($_GET['salcedo'])  ){ ?>
					<hr>
					<div class="blog-right1">
						<div class="" data-wow-delay=".5s">
							<h3 class="text-center">Central Business District</h3><br>
							<a href="leasingservices.php?salcedo" class=" btn btn-md more hvr-shutter-in-vertical text-success btn-block">Salcedo Square</a>
						</div>
					</div>
				<?php } ?>
				<?php if(isset($_GET['industrial']) or isset($_GET['tivoli']) or isset($_GET['trevi']) or isset($_GET['pinecrest']) ){ ?>
					<hr>
					<div class="blog-right1">
						<div class="" data-wow-delay=".5s">
							<h3 class="text-center">Industrial-Residential Units</h3><br>
							<a href="leasingservices.php?tivoli" class=" btn btn-md more hvr-shutter-in-vertical text-success btn-block">Tivoli Garden</a>
							<a href="leasingservices.php?trevi" class=" btn btn-md more hvr-shutter-in-vertical text-success btn-block">Laureano Di Trevi</a>
							<a href="leasingservices.php?pinecrest" class=" btn btn-md more hvr-shutter-in-vertical text-success btn-block">Pine Crest</a>
						</div>
					</div>
				<?php } ?>


			</div>
			<div class="clearfix"> </div>
		</div>
<!-- //single -->
<!-- footer -->
<br>
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