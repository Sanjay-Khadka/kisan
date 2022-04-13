<?php
$servername = "localhost";
$username = 'root';
$password = '';
$database = 'db';

// Cresting Connection
$connection = new mysqli($servername, $username, $password, $database);

// Checking Connection
if ($connection->connect_errno != 0) {
    die("Connection Failed:" . $connection->connect_error);
}

if (isset($_POST['fname']) && $_POST['lname'] && $_POST['contactn'] && $_POST['email']) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contactn = $_POST['contactn'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
}
$sql = "INSERT into crud(fname,lname,contactn,email,comments) values 
('$fname','$lname','$contactn','$email','$comments')";

if ($connection->query($sql) > 0) {
    echo "<script>alert('Record Inserted Successfully')</script>";
} else {
    echo "<script>alert('Error Creating Database: ' . $connection->error)</script>";
}
