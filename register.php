<?php

if (!isset($_SESSION['username'])) {
    $_SESSION['count'] = 1;
} else {
    ++$_SESSION['count'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register/KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    require './includes/menu.php';
    ?>
    <section class="p-0 bg-dark font">
        <div class="container d-flex justify-content-center p-5 ">
            <div class="col-10 row ">
                <!-- <div class="col py-4 zoom">
                    <div class="card h-100 mx-5">
                        <h4 class="center mt-3 mb-3">Admin:</h4> -->
                <!-- Product image-->
                <!-- <img class="card-img-top img center w-50" src="./image/userg.png" width="" /> -->
                <!-- Product details-->
                <!-- <div class="card-body p-4"> -->
                <!-- <div class="text-center">
                                <h5 class="fw-bolder">Admin</h5>
                            </div>
                        </div> -->
                <!-- Product actions-->
                <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a href="./admin-panel/add-product.php  " class="btn btn-outline-dark mt-auto">Continue</a>
                            </div>
                        </div> -->
                <!-- </div> -->
                <!-- </div> -->
                <div class="col d-flex justify-content-center py-4 zoom">
                    <div class="card h-100 w-50 mx-5">
                        <h4 class="center mt-3 mb-3">Sign Up:</h4>
                        <img class="card-img-top img center w-50" src="./image/cartg.png" width="50%" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Buyer</h5>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a href="./buyer.php" class="btn btn-outline-dark mt-auto">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<?php
require './includes/footer.php';
?>

</html>