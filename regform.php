<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contact/KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="./js/cart.js"></script> -->
    <script src="./js/reg.js" defer></script>
</head>

<body background="./image/a.jpg">

    <?php
    require './includes/menu.php';
    ?>

    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-5 d-flex justify-content-center m-auto">
                <div class="card mb-3 mt-3 text-black" style="border-radius: 25px;">
                    <div class="card-body">
                        <form action="./contact.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                            <!-- <h1 class="p-3 mb-3 bg-success bg-gradient text-white" style="font-family: 'Courier New'; text-align: center;">Namaste</h1> -->
                            <img src="./image/kisanarea.png" width="25%" alt="Kisan Area" class="center">
                            <h5 class="text-success d-flex justify-content-center mt-1 mb-3">Contact Us</h5>
                            <div class="form-group ">

                                <div class="form-outline-success flex-fill">
                                    <label for="fname" class="form-label">
                                        Name: <span class="text-danger">*</span></h5>
                                    </label>
                                    <input type="text" id="fname" name="fname" placeholder="Full Name" class="form-control border-success" />
                                    <span class="text-danger fname-not-found"></span>
                                </div>
                            </div>

                            <div class="form-group mt-3 ">
                                <div class="form-outline flex-fill">
                                    <label for="contactn" class="form-label">
                                        Contact No.: <span class="text-danger">*</span></h5>
                                    </label>
                                    <input type="number" name="contactn" id="contactn" placeholder="Contact Number" class="form-control border-success" />
                                    <span class="text-danger contactn-not-found"></span>
                                </div>
                            </div>

                            <div class="form-group mt-3 ">
                                <div class="form-outline flex-fill">
                                    <label for="email" class="form-label is-invalid">
                                        Email: <span class="text-danger">*</span></h5>
                                    </label>
                                    <input type="email" name="email" id="email" placeholder="Email Address" class="form-control border-success" />
                                    <span class="text-danger email-not-found"></span>
                                </div>
                            </div>

                            <div class="d-flex mb-2">
                                <div class="form-outline flex-fill mt-3">
                                    <label for="">
                                        Comments:</h5>
                                    </label>
                                    <textarea class="form-control border-success" id="" rows="3" placeholder="Remarks" name="comments"></textarea>
                                </div>
                            </div>


                            <div class="form-check d-flex justify-content-center ">
                                <input class="form-check-input me-2" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">
                                    I agree all statements in <a href="#!">Terms of service</a>
                                </label>
                            </div>

                            <div class=" text-white form-group mt-2">
                                <button type="button" name="login" class="btn btn-success d-flex justify-content-center m-auto" value="Submit" onclick="">Login</button>
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