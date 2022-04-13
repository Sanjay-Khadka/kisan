<header id="header">
	<nav class="navbar navbar-expand-lg navbar-light navigation ">
		<div class="container-fluid">
			<div class="container px-4">
				<div class="navbar-brand">
					<a href="./home.php"><img class="img-fluid" src="./image/big.png" style="width: 13%;" href="./home.php" alt="KisanArea"></a>
					<a class="navbar-brand text-light a" style="font-size:22px;" href="./home.php"><strong class="hov">KisanArea</strong></a>
				</div>
				</a>
			</div>
			<div class="container" style="font-family:'Trebuchet MS'; font-size:16px;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav me-auto mb-3 mb-lg-0 ms-lg-4">
						<li class="nav-item">
							<a class="nav-link active text-light px-4" aria-current="page" href="./home.php"><b class="hov">Home</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light px-4" href="./about.php"> <b class="hov">About</b></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light hov px-4 " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b class="hov">Shop</b></a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<a class="  dropdown-item a" href="./home.php">All Products</a>
								</li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li>
									<a class="dropdown-item" href="./veg.php">Vegetables</a>
								</li>
								<li>
									<a class="dropdown-item" href="./fru.php">Fruits</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link a text-light px-4 " href="./register.php"><b class="hov  ">Register</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link a text-light px-4 " href="./login.php"><b class="hov  ">Login</b></a>
						</li>
						<li class="nav-item mx-4">
							<form class="d-flex">
								<?php
								$count = 0;
								if (isset($_SESSION['cart'])) {
									$count = count($_SESSION['cart']);
								}
								?>
								<div class="text-center"><a class="btn btn-outline-light d-flex" href="./mycart.php">Cart
										<i class="bi-cart-fill me-1 cd"></i></span>(<?php echo $count; ?>)</a>
								</div>
							</form>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</nav>
</header>