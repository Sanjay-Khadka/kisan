<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Vegetables/KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />

</head>

<body>

    <?php
    require './includes/menu.php';
    ?>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5 div">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">We Provide What You Need</h1>
                <p class="lead fw-normal text-white-50 mb-0">Welcome to KisanArea !!!</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="input-group" style=" display:inline-flex; justify-content:flex-end; align-items:right; margin:40px;">
                    <div class="form-outline ">
                        <input type="search" id="form1" placeholder="Search" class="form-control border-success border-2 float-right" />
                    </div> &nbsp
                    <button type="button" class="btn navigation text-white" data-toggle="collapse" data-target="#search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <!-- Product 1 -->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="./image//productImages/potato.jpg" alt="Potato" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Potato</h5>
                                    <!-- Product price-->
                                    Rs 40.00
                                </div>
                            </div><br><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Potato">
                                    <input type="hidden" name="price" value="Rs 40.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem; font-size:small;">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image//productImages/tomato.jpg" alt="Tomato" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Tomato</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rs 80.00</span>
                                    Rs 60.00
                                </div>
                            </div><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Tomato">
                                    <input type="hidden" name="price" value="Rs 60.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem; font-size:small;">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/brocolli.jpg" alt="Broccoli" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Broccoli</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rs 80.00</span>
                                    Rs 60.00
                                </div>
                            </div><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Broccoli">
                                    <input type="hidden" name="price" value="Rs 60.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Product 5-->
                <div class=" col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/bethu ko saag.jpg" alt="Bethu Saag" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bethu Saag</h5>
                                    <!-- Product price-->
                                    Rs 25.00
                                </div>
                            </div><br><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Bethu Saag">
                                    <input type="hidden" name="price" value="Rs 25.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Product 6-->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/Ladyfinger5.jpg" alt="Bhindi" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bhindi</h5>
                                    <!-- Product price-->
                                    Rs 60.00
                                </div>
                            </div><br><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Bhindi">
                                    <input type="hidden" name="price" value="Rs 70.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Product 7-->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/spinach.jpg" alt="Spinach" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Spinach</h5>
                                    <!--Product reviews-->
                                    <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> -->
                                    <!-- Product price-->
                                    Rs 40.00
                                </div>
                            </div><br><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Spinach">
                                    <input type="hidden" name="price" value="Rs 40.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Product 8-->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/radish.jpg" alt="Raddish" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Raddish</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rs 80.00</span>
                                    Rs 50.00
                                </div>
                            </div><br><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Raddish">
                                    <input type="hidden" name="price" value="Rs 50.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

<?php
require 'footer.php';
?>

</html>