<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/login.js" defer></script>
    <link rel="icon" type="image/x-icon" href="./images/Sawari.PNG" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <style>
        @font-face {
            font-family: nischal;
            src: url(./font/Montserrat/Montserrat-VariableFont_wght.ttf);
        }

        .cont {
            width: 100%;
            height: 100vh;
            /* background-image: url(./images/Sawari-background.png); */
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            /* mix-blend-mode: multiply; */
            /* opacity: 0.9; */
        }

        .form {
            /* background: rgba(0, 0, 0, 0.061); */
            display: flex;
            flex-direction: column;
            padding: 2vw 4vw;
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            /* opacity: 0.5; */
            /* margin-left: 800px; */
            border-color: darkred;
            margin-bottom: 60px;
        }

        form input,
        form textarea {
            border: 0;
            margin: 10px 0;
            padding: 20px;
            outline: none;
            background: transparent;
            font-size: 16px;
            border-color: 3red;
        }

        form button {
            padding: 10px 0px 10px 0px;
            background: rgb(141, 134, 134);
            color: #fff;
            font-size: 18px;
            border: 0px;
            outline: none;
            cursor: pointer;
            width: 150px;
            margin-left: 130px;
            margin: 20px auto 0;
            border-radius: 30px;
        }

        button:hover {
            background-color: darkred;
        }

        .facebook:hover {
            color: lightblue;
        }

        .google {
            color: orangered;
        }

        .fa-facebook {
            background: transparent;
            color: xblue;
        }

        .fa-google {
            background: transparent;
            color: orangered;
        }
    </style>
</head>

<?php
require 'menu.php';
?>

<body>
    <div class="container d-flex m-auto justify-content-center mt-5 mb-5 p-5">

        <form action="./regfarmer.php" class="form border border-3 border-danger" id="form" name="form" method="POST">
            <img src="./images/Sawari.PNG" width="20%" class="d-flex m-auto justify-content-center" />

            <h3 class="mt-3 mb-3 d-flex align-content-center justify-content-center">Login to Sawari</h3>

            <div class="form-group">
                <label>E-mail:</label><input type="email" class="border border-1 border-danger form-control mt-3" name="email" id="email" placeholder="E-mail" />
                <span class="email-not-found text-danger"></span>
            </div>

            <div class="form-group mt-3">
                <label>Password:</label><input type="password" class="border border-1 border-danger form-control mt-3" name="password" id="password" placeholder="Password" />
                <span class="password-not-found text-danger"></span>
            </div>

            <div class="form-group mt-3">
                <button type="submit" name="login" value="Login" class="button d-flex justify-content-center hov m-auto mt-3 mb-4">Login</button>
            </div>
            <div class="form-group d-flex justify-content-center mt-1 mb-2">
                Don't have an account? &nbsp
                <a href="./signup.php" class="">Sign Up</a>
            </div>
            <div class="form-group d-flex justify-content-center mt-2">
                <a href="https://www.facebook.com/" class="btn btn-outline-secondary btn-light mt-auto mx-3"><i class="fa fa-facebook"></i></a>
                <a href="https://www.gmail.com/" class="btn btn-outline-secondary btn-light mt-auto"><i class="fa fa-google"></i></a>
            </div>
            <div class="form-group d-flex justify-content-center mt-2">
                <span class="form-submitted text-success mt-4"></span>
            </div>
        </form>
    </div>
</body>

<?php
require 'footer.php';
?>

</html>