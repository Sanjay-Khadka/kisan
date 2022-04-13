<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Products/KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="./js/hyaa.js" d   efer></script> -->
    <script src="./js/cart.js"></script>
    <script src="./js/prod.js"></script>
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
                            <form action="./productdb.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                                <img src="./image/kisanarea.png" width="45%" alt="KisanArea" class="center">
                                <h5 class="text-success d-flex justify-content-center mt-2 mb-4">Add Products</h5>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="fname">Name:<span class="text-danger">*</span></label> -->
                                    <input type="text" name="pname" id="pname" placeholder="Product Name" class="form-control border-success" />
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="">Email:<span class="text-danger">*</span></label> -->
                                    <input type="file" name="pimage" id="pimage" class="form-control border-success" placeholder="Product Image" />
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="">Username:<span class="text-danger">*</span></label> -->
                                    <textarea class="form-control border-success" id="desc" rows="3" placeholder="Descriptions" name="description"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <!-- <label class="form-label" for="price">price:<span class="text-danger">*</span></label> -->
                                    <input type="number" name="price" id="price" placeholder="Price" class="form-control border-success" />
                                </div>

                                <div class=" text-white form-group mt-2">
                                    <input type="button" name="login" id="login" class="btn btn-success d-flex justify-content-center m-auto" onclick="document.location='productdb.php'" value="Add Product" />
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