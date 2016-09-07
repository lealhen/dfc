<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo" style="padding-top: 12px">
							<a class="" href="index.php"><img src="images/brand2.jpg" alt="" class="img-responsive" style="max-width: 750px; max-height: 60px; display: block;width: auto;height: auto;"></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php if ($_SESSION['logged']=="member") { ?>

				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--francisco">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item" id="home"><a href="index.php" class="menu__link"><span class="menu__helper">Home</span></a></li>
							<li class="menu__item" id="products"><a href="productsandservices.php" class="menu__link"><span class="menu__helper">Products</span></a></li>
							<li class="menu__item" id="products"><a href="fitoutservices.php" class="menu__link"><span class="menu__helper">Fitout Services</span></a></li>
							<li class="menu__item" id="products"><a href="leasingservices.php?ubelt" class="menu__link"><span class="menu__helper">Leasing Services</span></a></li>
							<li class="dropdown " style="">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="aboutus.php">Company Profile</a></li>
									<li><a href="#">Company Organizational Chart</a></li>
									<li><a href="#">Resumes of the Officers</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</li>
							<li class="menu__item" id="about"><a href="db.php?logout" onclick="return confirm('Are you sure you want to log out of your account?');" class="menu__link"><span class="menu__helper"></span>Log out</a></li>
						</ul>
					</nav>
				</div>

				<?php }elseif ($_SESSION['logged']=="admin") { ?>

					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--francisco">
							<ul class="nav navbar-nav menu__list">
								<li class="menu__item" id="home"><a href="index.php" class="menu__link"><span class="menu__helper">Home</span></a></li>
								<li class="menu__item" id="products"><a href="adm_products.php" class="menu__link"><span class="menu__helper">Products</span></a></li>
								<li class="menu__item" id="products"><a href="fitoutservices.php" class="menu__link"><span class="menu__helper">Fitout Services</span></a></li>
								<li class="menu__item" id="products"><a href="leasingservices.php?ubelt" class="menu__link"><span class="menu__helper">Leasing Services</span></a></li>
								<li class="dropdown " style="">
									<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="aboutus.php">Company Profile</a></li>
										<li><a href="#">Company Organizational Chart</a></li>
										<li><a href="#">Resumes of the Officers</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</li>
								<li class="menu__item" id="about"><a href="db.php?logout" onclick="return confirm('Are you sure you want to log out of your account?');" class="menu__link"><span class="menu__helper"></span>Log out</a></li>
							</ul>
						</nav>
					</div>
				<?php }else{ ?>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--francisco">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item" id="home"><a href="index.php" class="menu__link"><span class="menu__helper">Home</span></a></li>
							<li class="menu__item" id="products"><a href="productsandservices.php" class="menu__link"><span class="menu__helper">Products</span></a></li>
							<li class="menu__item" id="products"><a href="fitoutservices.php" class="menu__link"><span class="menu__helper">Fitout Services</span></a></li>
							<li class="menu__item" id="products"><a href="leasingservices.php?ubelt" class="menu__link"><span class="menu__helper">Leasing Services</span></a></li>
							<li class="dropdown " style="">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="aboutus.php">Company Profile</a></li>
									<li><a href="#">Company Organizational Chart</a></li>
									<li><a href="#">Resumes of the Officers</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</li>
							<li class="dropdown " style="">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&nbsp; &nbsp; &nbsp; Account <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="" data-toggle="modal" data-target=".login" class="">LOG IN</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">SIGN UP</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!--					<div class="phone">-->
					<!--						<p><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>Call- to -us <span>+0123 456 789</span></p>-->
					<!--					</div>-->
				</div>
				<?php } ?>


				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- //header -->

<div class="modal fade login" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">LOG IN</h4>
			</div>
			<form role="form" method="post" >
				<div class="modal-body">
					<div class="form-group"  >
						<input class="form-control" placeholder="Username" name="username" type="text" autofocus >
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Password" name="password" type="password" value="">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input class="btn btn-success" type="submit" value="Login" name="admin_login" >
				</div>
			</form>
		</div>
	</div>
</div>


