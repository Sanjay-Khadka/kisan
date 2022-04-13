<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KisanArea</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="./js/cart.js"></script>
    <style>
        .zoom {
            /* background-color: green; */
            transition: transform .2s;
            /* Animation */
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.1);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* width: 40%; */
        }

        .wrapper {
            width: auto;
            margin: 0 auto;
        }
    </style>
</head>

<?php
require 'menu.php';
?>

<body>
    <header class="bg-dark py-5">
        <div class="input-group">
            <div class="form-outline ">
                <input type="search" id="form1" class="form-control border-success border-2 float-right" />
            </div> &nbsp
            <button type="button" class="btn btn-success float-right" data-toggle="collapse" data-target="#search">
                <i class="fas fa-search float-right"></i>
                Search
            </button>
        </div>
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
            <!-- <div class="input-group wrapper">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control border-success border-2" />
                </div> &nbsp
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#search">
                    <i class="fas fa-search"></i>
                    Search
                </button>
            </div><br><br> -->
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
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
                                    Rs 35.00 - Rs 40.00/kg
                                </div>
                            </div><br><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Potato">
                                    <input type="hidden" name="price" value="Rs 35.00 - Rs 40.00">
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
                <!-- Product 4 -->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="./image//productImages//Green Apple4.jpg" alt="Green Apple" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Green Apple</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    Rs 80.00
                                </div>
                            </div><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Green Apple">
                                    <input type="hidden" name="price" value="Rs 80.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Product 5 -->

                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image//productImages//bethu ko saag.jpg" alt="Bethu Saag" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bethu Saag</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rs 50.00</span>
                                    Rs 25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <br><br>
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Bethu Saag">
                                    <input type="hidden" name="price" value="Rs 25.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="./image//productImages//Ladyfinger5.jpg" alt="Bhindi" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bhindi</h5>
                                    <!-- Product price-->
                                    Rs 50.00 - Rs 70.00
                                </div>
                            </div><br><br><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Bhindi">
                                    <input type="hidden" name="price" value="Rs 50.00 - Rs 70.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image//productImages//radish.jpg" alt="Raddish" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Raddish</h5>
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

                <!-- Product 8 -->
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
                                    <!-- Product reviews-->
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
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Spanish">
                                    <input type="hidden" name="price" value="Rs 40.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <a class="btn btn-outline-dark mt-auto center" href="./showmore.php">Show More</a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-success py-5">
        <!-- <div class="container bg-success"> -->
        <p class="m-0 text-center text-white">Copyright &copy; KisanArea</p>
        <!-- </div> -->
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="./js/cart.js"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="./js/util.js"></script>
</body>

</html>