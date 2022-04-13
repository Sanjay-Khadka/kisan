<?php

session_start();
include_once("db-config.php");
include_once("functions.php");
include_once("func.php");

$Slug = (string)$_GET['name'];
$exhibitorID;
//$queryData = mysqli_query($mysqli,"SELECT * FROM users WHERE email = '$username'");
$featuredExhibitors = mysqli_query($mysqli,"SELECT * FROM products WHERE slug = '$Slug'");

// while($exhibitor = mysqli_fetch_array($featuredExhibitors))
// {
// 	$exhibitorID = intval($exhibitor['exhibitorid']);
// }

// $featuredProducts = mysqli_query($mysqli,"SELECT * FROM products WHERE exhibitorid = 1");

?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<?php include 'includes/header.php';?>  

	<link rel="stylesheet" type="text/css" href="assets/css/custom-style.css">
	
</head>

<body class="blue-skin">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div id="preloader"><div class="preloader"><span></span><span></span></div></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->


	<div id="main-wrapper">
		
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<?php include 'includes/navigation.php'; ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<?php while($featuredExhibitor = mysqli_fetch_array($featuredExhibitors))
		{ ?>	
			
			<!-- Start Banner  -->
			<section class="page-title-banner" id="exhibitorBanner" style="background-image:url(upload/products/no-image-product.jpg);padding:10px;">
				<div class="container">
					<div class="row m-0 align-items-end detail-swap">
						<div class="tr-list-wrap">
							<!-- Begin  Content -->
							


						</div>
					</div>
				</div>
			</section>
			<!--  End Banner -->
			
			<!-- Property Detail Start  -->
			<section class="gray">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Single Block Wrap -->
							<div class="Reveal-block-wrap">
								<div class="Reveal-block-header">
									<h1 class="text-center"><?php echo $featuredExhibitor['name']; ?></h1>
									<h4 class="text-center">AUD <?php echo $featuredExhibitor['price']; ?></h4>
								</div>
								
								<div class="Reveal-block-body">
									<?php echo $featuredExhibitor['description']; ?>
								</div>
							</div>
							
							<hr>

							
<!-- FeaturedCategories -->
<?php include('includes/featuredCategoriesGrid.php'); ?>
		<!-- ./FeaturedCategopories -->

							
							
						</div>

						
					</div>
				</div>
			</section>
			<!-- Property Detail End -->
			<?php
		} ?>


		


		<!--  Footer Start ==== -->
		<?php include('includes/footer.php'); ?>
		<!-- == Footer End === -->

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="registermodal">
					<span class="mod-close" data-dismiss="modal"><i class="ti-close"></i></span>
					<div class="modal-body">
						<h4 class="modal-header-title">Log <span class="theme-cl">In</span></h4>
						<div class="login-form">
							<form>
								
								<div class="form-group">
									<label>User Name</label>
									<div class="input-with-icon gray">
										<input type="text" class="form-control" placeholder="Username">
										<i class="ti-user"></i>
									</div>
								</div>

								<div class="form-group">
									<label>Password</label>
									<div class="input-with-icon gray">
										<input type="password" class="form-control" placeholder="*******">
										<i class="ti-unlock"></i>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-md full-width pop-login">Login</button>
								</div>
								
							</form>
						</div>
						<div class="modal-divider"><span>Or login via</span></div>
						<div class="social-login mb-3">
							<ul>
								<li><a href="#" class="btn fb"><i class="ti-facebook"></i></a></li>
								<li><a href="#" class="btn google"><i class="ti-google"></i></a></li>
								<li><a href="#" class="btn twitter"><i class="ti-twitter"></i></a></li>
							</ul>
						</div>
						<div class="modat-foot">
							<div class="md-left">Have't Account? <a href="register.html" class="theme-cl">Sign Up</a></div>
							<div class="md-right"><a href="#" class="theme-cl">Forget Password?</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>



	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/rangeslider.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/slider-bg.js"></script>
	<script src="assets/js/lightbox.js"></script> 
	<script src="assets/js/imagesloaded.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/counterup.min.js"></script>

	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

<!-- Mirrored from codeminifier.com/reveal-live/reveal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 10:35:29 GMT -->
</html>