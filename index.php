<?php

if (!isset($_SESSION['username'])) {
    $_SESSION['count'] = 1;
} else {
    ++$_SESSION['count'];
}

// echo $_SESSION['count'];

include 'dbconn.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KisanArea</title>
    <!-- Website Logo-->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">


</head>

<body>
    <?php
    require './includes/menu.php';
    ?>
    <header class="bg-dark p-3">
        <div class="container my-5">
            <div class="text-center text-white font">
                <h1 class="display-4 fw-bolder font">We Provide What You Need</h1>
                <p class="lead fw-normal text-white-50 mb-0 font">Welcome to KisanArea !!!</p>
            </div>
        </div>
    </header>
    <!-- Section-->

    <?php include('includes/recent-products.php'); ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="./js/cart.js"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="./js/util.js"></script>
    <?php
    require './includes/footer.php';
    ?>
</body>


</html>