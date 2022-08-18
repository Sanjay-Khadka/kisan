<?php
session_start();
include_once("../db-config.php");
// include_once("../functions.php");
include_once("../func.php");

// $username = $_SESSION["email"];
// $userID = $_SESSION["userid"];
$user = $_SESSION["username"];

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
    echo mysqli_error();
  }
  echo "<script>alert('Product added successfully');</script>";
  header("Location:../admin-panel/add-product.php");
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
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../contact.php" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i> <?php echo $_SESSION["username"]; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="manage-profile.php" class="dropdown-item">
              <i class="fas fa-plus mr-2"></i> Manage Profile
            </a>
            <a href="add-product.php" class="dropdown-item">
              <i class="fas fa-plus mr-2"></i> Add New Product

            </a>
            <!-- <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div> -->
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.php" class="brand-link">
        <img src="../image/w.png" alt="kisanarea Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">KisanArea</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../image/userg.png" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Manage Item
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                  </a>
                </li>
              </ul>
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
              <h1>Add New Product</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="POST" id="ProductDetails" enctype="multipart/form-data" onsubmit="">
              <div class="form-row">
                <div class="form-group col-md-6 col-lg-6">
                  <label>Product Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="" placeholder="Product Name">
                </div>

                <!-- <div class="form-group col-md-6 col-lg-6">
                    <label>Base Price for Bidding</label>
                    <input type="number" name="base_price" id="base_price" class="form-control" min="1000" value="25000" placeholder="Base Price for Product">
                  </div> -->

                <div class="form-group col-md-6 col-lg-6">
                  <label>Photo URL</label>
                  <input type="file" name="photo" id="photo" class="form-control p-1" placeholder="Photo URL">
                </div>


                <!-- <div class="form-group col-md-6">
                    <label>Category</label>
                    <select name="categoryid" required autocomplete="off" class="form-control combobox" id="categoryid">
                      <option value="1">None</option>
                      <option value="2">Fruit</option>
                      <option value="3">Vegetable</option>
                    </select>
                  </div> -->

                <div class="form-group col-md-6 col-lg-6">
                  <label>Price</label>
                  <input type="number" name="price" id="price" value="" class="form-control">
                </div>

                <div class="form-group col-md-8 col-lg-12">
                  <label>Short Description</label>
                  <textarea name="shortdescription" id="shortdescription" cols="10" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group col-md-8 col-lg-12">
                  <label>Product Description:</label>
                  <textarea name="description" id="description" cols="10" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group col-md-8 col-lg-12">
                  <label>Features</label>
                  <textarea name="features" id="features" cols="10" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group col-md-6 col-md-6">
                  <label>Is Active</label>
                  <select name="isActive" required autocomplete="off" class="form-control combobox" id="isActive">
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  </select>
                </div>
                <div class="form-group col-md-6 col-md-6">
                  <label>Is Featured</label>
                  <select name="isFeatured" required autocomplete="off" class="form-control combobox" id="isFeatured">
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <input type="submit" value="SAVE" name="" id="" class="btn btn-secondary" />
                  <input name="" type="reset" value="Reset" class="btn btn-secondary" />
                </div>


            </form>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
              <strong>Copyright &copy; 2022
                <a href="../index.php">KisanArea</a>.</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->

          <!-- jQuery -->

</body>

</html>