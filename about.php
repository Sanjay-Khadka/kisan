<?php

if (!isset($_SESSION['username'])) {
    $_SESSION['count'] = 1;
} else {
    ++$_SESSION['count'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>About/KisanArea</title>

</head>


<body>
    <?php
    require './includes/menu.php';
    ?>
    <!-- <div class="about-section bg-dark"> -->
    <header class="bg-dark p-1">
        <div class="container my-4">
            <div class="text-center text-white">
                <h1 class="display-3 fw-bolder">About Us</h1>
                <h4>We provide a platform for farmers and buyers to easily communicate to each other.</h4>
                <p>Easy to buy, Easy to sell !!!</p>
            </div>
        </div>
    </header>
    <div>
        <img src="./image/image (4).jpg" class="container d-flex img-fluid mb-5 mt-5" width="100%">
    </div>
    <section class="section section--no-pb">
        <div class="container">
            <div>
                <div class="d-flex justify-content-center font">
                    <h2>Who We Are</h2>

                    <!-- <h4>
                      Smells racy free announcing than durable zesty smart exotic
                      far feel. Screamin' affordable secret way absolutely.
                    </h4> -->
                </div>
                <h4>
                    The Scenario
                </h4>
                <p>
                    Nepal has an immense diversity in terms of geographic, topographic and climatic conditions. However, intervention to increase crop productivity with pest/diseases control, randomly promote cash crop and over utilization of fertilizer are not sufficient in the context of changing climate, population growth and degradation of resources. More specifically and importantly, information such as bio-physical, climatic and agro economic information are useful but contextualize them to get the relevant information is harder to find.
                </p>
                <h4>Solution</h4>
                <p>GeoKrishi&nbsp;provides an intelligent digital agriculture platform built to solve challenges faced by commercial and smallholder farmers. GeoKrishi applies a data-driven system approach to translate knowledge into actionable, timely and context-specific advisories, covering all stages of the crop value chain.&nbsp;</p>
                <h4>For Whom?</h4>
                <p>Are you a Municipalities, farmer’s cooperative, part of a social group or a civil society, an agribusiness or Local extension service providers, local farm based SME’s, who faces obstacles in delivering value added services to farmer’s in their work due to lack of information delivering and the right monitoring, Evaluation and communication tools.</p>
                <h4>Mission</h4>
                <p>
                    To&nbsp;accelerate sustainable agriculture development via empowering farmers and local service providers, create green jobs, and build a network of the next-generation Agri-prenuers.
                </p>
                <h4>Objectives</h4>
                <ul>
                    <li style="list-style: disc; list-style-position: inside;">Establish agricultural data infrastructure incorporating several data, products and tools useful for overall agricultural stages.</li>
                    <li style="list-style: disc; list-style-position: inside;">Remove technical and cultural barrier in the most simple and cost-effective way such that anyone can monitor real-time information from the farm.</li>
                    <li style="list-style: disc; list-style-position: inside;">Empower extension worker to provide better recommendation to the farmer through our district level agriculture advisory services center.</li>
                </ul>
                <!-- <p class="col-lg-MB-20">&nbsp;</p>

                <p>
                  <a class="custom-btn primary big" href="#">Get in touch</a>
                </p>
              </div> -->

                <!-- <div class="col-lg-4 offset-lg-1">
                  <div class="col-MB-30">
                    <img
                      class="d-block mx-auto img-fluid"
                      src="../img/l2.png"
                      alt="demo"
                    />
                  </div>

                  <div class="col-MB-30">
                    <img class="img-fluid" src="../img/slogan.png" alt="demo" />
                  </div>
                </div> -->
            </div>
        </div>
    </section>





    <!-- <h2 style="text-align:center" class="mt-1 mb-1">Team</h2> -->
    <!-- <div class="row justify-content-center mt-3">
        <div class="col mb-3">
            <div class="card h-100 m-auto w-50 justify-content-center border-secondary font">
                <img src="./image/bim.jpg" alt="Bimo" style="width:90%" class="image-fluid mt-3 d-flex justify-content-center m-auto">
                <div class="container">
                    <h2>Bimochan Bajimaya</h2>
                    <p class="title my-1">Founder/Developer</p>
                    <p class="my-1">Studying BCA at ICMS, Samarpan Academy</p>
                    <p class="my-1">bimochanbajimaya@tuicms.edu.np</p>
                    <p class="my-1">+977-9860232480</p> -->
    <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="./regform.php">Contact</a></div> -->
    <!-- </div>
            </div>
        </div>
        <div class="col mb-3">

            <div class="card h-100 m-auto w-50 justify-content-center border-secondary font">
                <img src="./image/nis.jpg" alt="Nischal" style="width:90%" class="image-fluid mt-3 d-flex justify-content-center m-auto">
                <div class="container">
                    <h2>Nischal Dahal</h2>
                    <p class="title my-1">Founder/Developer</p>
                    <p class="my-1">Studying BCA at ICMS, Samarpan Academy</p>
                    <p class="my-1">nischaldahal@tuicms.edu.np</p>
                    <p class="my-1">+977-9805940865</p> -->
    <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="./regform.php">Contact</a></div> -->

    <!-- </div>
    </div>
    </div>
    </div> -->
</body>
<?php
require './includes/footer.php';
?>

</html>