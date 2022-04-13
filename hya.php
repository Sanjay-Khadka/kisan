<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login/KisanArea</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/validate.js" defer></script>
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Trebuchet MS';
            background-size: cover;
        }

        .wrapper {
            width: 500px;
            margin: auto;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* width: 40%; */
        }

        .myA {
            text-decoration: none;
        }

        .myA:hover {
            text-decoration: underline;
            text-decoration-color: purple;
            color: purple;
        }

        .fb {
            background: blue;
            color: white
        }

        /* .fb:hover {
            background-color: blue;
        } */

        .goog {
            background-color: tomato;
            color: white
        }

        /* .goog:hover {
            background-color: tomato;
        } */

        .fa-facebook {
            background: blue;
            color: white;
        }

        .fa-google {
            background: tomato;
            color: white;
        }
    </style>
</head>
<?php
require 'menu.php';
?>

<body background="./image/a.jpg">
    <!-- <h3 class="p-3 mb-2 bg-success bg-gradient text-white" style="text-align: center; font-family:monospace">Kisan Area: We Provide What You Need.</h3><br><br> -->
    <!-- <div class="wrapper border border-dark border-2 rounded bg-white bg-gradient" style="font-family: 'Trebuchet MS';">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> -->
    <section class="mb-4">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-6 mt-4">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body">
                            <div>
                                <div>
                                    <!-- <div class="container border border-success border-5 rounded"> -->
                                    <form action="./validatelogin.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                                        <!-- <h1 class="p-3 mb-2 bg-success bg-gradient text-white" style="font-family: 'Courier New'; text-align: center;"><b>Namaste</b></h1><br> -->
                                        <img src="./image/kisanarea.png" width="37%" alt="Kisan Area" class="center">
                                        <h4 class="text-success d-flex justify-content-center mt-2 mb-3" style="font-family: 'Trebuchet MS';">Sign in to KisanArea</h4>
                                        <div class="form-group">
                                            <label for="username">
                                                <h5><b>Username: <span class=" text-danger">*</span></b></h5>
                                            </label>
                                            <input type="text" id="username" name="username" placeholder="Username" class="form-control border-2" />
                                            <span class="text-danger username-not-found"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="mt-3">
                                                <h5><b>Password: <span class="text-danger">*</span></b></h5>
                                            </label>
                                            <input type="password" id="password" name="password" placeholder="Password" class="form-control border-2" />
                                            <span class="text-danger password-not-found"></span>
                                        </div>

                                        <div class=" text-white form-group mt-2">
                                            <input type="button" name="login" class="btn btn-success d-flex justify-content-center m-auto" value="Login" onclick="" />
                                            <span class="text-success form-submitted"></span>
                                        </div>
                                        <div class="form-group d-flex justify-content-center mt-2">
                                            Don't have an account? &nbsp
                                            <a href="./register.php" class="myA">Sign Up</a>
                                        </div>
                                        <div class="form-group d-flex justify-content-center mt-2">
                                            <a href="https://www.facebook.com/" class="btn fb fa-facebook text-white bold display-4"><i class="fa fa-facebook"></i>&nbsp&nbsp
                                                Sign in with Facebook</a>
                                        </div>
                                        <div class="form-group d-flex justify-content-center mt-2">
                                            <a href="https://www.gmail.com/" class="btn fa-google goog text-white bold display-4"><i class="fa fa-google"></i>&nbsp&nbsp
                                                Sign in with Google</a>
                                        </div>
                                        </fieldset>
                                    </form>
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