<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <!-- <script src="./js/cart.js"></script> -->
    <script src="../js/reg.js" defer></script>
    <style>
        body {
            font-family: 'Trebuchet MS';
            width: auto;
            background-size: cover;
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
    </style>
</head>

<body background="">

    <section class="">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-6 mt-4">
                    <div class="card mb-4 text-black" style="border-radius: 25px;">
                        <div class="card-body">
                            <div>
                                <div>
                                    <form action="./connect.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                                        <!-- <h1 class="p-3 mb-2 bg-success bg-gradient text-white" style="font-family: 'Courier New'; text-align: center;"><b>Namaste</b></h1> -->
                                        <!-- <img src="./image/kisanarea.png" width="37%" alt="Kisan Area" class="center"> -->
                                        <h4 class="text-success d-flex justify-content-center mt-2 mb-5">Fill me up</h4>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label for="fname" class="form-label">
                                                    <h5><b>First name: <span class="text-danger">*</span></b></h5>
                                                </label>
                                                <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control" />
                                                <span class="text-danger fname-not-found"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">

                                            <div class="form-outline flex-fill mb-0">
                                                <label for="lname" class="form-label">
                                                    <h5><b>Last name: <span class="text-danger">*</span></b></h5>
                                                </label>
                                                <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control" />
                                                <span class="text-danger lname-not-found"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <div class="form-outline flex-fill mb-0">
                                                <label for="contactn" class="form-label">
                                                    <h5><b>Contact No.: <span class="text-danger">*</span></b></h5>
                                                </label>
                                                <input type="number" name="contactn" id="contactn" placeholder="Contact Number" class="form-control" />
                                                <span class="text-danger contactn-not-found"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <div class="form-outline flex-fill mb-0">
                                                <label for="email" class="form-label is-invalid">
                                                    <h5><b>Email: <span class="text-danger">*</span></b></h5>
                                                </label>
                                                <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" />
                                                <span class="text-danger email-not-found"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label for="">
                                                    <h5><b>Comments:</b></h5>
                                                </label>
                                                <textarea class="form-control" id="" rows="3" placeholder="Remarks" name="comments"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-2">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for="">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>
                                        <div class=" text-white form-group mt-2">
                                            <input type="button" name="login" class="btn btn-success center mt-3" value="Submit" onclick="" />
                                            <span class="text-success form-submitted"></span>
                                        </div>
                                        <!-- <div class="d-flex justify-content-center mx-1 mb-1 mb-lg-1">
                                            <button type="button" class="btn btn-success btn-lg">Submit</button>
                                        </div> -->
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


</html>