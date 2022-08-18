<?php
include('./dbconn.php');
?>
<html lang="en">

<head>
    <title>Search/KisanArea</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- <script src="./js/validate.js"></script> -->
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body background="./image/a.jpg">

    <?php
    require './includes/menu.php';
    ?>

    <div class="col-md-12 container mb-5 p-lg-5">
        <h2 class="d-flex mt-5 text-light font">YOUR SEARCH IS HERE</h2>
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered border border-dark">
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="./addtocart.php">
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "kisanarea");

                            if (isset($_GET['search'])) {
                                $filtervalues = $_GET['search'];
                                $query = "SELECT * FROM products WHERE CONCAT(name) LIKE '%$filtervalues%' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $featuredProd) {
                            ?>

                                        <tr>
                                            <td class="w-25 "><img class=" card-img-top img-fluid img-thumbnail w-50"" src=" admin-panel/uploads/products/<?php echo $featuredProd['photo']; ?>" alt="" />
                                            </td>
                                            <td><?= $featuredProd['name']; ?></td>
                                            <td><?= $featuredProd['description']; ?></td>
                                            <td><?= $featuredProd['price']; ?></td>
                                            <td><button type="submit" href="" name="Add_To_cart" class="btn btn-success btn-outline-navigation text-white">
                                                    Add to cart
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {

                                    ?>
                                    <tr>
                                        <td colspan="5">No Records Found</td>
                                    </tr>
                            <?php

                                }
                            }

                            ?>
                            <input type="hidden" name="Item_name" value="<?php echo $products['name']; ?>">
                            <input type="hidden" name="price" value="<?php echo $products['price']; ?>">
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<?php
require './includes/footer.php';
?>

</html>