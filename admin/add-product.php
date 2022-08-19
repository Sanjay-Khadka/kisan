<?php
session_start();
include_once("../dbconn.php");
// include_once("../functions.php");


// $username = $_SESSION["email"];
// $userID = $_SESSION["userid"];
// $user = $_SESSION["username"];

// $user_image = $_SESSION["user_image"];
// $user_fullname = $_SESSION["user_fullName"];
// $user_type = $_SESSION["user_type"];
// $user_role = $_SESSION["user_role"];

// $exhibitorID = (string)$_GET['eid'];

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
      '<script>console.log("File uploaded successfully!");</script>';
    } else {
      '<script>console.log("Sorry, file not uploaded, please try again!");</script>';
    }
    // Code to Upload Files

    $query = mysqli_query($mysqli, "INSERT INTO products (name,photo,shortdescription,description,price) values ('$name','$photo','$shortdesc','$description','$price')");
  } catch (Exception $e) {
    $message = 'Unable to add new product.' . $e;
    throw new Exception('Unable to save details. Please try again later.', 0, $e);
  }

  if ($mysqli->affected_rows == 1) {
    echo '<script>alert("Product Added Successfully");</script>';
    header("Location:../admin/add-product.php");
  } else {
    echo '<script>alert("Couldnot Add Product");</script>';
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
  <link rel="icon" type="image/x-icon" href="../image/kisanarea.png" />

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li> -->
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link text-white-50 font">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="../contact.php" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a> -->
        <!-- <div class="navbar-search-block">
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
          </div> -->
        </li>


        <!-- Notifications Dropdown Menu -->

        <li>
          <a class="nav-link text-white-50 font" href="#">
            <i class="fa fa-user text-white-50"></i> Admin
          </a>
        </li>
        <li class="info">
          <a class="nav-link text-white-50 font" href="./logout.php">
            <i class="fa fa-sign-out-alt text-white-50" aria-hidden="true"></i>Logout
          </a> <!-- Navbar Search -->
        </li>
        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="manage-profile.php" class="dropdown-item">
              <i class="fas fa-plus mr-2"></i> Manage Profile
            </a>
            <a href="add-product.php" class="dropdown-item">
              <i class="fas fa-plus mr-2"></i> Add New Product

            </a> -->
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
        <!-- </li> -->

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
            <img src="../image/userw.png" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block font">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="./dashboard.php" class="d-block nav-link font">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./add-product.php" class="d-block nav-link font">
                <i class="nav-icon fas fa-upload"></i>
                <p>
                  Add Product
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./manageprod.php" class="nav-link font">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Manage Product
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./manageUsr.php" class="d-block nav-link font">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>
                  Manage User
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
        <div class="container d-flex justify-content-center">
          <b class="font">
            <h1>Add New Product</h1>
          </b>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body font">
          <form method="POST" id="ProductDetails" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-6 col-lg-6">
                <label>Product Name</label>
                <input type="text" name="name" id="name" class="form-control border-1 border-secondary" value="" placeholder="Product Name">
              </div>

              <!-- <div class="form-group col-md-6 col-lg-6">
                    <label>Base Price for Bidding</label>
                    <input type="number" name="base_price" id="base_price" class="form-control border-1 border-secondary" min="1000" value="25000" placeholder="Base Price for Product">
                  </div> -->

              <div class="form-group col-md-6 col-lg-6">
                <label>Photo URL</label>
                <input type="file" name="photo" id="photo" class="form-control border-1 border-secondary p-1" placeholder="Photo URL">
              </div>


              <!-- <div class="form-group col-md-6">
                    <label>Category</label>
                    <select name="categoryid" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="categoryid">
                      <option value="1">None</option>
                      <option value="2">Fruit</option>
                      <option value="3">Vegetable</option>
                    </select>
                  </div> -->

              <div class="form-group col-md-6 col-lg-6">
                <label>Price</label>
                <input type="number" name="price" id="price" placeholder="Price" class="form-control border-1 border-secondary">
              </div>

              <div class="form-group col-md-8 col-lg-12">
                <label>Short Description</label>
                <textarea name="shortdescription" id="shortdescription" cols="10" rows="5" class="form-control border-1 border-secondary" placeholder="Short Description"></textarea>
              </div>

              <div class=" form-group col-md-8 col-lg-12">
                <label>Product Description:</label>
                <textarea name="description" id="description" cols="10" rows="5" class="form-control border-1 border-secondary" placeholder="Product Description"></textarea>
              </div>

              <div class="form-group col-md-8 col-lg-12">
                <label>Features</label>
                <textarea name="features" id="features" cols="10" rows="5" class="form-control border-1 border-secondary" placeholder="Features"></textarea>
              </div>

              <div class="form-group col-md-6 col-md-6">
                <label>Is Active</label>
                <select name="isActive" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="isActive">
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
              <div class="form-group col-md-6 col-md-6">
                <label>Is Featured</label>
                <select name="isFeatured" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="isFeatured">
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <input type="submit" value="ADD" name="submit_prod" id="submit" class="btn btn-success" />
                <input type="reset" value="RESET" name="" id="submit" class="btn btn-secondary" />

              </div>
            </div>

          </form>
          <!-- /.content-wrapper -->
          <footer class="d-flex justify-content-center mt-5">
            <strong>Copyright &copy; 2022
              <a href="#">KisanArea</a>.</strong>
          </footer>

          <!-- Control Sidebar -->

          <!-- /.control-sidebar -->
        </div>
      </section>
    </div>
  </div>

</body>

</html>