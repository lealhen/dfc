<?php
include "db.php";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
if ($_SESSION['logged']!="admin") {
	header('Location: index.php');
}
$username = $_SESSION['uname'];

if(isset($_POST['addvid'])){

	$vidname = $_POST['vid_title'];
	$detail = $_POST['vid_detail'];
	$link = $_POST['vid_link'];


	$target = "upload/";
	$target = $target . basename( $_FILES['uploaded']['name']) ;
	$name= $_FILES['uploaded']['name'];
	$ok=1;
	$type = $_FILES['uploaded']['type'];
	$name = $_FILES['uploaded']['name'];
	$dot = strripos($name,".");
	$ext = substr($name,$dot);

	if ($ext ==".jpg" || $ext ==".jpeg" ||  $ext ==".png" || $ext ==".PNG" || $ext ==".gif" || $ext ==".JPG" || $ext ==".GIF" || $ext ==".JPEG"){
		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)){
			$sql = "insert into `videos` 
								(`vid_title`,`vid_detail`,`vid_link`,`vid_thumbpic`,`vid_dateadded`)
								values
								('$vidname','$detail','$link','$name',CURDATE())";
			$result = $conn->query($sql);
			echo "<script>alert('Successfully added!');</script>";

		}
		else {

			echo "<script>alert('Upload failed, please check your file.');</script>";

		}
	}
	else{
		?>
		<script>
		alert('Please upload a picture.');
		window.location.href='admin.php?videos';
		</script>
		<?php
	}
}

if(isset($_POST['addprod'])) {

	$school = addslashes($_POST['prod_school']);
	$transpo = addslashes($_POST['prod_transpo']);
	$sm = addslashes($_POST['prod_sm']);
	$mall = addslashes($_POST['prod_mall']);
	$resto = addslashes($_POST['prod_resto']);
	$hospital = addslashes($_POST['prod_hospital']);
	$church = addslashes($_POST['prod_church']);
	$prodname = addslashes($_POST['prod_name']);
	$address = addslashes($_POST['prod_address']);

	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$name= $_FILES['fileToUpload']['name'];
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "<script>alert('File is not an image.');</script>";

		$uploadOk = 0;
	}

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "<script>alert('Sorry, file already exists.');</script>";
		$uploadOk = 0;
	}
// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "<script>alert('Sorry, your file is too large.');</script>";

		$uploadOk = 0;
	}
// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";

		$uploadOk = 0;
	}
// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "<script>alert('Sorry, your file was not uploaded.');</script>";

// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			$q2 = "SELECT * FROM products WHERE prod_name='$prodname'";
			$run = $conn->query($q2);
			if($run -> num_rows > 0){
				echo "<script>alert('Product already exists!');</script>";
			}else {
				$query = "INSERT INTO products
                              (prod_image, prod_name, cat_id, prod_address, prod_price, prod_desc, prod_school, prod_transpo, prod_sm, prod_mall, prod_resto, prod_hospital, prod_church)
                              VALUES
                              ('$name', '$prodname', '$_POST[cat_id]', '$address', '$_POST[prod_price]', '$_POST[prod_desc]', '$school', '$transpo', '$sm', '$mall',  '$resto', '$hospital', '$church')
                  ";
				$res = $conn->query($query);
				echo "<script>alert('Successfully added!');</script>";
			}
		} else {
			echo "<script>alert('Sorry, there was an error uploading your file.');</script>";


		}
	}
}

if(isset($_POST['updateprod'])) {
	$school = addslashes($_POST['prod_school']);
	$transpo = addslashes($_POST['prod_transpo']);
	$sm = addslashes($_POST['prod_sm']);
	$mall = addslashes($_POST['prod_mall']);
	$resto = addslashes($_POST['prod_resto']);
	$hospital = addslashes($_POST['prod_hospital']);
	$church = addslashes($_POST['prod_church']);
	$prodname = addslashes($_POST['prod_name']);
	$address = addslashes($_POST['prod_address']);
	$pid = $_GET['editprod'];
	$pic=$_POST['wew'];
	$target = "upload/";
	$target = $target . basename( $_FILES['uploaded']['name']) ;
	$name= $_FILES['uploaded']['name'];
	$ok=1;
	$dot = strripos($name,".");
	$ext = substr($name,$dot);
	if ($ext ==".jpg" || $ext ==".jpeg" ||  $ext ==".png" || $ext ==".PNG" || $ext ==".gif" || $ext ==".JPG" || $ext ==".GIF" || $ext ==".JPEG"){

		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
		{
			$query = "UPDATE products SET prod_image='$name', prod_name='$prodname', cat_id='$_POST[cat_id]', prod_address='$address', prod_price='$_POST[prod_price]', prod_desc='$_POST[prod_desc]', prod_school='$school', prod_transpo='$transpo', prod_sm='$sm', prod_mall='$mall', prod_resto='$resto', prod_hospital='$hospital', prod_church='$church' WHERE prod_id='$pid'";
			$res = $conn->query($query);
			?>
			<script>
				alert('Successfully updated!');
				window.location.href='admin.php?editprod=<?php echo $pid; ?>';
			</script>
			<?php
		}

	}else{
		$query2 = "UPDATE products SET  prod_name='$prodname', cat_id='$_POST[cat_id]', prod_address='$address', prod_price='$_POST[prod_price]', prod_desc='$_POST[prod_desc]', prod_school='$school', prod_transpo='$transpo', prod_sm='$sm', prod_mall='$mall', prod_resto='$resto', prod_hospital='$hospital', prod_church='$church' WHERE prod_id='$pid'";
		$res2 = $conn->query($query2);
		?>
		<script>
			alert('Successfully updated!');
			window.location.href='admin.php?editprod=<?php echo $pid; ?>';
		</script>
		<?php
	}
}

if(isset($_POST['updatevid'])) {
	$pid = $_GET['editvid'];
	$pic=$_POST['wew'];
	$target = "upload/";
	$target = $target . basename( $_FILES['uploaded']['name']) ;
	$name= $_FILES['uploaded']['name'];
	$ok=1;
	$dot = strripos($name,".");
	$ext = substr($name,$dot);
	if ($ext ==".jpg" || $ext ==".jpeg" ||  $ext ==".png" || $ext ==".PNG" || $ext ==".gif" || $ext ==".JPG" || $ext ==".GIF" || $ext ==".JPEG"){

		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
		{
			$query = "UPDATE videos SET vid_thumbpic='$name', vid_title='$_POST[vid_title]', vid_detail='$_POST[vid_detail]',  vid_link='$_POST[vid_link]' WHERE vid_id='$pid'";
			$res = $conn->query($query);
			?>
			<script>
				alert('Successfully updated!');
				window.location.href='admin.php?videos';
			</script>
			<?php
		}

	}else{
		$query = "UPDATE videos SET vid_thumbpic='$name', vid_title='$_POST[vid_title]', vid_detail='$_POST[vid_detail]',  vid_link='$_POST[vid_link]' WHERE vid_id='$pid'";
		$res = $conn->query($query);
		?>
		<script>
			alert('Successfully updated!');
			window.location.href='admin.php?videos';
		</script>
		<?php
	}
}


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
		<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.php">Home</a> / <span>ADMIN DASHBOARD</span></h2>
	</div>
</div>
<!-- //banner -->
<!-- single -->
		<div class="">

			<div class="col-md-8">

				<?php if (isset($_GET['categories'])){?>
					<br>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Setup</a></li>
						<li class="active">Manage Categories</li>
					</ol>
					<div>
						<!--					<button TYPE="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">ADD NEW CATEGORY</button>-->
						<div class="bs-docs-example animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
							<form action="" method="post">
								<table class="table table-condensed">
									<thead>
									<tr>
										<th>#</th>
										<th>Category Name</th>
										<th>Action</th>
									</tr>
									</thead>

									<tbody>
									<?php
									$sql = "SELECT * FROM category";
									$result = $conn->query($sql);
									$ctr = 0;
									if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {
											$ctr++; ?>
											<tr>
												<td><?php echo $ctr;?></td>
												<td><?php echo  $row['catname'];?></td>
												<td>
													<input type="hidden" name="ed" value="<?php echo $row['cat_id'];?>">
													<a href="?edit=<?php echo  $row['cat_id'];?>" class="btn btn-xs btn-primary"> EDIT</a>
													<!--														<a href="?delete=--><?php //echo  $row['cat_id'];?><!--" onclick="return confirm('Delete category?');" class="btn btn-xs btn-danger"> delete</a>-->
												</td>
											</tr>
											<?php
										}$ctr = 0;
									} else {
										echo "No categories created.";
									} ?>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				<?php } ?>

				<?php if (isset($_GET['products'])){?>
					<br>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Setup</a></li>
						<li class="active">Manage Products</li>
					</ol>
					<div>

						<div class="bs-docs-example animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
							<a href="" class="btn btn-info" data-toggle="modal" data-target=".addproduct"><span class="glyphicon glyphicon-plus"></span> Add Product</a>


							<br><br>
							<?php
							$q = "SELECT * from products WHERE cat_id=1";
							$r = $conn->query($q);
							$num = $r->num_rows;
							?>
							<h4>University Belt <a href="admin.php?tbl_ubelt"> [ <?php echo $num;?> ] [VIEW ALL]</a></h4>
							<table class="table table-condensed">
								<thead>
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody >
								<?php
								$sql = "SELECT * FROM products WHERE cat_id=1 LIMIT 5";
								$result = $conn->query($sql);
								$ctr = 0;
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										$ctr++;
										?>
										<tr>
											<td><?php echo $ctr;?></td>
											<td><?php echo  $row['prod_name'];?></td>
											<td><?php echo  $row['prod_address'];?></td>
											<td>
												<a href="?editprod=<?php echo  $row['prod_id'];?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span> EDIT</a>
												<a href="?deleteprod=<?php echo  $row['prod_id'];?>" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> DELETE</a>
											</td>
										</tr>



										<?php

									}$ctr = 0;
								} else {
									?>
									<tr>
										<td>No products yet.</td>
									</tr>
									<?php
								}

								?>
								</tbody>
							</table>

							<hr>
							<br><br>
							<?php
							$q = "SELECT * from products WHERE cat_id=2";
							$r = $conn->query($q);
							$num = $r->num_rows;
							?>
							<h4>Central Business District <a href="admin.php?tbl_cbd"> [ <?php echo $num;?> ] [VIEW ALL]</a></h4>
							<table class="table table-condensed">
								<thead>
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody >
								<?php
								$sql = "SELECT * FROM products WHERE cat_id=2 LIMIT 5";
								$result = $conn->query($sql);
								$ctr = 0;
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										$ctr++;
										?>
										<tr>
											<td><?php echo $ctr;?></td>
											<td><?php echo  $row['prod_name'];?></td>
											<td><?php echo  $row['prod_address'];?></td>
											<td>
												<a href="?editprod=<?php echo  $row['prod_id'];?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span> EDIT</a>
												<a href="?deleteprod=<?php echo  $row['prod_id'];?>" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> DELETE</a>
											</td>
										</tr>



										<?php

									}$ctr = 0;
								} else {
									?>
									<tr>
										<td>No products yet.</td>
									</tr>
									<?php
								}

								?>
								</tbody>
							</table>

							<hr>
							<br><br>
							<?php
							$q = "SELECT * from products WHERE cat_id=3";
							$r = $conn->query($q);
							$num = $r->num_rows;
							?>
							<h4>Industrial-Residential <a href="admin.php?tbl_ind"> [ <?php echo $num;?> ] [VIEW ALL]</a></h4>
							<table class="table table-condensed">
								<thead>
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody >
								<?php
								$sql = "SELECT * FROM products WHERE cat_id=3 LIMIT 5";
								$result = $conn->query($sql);
								$ctr = 0;
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										$ctr++;
										?>
										<tr>
											<td><?php echo $ctr;?></td>
											<td><?php echo  $row['prod_name'];?></td>
											<td><?php echo  $row['prod_address'];?></td>
											<td>
												<a href="?editprod=<?php echo  $row['prod_id'];?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span> EDIT</a>
												<a href="?deleteprod=<?php echo  $row['prod_id'];?>" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> DELETE</a>
											</td>
										</tr>



										<?php

									}$ctr = 0;
								} else {
									?>
									<tr>
										<td>No products yet.</td>
									</tr>
									<?php
								}

								?>
								</tbody>
							</table>





						</div>
					</div>
				<?php } ?>

				<?php if (isset($_GET['videos'])){?>
					<br>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Setup</a></li>
						<li class="active">Manage Videos</li>
					</ol>
					<div>
						<button TYPE="button" class="btn btn-primary" data-toggle="modal" data-target=".addvideo">ADD NEW VIDEO</button>
						<div class="bs-docs-example animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
							<form action="" method="post">
								<?php
								$q = "SELECT * FROM videos";
								$r = $conn->query($q);
								$total = $r->num_rows;
								echo "Total: ".$total;
								?>
								<table class="table table-condensed">
									<thead>
									<tr>
										<th>#</th>
										<th>Video Name</th>
										<th>Action</th>
									</tr>
									</thead>
								<?php
								$sql = "SELECT * FROM videos";
								$result = $conn->query($sql);

								$count = $result->num_rows;
								$ctr = 0;
								if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
								$ctr++; ?>


									<tbody>
											<tr>
												<td><?php echo $ctr;?></td>
												<td><?php echo  $row['vid_title'];?></td>
												<td>
													<input type="hidden" name="id" value="<?php echo $row['vid_id'];?>">
													<a href="?editvid=<?php echo  $row['vid_id'];?>" class="btn btn-xs btn-primary"> EDIT</a>
													<a href="?deletevid=<?php echo  $row['vid_id'];?>" onclick="return confirm('Are you sure you want to delete this entry?');" class="btn btn-xs btn-danger"> DELETE</a>
													<!--														<a href="?delete=--><?php //echo  $row['cat_id'];?><!--" onclick="return confirm('Delete category?');" class="btn btn-xs btn-danger"> delete</a>-->
												</td>
											</tr>
											<?php
										}$ctr = 0;
									} else {
										echo "No records found.";
									} ?>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				<?php } ?>

<!--				START ACTIONS-->

				<?php if (isset($_GET['editvid'])){ ?>
				<br>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Setup</a></li>
					<li class="active">Edit Video</li>
				</ol>
				<h3>Edit Videos</h3>
				<br>
				<div class="row">
					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<?php
						$id = $_GET['editvid'];
						$sql = "SELECT * FROM videos where vid_id='$id'";
						$result = $conn->query($sql);

						while ($row = $result->fetch_assoc()){
						?>


						<div class="col-md-4">
							<img src="upload/<?php echo $row['vid_thumbpic'];?>" alt="" height="250" width="250">

						</div>
						<div class="col-md-8">

							<div class="container-fluid">
								<div class="form-group">
									<label for="">Preview Image:</label>
									<input type="file" class="form-control" name="uploaded">
								</div>

								<div class="form-group">
									<label for="">Video Title:</label>
									<input type="text" class="form-control" name="vid_title" value="<?php echo $row['vid_title'];?>">
								</div>

								<div class="form-group">
									<label for="">Description / Content:</label>
									<textarea name="vid_detail" id="" cols="20" rows="10" class="form-control"><?php echo $row['vid_detail'];?></textarea>
								</div>

								<div class="form-group">
									<label for="">Video Link / URL:</label>
									<input type="text" class="form-control" name="vid_link" value="<?php echo $row['vid_link'];?>">
								</div>



								<input type="submit" name="updatevid" value="Save" class="btn btn-success" >
								<a href="" onclick="window.history.back();" class="btn btn-warning">Cancel</a>
							</div>

							<?php
							}
							?>
					</form>
				</div>
			</div>
			<?php } ?>

				<?php if (isset($_GET['editprod'])){ ?>
					<br>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Setup</a></li>
						<li class="active">Edit Product</li>
					</ol>

					<div class="row">
						<div class="col-md-6"><h3>Edit Product</h3></div>
						<div class="col-md-6"><a href="admin.php?products" class="btn btn-warning pull-right">BACK TO LIST</a></div>
					</div>


					<br>
					<div class="row">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<?php
						$id = $_GET['editprod'];
						$sql = "SELECT * FROM products where prod_id='$id'";
						$result = $conn->query($sql);

						while ($row = $result->fetch_assoc()){
						?>


						<div class="col-md-4">
							<img src="upload/<?php echo $row['prod_image'];?>" alt="" height="250" width="250">

						</div>
						<div class="col-md-8">

									<div class="container-fluid">
									<div class="form-group">
										<label for="">Select Image:</label>
										<input type="file" class="form-control" name="uploaded" value="<?php echo $row['prod_image'];?>" />
										<input type="hidden" name="wew" value="<?php echo $row['prod_image']; ?>"/>
									</div>

									<div class="form-group">
										<label for="">Product Name:</label>
										<input type="text" class="form-control" name="prod_name" value="<?php echo $row['prod_name'];?>">
									</div>

									<div class="form-group">
										<label for="">Product Category:</label>
										<select name="cat_id" id="cat_id" class="form-control">
											<?php $q = "select * from category";
											$result = $conn->query($q);
											while($a = $result->fetch_assoc()){ ?>
												<option value="<?php echo $a['cat_id'];?>" name="cat_id" <?php if ($row['cat_id'] == $a['cat_id']) echo "selected";?>><?php echo $a['catname']?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label for="">Address:</label>
										<input type="text" class="form-control" name="prod_address" value="<?php echo $row['prod_address'];?>">
									</div>

									<div class="form-group">
										<label for="">Price:</label>
										<input type="text" class="form-control" name="prod_price" value="<?php echo $row['prod_price'];?>">
									</div>

									<div class="form-group">
										<label for="">Description / Content:</label>
										<textarea name="prod_desc" id="" cols="20" rows="10" class="form-control"><?php echo $row['prod_desc'];?></textarea>
									</div>

									<div class="form-group">
										<label for="" class="text-muted text-warning">Places Nearby: [input data separated by comma]</label>
									</div>

									<div class="form-group">
										<label for="">School:</label>
										<input type="text" class="form-control" name="prod_school" value="<?php  echo $row['prod_school'];?>">
									</div>

									<div class="form-group">
										<label for="">Transportation:</label>
										<input type="text" class="form-control" name="prod_transpo" value="<?php  echo $row['prod_transpo'];?>">
									</div>

									<div class="form-group">
										<label for="">Supermarkets:</label>
										<input type="text" class="form-control" name="prod_sm" value="<?php echo  $row['prod_sm'];?>">
									</div>

									<div class="form-group">
										<label for="">Malls:</label>
										<input type="text" class="form-control" name="prod_mall" value="<?php  echo $row['prod_mall'];?>">
									</div>

									<div class="form-group">
										<label for="">Restaurants:</label>
										<input type="text" class="form-control" name="prod_resto" value="<?php  echo $row['prod_resto'];?>">
									</div>

									<div class="form-group">
										<label for="">Hospital:</label>
										<input type="text" class="form-control" name="prod_hospital" value="<?php  echo $row['prod_hospital'];?>">
									</div>

									<div class="form-group">
										<label for="">Church:</label>
										<input type="text" class="form-control" name="prod_church" value="<?php echo  $row['prod_church'];?>">
									</div>



									<input type="submit" name="updateprod" value="Save" class="btn btn-success" >
									<a href="admin.php?products" class="btn btn-warning">Cancel</a>
									</div>

									<?php
								}
								?>
							</form>
						</div>
					</div>
				<?php } ?>

				<?php if (isset($_GET['edit'])){ ?>
				<br>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Setup</a></li>
					<li class="active">Edit Category</li>
				</ol>
				<h3>Edit Category</h3>
				<br>
				<div class="row">
					<div class="col-md-6">
						<form action="" method="post" class="form-horizontal">
							<?php
							$id = $_GET['edit'];
							$sql = "SELECT * FROM category where cat_id='$id'";
							$result = $conn->query($sql);

								while ($row = $result->fetch_assoc()){
									?>

									<input type="text" name="catname" class="form-control" value="<?php echo $row['catname'];?>" required="">
									<br>
									<textarea type="text"  name="desc" class="form-control"   required=""><?php echo $row['catdesc'];?></textarea>
									<br>
									<input type="submit" name="saveeditcat" value="Save" class="btn btn-success" >
									<a href="" onclick="window.history.back();" class="btn btn-warning">Cancel</a>


									<?php
								}
							?>
						</form>
					</div>
				</div>
				<?php } ?>

				<?php if (isset($_GET['tbl_ubelt'])){?>
					<br>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Setup</a></li>
						<li class="active">Manage Products</li>
					</ol>
					<h3>University Belt</h3>
					<br>
					<table class="table table-condensed">
						<thead>
						<tr>
							<th>#</th>
							<th>Product Name</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody >
						<?php
						$sql = "SELECT * FROM products WHERE cat_id=1";
						$result = $conn->query($sql);
						$ctr = 0;
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								$ctr++;
								?>
								<tr>
									<td><?php echo $ctr;?></td>
									<td><?php echo  $row['prod_name'];?></td>
									<td>
										<a href="?editprod=<?php echo  $row['prod_id'];?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span> EDIT</a>
										<a href="?deleteprod=<?php echo  $row['prod_id'];?>" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> DELETE</a>
									</td>
								</tr>



								<?php

							}$ctr = 0;
						} else {
							?>
							<tr>
								<td>No products yet.</td>
							</tr>
							<?php
						}

						?>
						</tbody>
					</table>
				<?php } ?>

				<?php if (isset($_GET['tbl_cbd'])){?>
				<br>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Setup</a></li>
					<li class="active">Manage Products</li>
				</ol>
				<h3>central Business District</h3>
				<br>
				<table class="table table-condensed">
					<thead>
					<tr>
						<th>#</th>
						<th>Product Name</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody >
					<?php
					$sql = "SELECT * FROM products WHERE cat_id=2";
					$result = $conn->query($sql);
					$ctr = 0;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							$ctr++;
							?>
							<tr>
								<td><?php echo $ctr;?></td>
								<td><?php echo  $row['prod_name'];?></td>
								<td><?php echo  $row['prod_address'];?></td>
								<td>
									<a href="?editprod=<?php echo  $row['prod_id'];?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span> EDIT</a>
									<a href="?deleteprod=<?php echo  $row['prod_id'];?>" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> DELETE</a>
								</td>
							</tr>



							<?php

						}$ctr = 0;
					} else {
						?>
						<tr>
							<td>No products yet.</td>
						</tr>
						<?php
					}

					?>
					</tbody>
				</table>
			<?php } ?>

				<?php if (isset($_GET['tbl_ind'])){?>
				<br>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Setup</a></li>
					<li class="active">Manage Products</li>
				</ol>
				<h3>Industrial-Residential</h3>
				<br>
				<table class="table table-condensed">
					<thead>
					<tr>
						<th>#</th>
						<th>Product Name</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody >
					<?php
					$sql = "SELECT * FROM products WHERE cat_id=3";
					$result = $conn->query($sql);
					$ctr = 0;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							$ctr++;
							?>
							<tr>
								<td><?php echo $ctr;?></td>
								<td><?php echo  $row['prod_name'];?></td>
								<td><?php echo  $row['prod_address'];?></td>
								<td>
									<a href="?editprod=<?php echo  $row['prod_id'];?>" class="btn btn-xs btn-primary"> <span class="glyphicon glyphicon-edit"></span> EDIT</a>
									<a href="?deleteprod=<?php echo  $row['prod_id'];?>" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> DELETE</a>
								</td>
							</tr>



							<?php

						}$ctr = 0;
					} else {
						?>
						<tr>
							<td>No products yet.</td>
						</tr>
						<?php
					}

					?>
					</tbody>
				</table>
			<?php } ?>

			</div> <!--end of col-8-->



			<div class="col-md-4 single-grid-right">
				<br>
				<div class="row container-fluid">
					<div class="col-md-12 text-center alert alert-success"><h3>Welcome, <?php echo strtoupper($username).'!';?></h3></div>
<!--					<div class="col-md-6"><a href="db.php?logout" class="btn btn-warning">LOGOUT</a></div>-->


				</div>
				<hr>
				<div class="blog-right1">
					<div class="" data-wow-delay=".5s">
						<div class="list-group">
							<a href="#" class="list-group-item text-center"><h3>SETUP</h3></a>
							<a href="admin.php?categories" class="list-group-item"><span class="glyphicon glyphicon-menu-hamburger"></span> MANAGE CATEGORIES</a>
							<a href="admin.php?videos" class="list-group-item"><span class="glyphicon glyphicon-hd-video"></span> MANAGE VIDEOS</a>
							<a href="admin.php?products" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> MANAGE PRODUCTS</a>
							<a href="#" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> MANAGE LEASING SERVICES</a>
							<a href="#" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> MANAGE FITOUT SERVICES</a>
						</div>
					</div>
				</div>

			</div> <!--end of col-4-->

			<div class="clearfix"> </div>

			<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">ADD NEW CATEGORY</h4>
						</div>
						<form action="" method="post" class="form-horizontal">
							<div class="modal-body">
								<div class="container-fluid">
									<div class="form-group">
										<label for="">Category Name:</label>
										<input type="text" class="form-control" name="catname">
									</div>
									<div class="form-group">
										<label for="">Description:</label>
										<textarea name="desc" id="" cols="20" rows="10" class="form-control"></textarea>
									</div>

								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" name="addcat" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="modal fade addproduct" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">ADD NEW PRODUCT</h4>
						</div>
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="modal-body">
								<div class="container-fluid">

									<div class="form-group">
										<label for="">Select Image:</label>
										<input type="file" class="form-control" name="fileToUpload">
									</div>

									<div class="form-group">
										<label for="">Product Name:</label>
										<input type="text" class="form-control" name="prod_name">
									</div>

									<div class="form-group">
										<label for="">Product Category:</label>
										<select name="cat_id" id="cat_id" class="form-control">
											<?php $q = "select * from category";
											$result = $conn->query($q);
											while($a = $result->fetch_assoc()){ ?>
												<option value="<?php echo $a['cat_id'];?>" name="cat_id"><?php echo $a['catname']?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label for="">Address:</label>
										<input type="text" class="form-control" name="prod_address">
									</div>

									<div class="form-group">
										<label for="">Price:</label>
										<input type="text" class="form-control" name="prod_price">
									</div>

									<div class="form-group">
										<label for="">Description / Content:</label>
										<textarea name="prod_desc" id="" cols="20" rows="10" class="form-control"></textarea>
									</div>

									<div class="form-group">
										<label for="" class="text-muted text-warning">Places Nearby: [input data separated by comma]</label>
									</div>

									<div class="form-group">
										<label for="">School:</label>
										<input type="text" class="form-control" name="prod_school">
									</div>

									<div class="form-group">
										<label for="">Transportation:</label>
										<input type="text" class="form-control" name="prod_transpo">
									</div>

									<div class="form-group">
										<label for="">Supermarkets:</label>
										<input type="text" class="form-control" name="prod_sm">
									</div>

									<div class="form-group">
										<label for="">Malls:</label>
										<input type="text" class="form-control" name="prod_mall">
									</div>

									<div class="form-group">
										<label for="">Restaurants:</label>
										<input type="text" class="form-control" name="prod_resto">
									</div>

									<div class="form-group">
										<label for="">Hospital:</label>
										<input type="text" class="form-control" name="prod_hospital">
									</div>

									<div class="form-group">
										<label for="">Church:</label>
										<input type="text" class="form-control" name="prod_church">
									</div>

								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" name="addprod" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="modal fade addvideo" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">ADD NEW VIDEO</h4>
						</div>
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="modal-body">
								<div class="container-fluid">

									<div class="form-group">
										<label for="">Preview Image:</label>
										<input type="file" class="form-control" name="uploaded">
									</div>

									<div class="form-group">
										<label for="">Video Title:</label>
										<input type="text" class="form-control" name="vid_title">
									</div>

									<div class="form-group">
										<label for="">Description / Content:</label>
										<textarea name="vid_detail" id="" cols="20" rows="10" class="form-control"></textarea>
									</div>

									<div class="form-group">
										<label for="">Video Link / URL:</label>
										<input type="text" class="form-control" name="vid_link">
									</div>

								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" name="addvid" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>

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
