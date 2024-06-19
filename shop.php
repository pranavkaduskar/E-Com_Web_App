<?php
require_once 'db_config.php';

if(isset($_POST["add"])){
    $productid = $_GET["id"];
    $productname = $_POST["hidden_name"];
    $productimage = $_POST["hidden_image"];
    $productsp = $_POST["hidden_sp"];
	$productdescrip = $_POST["hidden_descrip"];
	$productmrp = $_POST["hidden_mrp"];
    $productquantity = $_POST["quantity"];

    $sql = "INSERT INTO `product_second`(`id`, `name`, `descrip`, `mrp`, `sp`, `image`, `quantity`) VALUES (NULL,'$productname','$productdescrip','$productmrp','$productsp','$productimage' , $productquantity)";
    mysqli_query($conn,$sql);

}

?>
<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Eye-Ware web store  </title>
		<!-- self -->
		<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">




	</head>

	<body>


		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="blasian_namelog.jpg" height="80" width="200" class="img-fluid rounded-top" alt=""></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li >
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item active"><a class="nav-link" href="shop.php">Shop</a></li>
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="blog.html">Blog</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login.html"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
						<li><a class="nav-link" href="logout.php"><img src="bimg/logout.svg"></a></li>

					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->
<hr><br><hr>
		<!-- Start Hero Section
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Discover Your Style <span clsas="d-block"> <br>in Every Shade</span></h1>
								<p class="mb-4">Elevate your look with our stunning collection of sunglasses. From classic elegance to bold statements, find the perfect pair that complements your unique style. Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
								<p><a href="shop.html" class="btn btn-secondary me-2">Shop Now</a><a href="shop.html" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7 mb-4">
						<br>
							<div class="hero-img-wrap lg:max-w-lg lg:w-full md:w-1/2 w-5/6 ">
								<img src="bimg/heroimage.png" height="600" width="500"  class="img-fluid">
							</div>
						
						</div>
					</div>
				</div>
			</div> -->

		
       <!-- ... (your existing code) ... -->

<?php 
$conn = mysqli_connect("localhost","root","","blasian");

if (!$conn) {
    echo "Database not connected" . mysqli_connect_error();
}

$sql = "SELECT * FROM `product` ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "
    <div class='untree_co-section product-section before-footer-section'>
        <div class='container'>
            <div class='row'>";
    while ($row = mysqli_fetch_array($result)) {
		$productId = $row['id'];
        ?>
				<div class="col-12 col-md-4 col-lg-3 mb-5">
    <form action="shop.php?action=add&id=<?php echo $row["id"]?>" method="post">
        <div class="product-item">
            <div class="container"><img src="admin/bimg/<?php echo $row["image"];?>" class="img-fluid product-thumbnail" alt="<?php echo $rows["name"]?>"></div>
            <h2 class="product-title"><?php echo $row["name"];?></h2>
            <p class="product-price">MRP: ₹<?php echo $row["mrp"];?> <br>  Offer price RS: ₹<?php echo $row["sp"];?></p>
			<input type="text" name="quantity" id="quantity" value="1">
			<input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
            <input type="hidden" name="hidden_mrp" value="<?php echo $row["mrp"];?>">
            <input type="hidden" name="hidden_image" value="<?php echo $row["image"];?>">
            <input type="hidden" name="hidden_descrip" value="<?php echo $row["descrip"];?>">
            <input type="hidden" name="hidden_sp" value="<?php echo $row["sp"];?>">
            <input type="submit" name="add" value="Add To cart">
        </div>
    </form>
</div>

<?php
    }?>
    
            </div>
        </div>
    </div> <?php
} else {
    echo "0 Records Found";
}

mysqli_close($conn);
?>

<!-- ... (your existing code) ... -->

		      	

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="bimg/logob.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>
							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="about.html">About us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
