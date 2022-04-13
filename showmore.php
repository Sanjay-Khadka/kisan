<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <style type="text/css">
        body {
            font-family: 'Trebuchet MS';
        }

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
    </style>
</head>

<body>
    <?php require './includes/menu.php'; ?>

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
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Product image-->
                            <img class="card-img-top" src="./image//productImages/apple.jpg" alt="Apple" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Apple</h5>
                                    <!-- Product price-->
                                    Rs 50.00
                                </div>
                            </div><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Apple">
                                    <input type="hidden" name="price" value="Rs 50.00 - Rs 70.00">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/banana.JPG" alt="Banana" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Banana</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rs 60.00</span>
                                    Rs 40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Banana">
                                    <input type="hidden" name="price" value="Rs 40.00">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/rice.jpg" alt="Rice" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Rice</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rs 180.00</span>
                                    Rs 160.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Rice">
                                    <input type="hidden" name="price" value="Rs 180.00">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/wheat2.JPG" alt="Wheat" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Wheat</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    Rs 100.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Wheat">
                                    <input type="hidden" name="price" value="Rs 100.00">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages//mango1.JPG" alt="Mango" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mango</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rs 150.00</span>
                                    Rs 125.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Mango">
                                    <input type="hidden" name="price" value="Rs 125.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages//mushroom.JPG" alt="Mushroom" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mushroom</h5>
                                    <!-- Product price-->
                                    Rs 80.00
                                </div>
                            </div><br>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto" action="#">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Mushroom">
                                    <input type="hidden" name="price" value="Rs 80.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages//brinjal.JPG" alt="Brinjal" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Brinjal</h5>
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
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button type="submit" name="Add_To_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" name="Item_name" value="Brinjal">
                                    <input type="hidden" name="price" value="Rs 50.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col mb-5 zoom">
                    <div class="card h-100">
                        <form action="./addtocart.php" method="POST">

                            <!-- Product image-->
                            <img class="card-img-top" src="./image/productImages/grapes.jpg" alt="Grapes" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Grapes</h5>
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
                                    <input type="hidden" name="Item_name" value="Grapes">
                                    <input type="hidden" name="price" value="Rs 80.00">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container px-5 col col-lg-2">
                <a class="btn btn-outline-dark d-flex justify-content-center m-auto p-2" href="./index.php"> Go Back</a>
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