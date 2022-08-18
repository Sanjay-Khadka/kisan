<?php
include 'db-config.php';

$productid = $_GET['pid'];

$productDetail = mysqli_query($mysqli, "SELECT * FROM products WHERE productid = '$productid'");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$propertyID = $productid;
	$username = $_SESSION["username"];
	$visitorName = $_POST["visitor_name"];
	$visitorEmail = $_POST["visitor_email"];
	// $UserID = $_SESSION["userid"];
	// $bidAmount = $_POST['bid_amount'];

	// $insertData= mysqli_query($mysqli,"INSERT INTO `bidders`('product_id','user_id', 'amount', 'isWin') VALUES ('$propertyID', '$UserID', '$bidAmount', '0')");
	try {
		$insertData = mysqli_query($mysqli, "INSERT INTO `book` (`book_id`, `product_id`, `username`,`contact_name`, `contact_email`) VALUES (NULL, '$propertyID', '$username', '$visitorName', '$visitorEmail')");
	} catch (Exception $e) {
		throw new Exception('Unable to Book now. Please try again later', 0, $e);
	}

	// $biddingData= mysqli_query($mysqli,"UPDATE bidders SET product_id = '$propertyID', user_id = '$UserID', amount = '$bidAmount'  WHERE slug='$listingSlug'");
	if (!$insertData) {
		echo mysqli_error();
	}
	header("Location:products.php?pid=" . $productID);
}
// Save Business Contact Info
?>





<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>KisanArea/Product Info</title>
	<!-- Website Logo-->
	<link rel="icon" type="image/x-icon" href="./image/Sawari.png" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="./css/bootstrap.css" rel="stylesheet" />
	<!-- <link href="./css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">


</head>

<body>

	<?php require 'includes/menu.php'; ?>

	<?php while ($product = mysqli_fetch_array($productDetail)) { ?>

		<header class="bg-dark p-3">
			<div class="container my-5">
				<div class="text-center text-white">
					<h1 class="display-4 fw-bolder"><?php echo $product['name']; ?></h1>
					<!-- <p class="lead fw-normal text-white-50 mb-0">Welcome to KisanArea !!!</p> -->
				</div>
			</div>
		</header>
		<!-- Section-->

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
					<div class="col">

						<!-- Single Block Wrap -->
						<div class="Reveal-block-wrap border-success border-1 rounded-2 ">
							<form method="POST" action="./addtocart.php">
								<div class="Reveal-block-header">
									<img class="card-img-top w-25 center" src="uploads/products/<?php echo $product['photo']; ?>" alt="" />
									<h1 class="text-center"><?php echo $product['name']; ?></h1>
									<h4 class="text-center">Rs. <?php echo $product['price']; ?></h4>
								</div>

								<div class="text-center Reveal-block-body">
									<?php echo $product['description']; ?>
								</div>
								<div class="btn-group-sm d-flex justify-content-center m-auto mb-3 mt-5">
									<input type="hidden" id="Item_name" class="Add_To_cart" value="<?php echo $product['name']; ?>">
									<input type="hidden" id="price" class="Add_To_cart" value="<?php echo $product['price']; ?>">
									<button type="submit" class="btn btn-success btn-outline-navigation text-white">
										Add to cart
									</button> <!-- </a> -->


								</div>
							</form>

							<!-- <div class="container">
								<form id="bidding_form" method="POST" class="edd_form">
									<div class="elem-group">
										<label for="name">Full Name</label>
										<input type="text" id="visitor_name" class="form-control" name="visitor_name" placeholder="Full Name" pattern=[A-Z\sa-z]{3,20} required>
									</div>
									<div class="elem-group">
										<label for="email">Your E-mail</label>
										<input type="email" id="visitor_email" class="form-control" name="visitor_email" placeholder="name@gmail.com" required>
									</div>
									<div class="elem-group">
										<label for="phone">Your Phone</label>
										<input type="tel" id="visitor_phone" class="form-control" name="visitor_phone" placeholder="9860232480" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
									</div> -->
							<!-- <hr>
									<div class="elem-group inlined">
										<label for="adult">Adults</label>
										<input type="number" id="adult" class="form-control" name="total_adults" placeholder="2" min="1" required>
									</div>
									<div class="elem-group inlined">
										<label for="child">Children</label>
										<input type="number" id="child" class="form-control" name="total_children" placeholder="2" min="0" required>
									</div>
									<div class="elem-group inlined">
										<label for="checkin-date">Check-in Date</label>
										<input type="date" class="form-control" id="checkin-date" name="checkin" required>
									</div>
									<div class="elem-group inlined">
										<label for="checkout-date">Check-out Date</label>
										<input type="date" class="form-control" id="checkout-date" name="checkout" required>
									</div> -->
							<!-- <div class="elem-group">
										<label for="room-selection">Type of Product</label>
										<select id="room-selection" name="room_preference" class="form-control" required>
											<option value="Vegetables">Vegetables</option>
											<option value="Fruits">Fruits</option>
											<option value=""></option>
											<option value="adjacent"></option>
										</select>
									</div>
									<hr> -->
							<!-- <div class="elem-group">
										<label for="message">Anything Else?</label>
										<textarea id="message" class="form-control" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
									</div> -->
							<!-- <button type="submit">Reserve</button> -->
							</form>


						</div>

						<hr>



					</div>


				</div>
			</div>
		</section>
		<!-- Property Detail End -->


	<?php } ?>

	<?php include('includes/footer.php'); ?>


	</div>


	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
	<script src="./js/cart.js"></script> <!-- util functions included in the CodyHouse framework -->
	<script src="./js/util.js"></script>



</body>

<!-- Mirrored from codeminifier.com/reveal-live/reveal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 10:35:29 GMT -->

</html>