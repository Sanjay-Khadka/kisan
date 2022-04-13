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

    <!-- <h2 style="text-align:center" class="mt-1 mb-1">Team</h2> -->
    <div class="row justify-content-center mt-3">
        <div class="mb-3">
            <div class="card h-100 m-auto w-25 justify-content-center border-secondary font">
                <img src="./image/bim.jpg" alt="Bimo" style="width:90%" class="image-fluid mt-3 d-flex justify-content-center m-auto">
                <div class="container">
                    <h2>Bimochan Bajimaya</h2>
                    <p class="title my-1">Founder/Developer</p>
                    <p class="my-1">Studying BCA at ICMS, Samarpan Academy</p>
                    <p class="my-1">bmochanb@gmail.com</p>
                    <p class="my-1">+977-9860232480</p>
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="./regform.php">Contact</a></div>

                </div>
            </div>
        </div>

        <!-- <div class=" column">
                            <div class="card">
                                <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
                                <div class="container">
                                    <h2>Mike Ross</h2>
                                    <p class="title">Art Director</p>
                                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                    <p>mike@example.com</p>
                                    <p><button class="button">Contact</button></p>
                                </div>
                            </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="/w3images/team3.jpg" alt="John" style="width:100%">
                        <div class="container">
                            <h2>John Doe</h2>
                            <p class="title">Designer</p>
                            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                            <p>john@example.com</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
            </div> -->
</body>
<?php
require 'footer.php';
?>

</html>