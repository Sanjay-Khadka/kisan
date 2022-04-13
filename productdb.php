<?php
include 'dbconn.php';

if (isset($_POST['pname']) && $_POST['#price']) {
    $pname = $_POST['pname'];
    $pimage = $_FILES['pimage'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
}

$sql = "INSERT INTO products (name, photo, description, price)
    VALUES ('$pname','$pimage', '$desc', '$price')";

// if (mysqli_query($connection, $sql)) {
//     echo "New record has been added successfully !";
// } else {
//     echo "Error: " . $sql . ":-" . mysqli_error($connection);
// }

// mysqli_close($connection);
if ($connection->query($sql) > 0) {
    echo 'Record Inserted Successfully';
} else {
    echo 'Error Creating Database: ' . $connection->error;
}
