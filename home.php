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
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./js/hyaa.js" defer></script>
    <script src="./js/cart.js"></script>

    <style>
        body {
            font-family: 'Trebuchet MS';
            background-image: url('./image/111.jpg');
            background-size: cover;
            background-repeat: none;
        }

        .head {
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

        .wrapper {
            width: auto;
            margin: 0 auto;
        }

        .h1 {
            color: darkgreen;
            text-shadow: 5px;
            font-size: 60px;

        }

        .h2 {
            text-rendering: optimizeLegibility;
        }

        .btn:hover {
            background: darkgreen;
            border: darkgreen;
        }
    </style>
</head>


<body>
    <?php require './includes/menu.php'; ?>
    <div class="head container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center ">
                <div class="container justify-content-center pt-5">
                    <h1 class="mx-auto my-0 text-uppercase mt-5 mb-3 pt-5 h1">KisanArea</h1>
                </div>
                <h2 class="text-dark-50 mx-auto mt-4 mb-5">Easy to buy, Easy to sell.</h2>
                <a class="btn btn-dark" href="./home.php">Get Started</a>
            </div>
        </div>
    </div>
</body>


</html>