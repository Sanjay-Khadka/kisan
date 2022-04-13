<?php
include 'dbconn.php';

if (isset($_POST['username']) && $_POST['password']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql = "INSERT INTO kisanarea (username,password)
    VALUES ('$username','$password')";

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
