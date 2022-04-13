<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SignIn/KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./js/cart.js"></script>

</head>

<body background="./image/a.jpg">

    <?php
    require './includes/menu.php';
    ?>
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-success">Sign In</p>

                                    <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label class="form-label" for="form3Example1c">Name:</label>
                                                <input type="text" id="form3Example1c" class="form-control" /> -->

                                                <label for="username" class="form-label">Username: <span class=" text-danger">*</span></b></h5>
                                                </label>
                                                <input type="text" id="username" name="username" placeholder="Username" class="form-control" />
                                                <span class="text-danger username-not-found"></span><br>
                                            </div>
                                        </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">

                                    <div class="form-outline flex-fill mb-0">
                                        <!-- <label class="form-label" for="form3Example3c">Email:</label>
                                        <input type="email" id="form3Example3c" class="form-control" /> -->

                                        <label for="password" class="form-label">
                                            Password: <span class="text-danger">*</span></b></h5>
                                        </label>
                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" />
                                        <span class="text-danger password-not-found"></span>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">

                                    <div class="form-outline flex-fill mb-0">
                                        <input type="button" name="login" class="btn btn-success center" value="Submit" onclick="" />
                                        <br>
                                        <span class="text-success form-submitted"></span>

                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">

                                    <div class="form-outline flex-fill mb-0">
                                        <label class="form-label" for="form3Example4cd">Re-enter your password:</label>
                                        <input type="password" id="form3Example4cd" class="form-control" />

                                    </div>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                    <label class="form-check-label" for="form2Example3">
                                        I agree all statements in <a href="#!">Terms of service</a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <button type="button" class="btn btn-success btn-lg">Register</button>
                                </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="./image/kisanarea.png" class="img-fluid" alt="KisanArea">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</body>
<?php
require 'footer.php';
?>

</html>