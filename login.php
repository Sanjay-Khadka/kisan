<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login/KisanArea</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/validate.js" defer></script>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body background="./image/a.jpg">

    <?php
    require './includes/menu.php';
    ?>
    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-5 d-flex justify-content-center m-auto">
                    <div class="card mb-5 mt-5 wid text-black" style="border-radius: 25px;">
                        <div class="card-body">
                            <!-- <div class="container border border-success border-5 rounded"> -->
                            <form action="./logdb.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                                <!-- <h1 class="p-3 mb-2 bg-success bg-gradient text-white" style="font-family: 'Courier New'; text-align: center;">Namaste</h1><br> -->
                                <img src="./image/kisanarea.png" width="37%" alt="KisanArea" class="center">
                                <h4 class="text-success d-flex justify-content-center mt-2 mb-3 font">Sign in to KisanArea</h4>
                                <div class="form-group">
                                    <label for="username">
                                        <h5>Username: <span class=" text-danger">*</span></h5>
                                    </label>
                                    <input type="text" id="username" name="username" placeholder="Username" class="form-control border-success" />
                                    <span class="text-danger username-not-found"></span>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="mt-3">
                                        <h5>Password: <span class="text-danger">*</span></h5>
                                    </label>
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control border-success" />
                                    <span class="text-danger password-not-found"></span>
                                </div>

                                <div class=" text-white form-group mt-4 mb-4">
                                    <input type="button" name="login" class="btn btn-success d-flex justify-content-center m-auto" value="Login" onclick="" />
                                    <span class="text-success form-submitted"></span>
                                </div>
                                <div class="form-group d-flex justify-content-center mt-3 mb-2">
                                    Don't have an account? &nbsp
                                    <a href="./register.php" class="myA">Sign Up</a>
                                </div>
                                <!-- <div class="form-group d-flex justify-content-center mt-2">
                                            <a href="https://www.facebook.com/" class="btn btn-outline-dark btn-light mt-auto mb-1"><i class="fa fa-facebook"></i>&nbsp&nbsp
                                                <label class="facebook fw-bolder">Sign in with Facebook</a>
                                        </div>
                                        <div class="form-group d-flex justify-content-center mt-2">
                                            <a href="https://www.gmail.com/" class="btn btn-outline-dark btn-light mt-auto"><i class="fa fa-google"></i>&nbsp&nbsp
                                                <label class="google fw-bolder">Sign in with Google</a>
                                        </div> -->
                            </form>
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