<?php
include('../dbconn.php');
session_start();
extract($_POST);

if (isset($login)) {
    $email = $_POST["user"];
    $pass = $_POST["pass"];
    $que = mysqli_query($mysqli, "select * from admin where user='$email' and pass='$pass'");
    $row = mysqli_num_rows($que);
    if ($row) {
        $_SESSION['admin'] = $email;
        header('location:manage.php');
    } else {
        $err = "<font color='red'>Please check your email and password!!</font>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title font">Admin</h3>
                    </div>
                    <div class="panel-body font">
                        <form method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="user" type="text" autofocus required placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required>
                                </div>


                                <div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                </div>

                                <div class="form-group">
                                    <label>
                                        <?php echo @$err; ?>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/css/sb-admin-2.js"></script>

</body>

</html>