<?php
session_start();

// include_once("../functions.php");
include_once("../func.php");

// $username = $_SESSION["email"];
// $userID = $_SESSION["userid"];
// $user = $_SESSION["username"];

// $user_image = $_SESSION["user_image"];
// $user_fullname = $_SESSION["user_fullName"];
// $user_type = $_SESSION["user_type"];
// $user_role = $_SESSION["user_role"];

// $exhibitorID = (string)$_GET['eid'];

$message = "";

// $slug = (string)$_GET['name'];
// $pid = (string)$_GET['pid'];

// $orgSlug = (string)$_GET['name'];
// $productDetails = mysqli_query($mysqli,"SELECT * FROM products WHERE productid = '$pid'");

// $queryData = mysqli_query($mysqli,"SELECT * FROM exhibitor_profile WHERE userid = '$UserID'");


// while($product = mysqli_fetch_array($productDetails))
// {

$name = '';
// $base_price = 25000;
$photo = 'no-image.jpg';
// $slug = '';
$shortdescription = '';
$description = '';
$features = '';
// $additional_info = '';
// $exhibitorid = '';
$categoryid = '';
$isFeatured = '';
// $auction_start = '';
// $auction_end = '';
//  // $profilePic = ($user['profilepic'] == NULL) ? "upload/profile/$user['profilepic']" : "assets/img/user-1.png";
// }



// Edit Products
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $photo = $_FILES["photo"]["name"];
    $shortdesc = $_POST['shortdescription'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $isActive = $_POST['isActive'];
    $isFeatured = $_POST['isFeatured'];

    try {

        // Code to Upload FIles
        $target_path =  "uploads/products/";
        $target_path = $target_path . basename(
            $_FILES['photo']['name']
        );

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
            echo "File uploaded successfully!";
        } else {
            echo "Sorry, file not uploaded, please try again!";
        }
        // Code to Upload Files

        $insertData = mysqli_query($mysqli, "INSERT INTO products (name,photo,shortdescription,description,price) values ('$name','$photo','$shortdesc','$description','$price')");
    } catch (Exception $e) {
        $message = 'Unable to add new product.' . $e;
        throw new Exception('Unable to save details. Please try again later.', 0, $e);
    }

    if (!$insertData) {
        $message = 'Couldnot save data..' . $e;
        echo 'mysqli_error()';
    } else {
        echo "<script>alert('Product added successfully');</script>";
        header("Location:../admin-panel/add-product.php");
    }
}
?>
<!-- Save Business Contact Info -->


<!-- xEdit Products -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>KisanArea | Add new Product</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css" />
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
    <!-- BS Stepper -->
    <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css" />
    <!-- dropzonejs -->
    <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link text-white-50">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="../contact.php" class="nav-link">Contact</a>
        </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                </li>


                <!-- Notifications Dropdown Menu -->

                <li>
                    <a class="nav-link text-white-50" href="#">
                        <i class="far fa-user text-white-50"></i> Admin
                    </a>
                </li>
                <li class="info">
                    <a class="nav-link text-white-50" href="./logout.php">
                        <i class="fa fas-signout text-white" aria-hidden="true"></i>Logout
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../image/w.png" alt="KisanArea Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font">KisanArea</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../image/userg.png" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="./add-product.php" class="d-block nav-link">
                                <i class="nav-icon fas fa-upload"></i>
                                <p>
                                    Add Product
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./manageprod.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Manage Product
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage Products</h1>
                        </div>

                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                                <!-- SELECT2 EXAMPLE -->
                                <div class="card card-default">
                                    <div class="card-header">
                                    </div>
                                </div>


                                <?php
                                $q = mysqli_query($mysqli, "SELECT * FROM products");
                                $rr = mysqli_num_rows($q);
                                if (!$rr) {
                                    echo "<h2 style='color:red'>No any products found !!!</h2>";
                                } else {
                                ?>
                                    <h2>All Products</h2>

                                    <table border="1" class="table border-3 border-dark">
                                        <tr>
                                            <th colspan="7"><a href="add-product.php">Add New Product</a></th>
                                        </tr>
                                        <tr class=" success">
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                                        <?php


                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($q)) {

                                            echo "<tr>";
                                            echo "<td>" . $i . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . '<img class="card-img-top img-fluid img-thumbnail w-50" src="./uploads/products<?php echo $featuredProd["photo"];"?>' . "</td>";
                                            echo "<td>" . $row['description'] . "</td>";
                                            echo "<td>" . $row['price'] . "</td>";

                                        ?>
                                            <td><a href="javascript:DeleteProducts('<?php echo $row['productid']; ?>')" class="btn btn-danger">Delete</a></td>


                                        <?php
                                            echo "<td><a href='updateProd.php?page=updateProd&pid=" . $row['productid'] . "' class='btn btn-secondary'>Update</a></td>";
                                            echo "</tr>";
                                            $i++;
                                        }
                                        ?>

                                    </table>
                                <?php } ?>

                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php

    ?>
    <script>
        function DeleteProducts(id) {
            if (confirm("Do you want to delete this product?")) {
                alert("Product Deleted.");
                window.location.href = "deleteprod.php?id=" + id;
            }
        }
    </script>
</body>

</html>