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
		<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.php">Home</a> / <span>Products & Services</span></h2>
	</div>
</div>
<!-- //banner -->
<!-- single -->
		<div class="">

			<div class="col-md-8">

				<?php if(isset($_GET['viewprod'])){
					$pid = $_GET['viewprod'];
					$sql = "SELECT * FROM products where prod_id='$pid'";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					?>
					<br>
					<br>
					<div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
						<section class="slider">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<div class="single-grid-left-grid">
											<img src="upload/<?php echo $row['prod_image'];?>" alt=" " class="img-responsive" style="height: 500px" />
											<div class="single-grid-left-grid1">
												<div class="single-grid-left-grid1-left">
													<h3><i class="glyphicon glyphicon-star"></i> <span>PHP <?php echo $row['prod_price'];?></span></h3>
												</div>
												<div class="single-grid-left-grid1-right">
													<h4><?php echo $row['prod_name'];?></h4>
													<p> <?php echo $row['prod_address'];?></p>
												</div>
												<div class="clearfix"> </div>
												<p class="fugiat text-justify">

													<?php echo $row['prod_desc'];?>
												</p>

												PLACES NEARBY:
												<ul>
													<!--													<li>PLACES NEARBY</li>-->
													<li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
															data-content="<?php echo $row['prod_school'];?>"
															data-html="true"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>School</a>
													</li>
													<li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
															data-content="<?php echo $row['prod_transpo'];?>"
															data-html="true"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>Transpo</a>
													</li>
													<li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
															data-content="<?php echo $row['prod_sm'];?>"
															data-html="true"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Supermarket</a>
													</li>
													<li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
															data-content="<?php echo $row['prod_mall'];?>"
															data-html="true"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>Malls</a>
													</li>
													<li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
															data-content="<?php echo $row['prod_resto'];?>"
															data-html="true"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>Resto</a>
													</li>
													<li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
															data-content="<?php echo $row['prod_hospital'];?>"
															data-html="true"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Hospital</a>
													</li>
													<li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
															data-content="<?php echo $row['prod_church'];?>"
															data-html="true"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Church</a>
													</li>

												</ul>
											</div>
										</div>
									</li>
							</div>
						</section>
						<!--FlexSlider-->
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script defer src="js/jquery.flexslider.js"></script>
						<script type="text/javascript">
							$(window).load(function(){
								$('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
										$('body').removeClass('loading');
									}
								});
							});
						</script>
						<!--End-slider-script-->
					</div>

					<br><br>
					<?php  } ?>
				<?php  } ?>

				<?php if(isset($_GET['viewlist'])){ ?>
					<div class="popular-posts" id="cbd">
						<h3 class="animated wow zoomIn text-center" data-wow-delay=".5s">Central Business District Units</h3>
						<div class="popular-posts-grids">
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">
								<div class="popular-posts-grid1">
									<a href="products.php?suarez"><img src="images/vistasuarez/suarez.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;"  /></a>
									<h4><a href="products.php?suarez">VISTA SUAREZ CEBU</a></h4>
									<p>116 Gorordo Avenue, Cebu City <br><br></p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".6s">
								<div class="popular-posts-grid1">
									<a href="products.php?salcedo"><img src="images/salcedo/salcedo.jpg" alt=" " class="img-responsive"  style="width: 640px;height: 205px;" /></a>
									<h4><a href="products.php?salcedo">SALCEDO SQUARE</a></h4>
									<p>106 L.P. Leviste Street, Salcedo Village, Makati City, 1227</p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">
								<div class="popular-posts-grid1">
									<a href="products.php?shaw"><img src="images/vistashaw/vistashaw.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;" /></a>
									<h4><a href="products.php?vistashaw">VISTA SHAW</a></h4>
									<p>515 Shaw Boulevard, corner Laurel Street, Mandaluyong City 1550</p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">
								<div class="popular-posts-grid1">
									<a href="products.php?wiltower"><img src="images/wiltower/wil.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;" /></a>
									<h4><a href="products.php?wiltower">WIL TOWER</a></h4>
									<p>34 Eugenio Lopez Drive, Quezon City 1103 <br></p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">
								<div class="popular-posts-grid1">
									<a href="products.php?currency"><img src="images/currency/currency.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;" /></a>
									<h4><a href="products.php?currency">CURRENCY</a></h4>
									<p>F. Ortigas Jr. Road, corner Julia Vargas Avenue, Ortigas Center, Pasig City 1605</p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">
								<div class="popular-posts-grid1">
									<a href="products.php?northpoint"><img src="images/vistarecto/recto.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;" /></a>
									<h4><a href="products.php?northpoint">NORTHPOINT</a></h4>
									<p>J. P. Laurel Avenue corner Dacudao Road, Bajada, Davao City 8000</p>
								</div>
							</div>
							<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">
								<div class="popular-posts-grid1">
									<a href="products.php?theloop"><img src="images/northpoint/north.jpg" alt=" " class="img-responsive" style="width: 640px;height: 205px;" /></a>
									<h4><a href="products.php?theloop">THE LOOP</a></h4>
									<p>Rosario Crescent Street, Limketkai Drive, Cagayan de Oro City, 9000</p><br>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				<?php } ?>




<!--				<div class="author">-->
<!--					<h3 class="animated wow zoomIn" data-wow-delay=".5s">Contact Person</h3>-->
<!--					<div class="author-grid animated wow slideInLeft" data-wow-delay=".5s">-->
<!--						<div class="author-grid-left">-->
<!--							<img src="images/6.png" alt=" " class="img-responsive "/>-->
<!--						</div>-->
<!--						<div class="author-grid-right">-->
<!--							<h4>Allen Rosy<span>Contractor Chief</span></h4>-->
<!--							<p>Nam libero tempore, cum soluta nobis est eligendi optio-->
<!--								cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis-->
<!--								voluptas assumenda est, omnis dolor repellendus.</p>-->
<!--							<ul class="social-nav model-8">-->
<!--								<li><a href="#" class="facebook"><i></i></a></li>-->
<!--								<li><a href="#" class="twitter"><i> </i></a></li>-->
<!--								<li><a href="#" class="g"><i></i></a></li>-->
<!--								<li><a href="#" class="p"><i></i></a></li>-->
<!--							</ul>-->
<!--						</div>-->
<!--						<div class="clearfix"> </div>-->
<!--					</div>-->
<!--				</div>-->
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
								<?php
								$sql = "SELECT * FROM category";
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()){
								?>
								<option value="products.php?viewlist=<?php echo $row['cat_id'];?>" <?php if($_GET['viewlist'] == $row['cat_id']){ ?> selected <?php } ?>><?php echo $row['catname'];?></option>

								<?php } ?>
						</select>
					</div>
				</div>

				<hr>
				<div class="blog-right1">
					<div class="" data-wow-delay=".5s">
						<h3 class="text-center">UNITS</h3><br>
				<select name="" id="" onChange="document.location = this.value" value="GO" class="form-control">
					<?php
					$sql2 = "SELECT * FROM category";
					$result2 = $conn->query($sql2);
					while ($row = $result2->fetch_assoc()){
					?>
				<?php if($_GET['viewprod'] == $row['prod_id']){
						$cid = $row['cat_id'];
						$sql = "SELECT * FROM products where cat_id='$cid'";
						$q = $conn->query($sql);
						while ($row = $q->fetch_assoc()){
					?>

						<option value="products.php?viewprod=<?php echo $row['prod_id'];?>" <?php if($_GET['view_prod'] == $row['prod_id']){?> selected <?php }?> ><?php echo $row['prod_name'];?></option>
						<?php } ?>
				<?php } ?>
				<?php } ?>


				</select>
				</div>
			</div>
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
<script>
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();
	});
</script>

<!-- //here ends scrolling icon -->
</body>
</html>