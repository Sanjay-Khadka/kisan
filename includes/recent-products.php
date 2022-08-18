<?php
$featuredAuctions = mysqli_query($mysqli, "SELECT * FROM products WHERE isActive = 1");
?>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-0">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="input-group" style=" display:inline-flex; justify-content:flex-end; align-items:right; margin:40px;">
                <form method="GET" action="./psearch.php">
                    <div class="d-flex form-outline justify-content-end">
                        <input type="search" required value="<?php if (isset($_GET['search'])) {
                                                                    echo $_GET['search'];
                                                                } ?>" placeholder="Search" name="search" class="d-inline form-control border-success border-2 w-75">&nbsp
                        <button type="submit" class="btn navigation text-white">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Products -->
            <?php while ($featuredProd = mysqli_fetch_array($featuredAuctions)) { ?>
                <div class="col mb-5 zoom">
                    <div class="border-1 border-success card h-100 rounded-3">
                        <form action="" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="admin-panel/uploads/products/<?php echo $featuredProd['photo']; ?>" alt="" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        <?php echo $featuredProd['name']; ?>
                                    </h5>
                                    <!-- Product price-->
                                    Rs. <?php echo $featuredProd['price']; ?>

                                    <p><?php echo $featuredProd['shortdescription']; ?></p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="text-center card-footer border-top-0 bg-transparent">
                                <div class="btn-group-sm mb-3">
                                    <a href="products.php?pid=<?php echo $featuredProd["productid"]; ?>" class="btn btn-success btn-outline-navigation   text-white">
                                        Details
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>