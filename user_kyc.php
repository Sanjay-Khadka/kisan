<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KYC/KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./js/hyaa.js" defer></script>
    <script src="./js/cart.js"></script>
</head>

<body background="./image/a.jpg">

    <?php
    require './includes/menu.php';
    ?>

    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-6 d-flex justify-content-center m-auto">
                    <div class="card mb-5 mt-5 wid text-black" style="border-radius: 25px;">
                        <div class="card-body">
                            <form action="" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                                <img src="./image/kisanarea.png" width="45%" alt="Kisan Area" class="center">
                                <h5 class="text-success d-flex justify-content-center mt-2 mb-4">
                                    Become a verified user @KisanArea</h5>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="fname">Name:<span class="text-danger">*</span></label> -->
                                    <input type="text" name="fname" id="fname" placeholder="Name" class="form-control border-success" />
                                    <span class="text-danger fname-not-found mt-2"></span>
                                </div>

                                <div class="row form-group mb-3">
                                    <div class="col">
                                        <select class="form-control border-success" id="country" aria-placeholder="Country">
                                            <option value="0" default>Nepal</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <select class="form-control border-success" id="state">
                                            <option value="0">Province</option>
                                            <option value="1">Province 1</option>
                                            <option value="2">Province 2</option>
                                            <option value="3">Province 3</option>
                                            <option value="4">Province 4</option>
                                            <option value="5">Province 5</option>
                                            <option value="6">Province 6</option>
                                            <option value="7">Province 7</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <input type="text" name="district" id="district" placeholder="District" class="form-control border-success" />
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="district">district:<span class="text-danger">*</span></label> -->
                                    <input type="text" name="address" id="address" placeholder="Address" class="form-control border-success" />
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="district">district:<span class="text-danger">*</span></label> -->
                                    <input type="number" name="contact" id="contact" placeholder="Contact" class="form-control border-success" />
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="district">district:<span class="text-danger">*</span></label> -->
                                    <input type="date" name="dob" id="dob" placeholder="Date of birth" class="form-control border-success" />
                                </div>

                                <div class="row form-group mb-3">
                                    <div class="col">
                                        <!-- <label class="form-label" for="district">district:<span class="text-danger">*</span></label> -->
                                        <input type="number" name="citizenship" id="citizenship" placeholder="Citizenship No" class="form-control border-success" />
                                    </div>

                                    <div class="col">
                                        <!-- <label class="form-label" for="district">district:<span class="text-danger">*</span></label> -->
                                        <input type="file" class="form-control border-success" name="image" alt="Your image is here" placeholder="Upload citizenship(Front)" />
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="district">district:<span class="text-danger">*</span></label> -->
                                    <input type="text" name="father" id="father" placeholder="Father's Name" class="form-control border-success" />
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="district">district:<span class="text-danger">*</span></label> -->
                                    <input type="text" name="gfather" id="gfather" placeholder="Grandfather's Name" class="form-control border-success" />
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="">Email:<span class="text-danger">*</span></label> -->
                                    <select class="form-control border-success" id="gender" class="gender" aria-placeholder="Gender">
                                        <option value="0">Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <select class="form-control border-success" id="occupation" class="ocupation">
                                        <option value="0">Occupation</option>
                                        <option value="1">Business</option>
                                        <option value="2">Farmer</option>
                                        <option value="3">Student</option>
                                        <option value="3">None</option>
                                    </select>
                                </div>

                                <div class=" text-white form-group mt-2">
                                    <input type="button" name="login" id="login" class="btn btn-success d-flex justify-content-center m-auto" value="Submit" />
                                    <span class="text-success form-submitted"></span>
                                </div>
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