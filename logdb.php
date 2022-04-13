<?php

session_start();

include 'dbconn.php';

if (isset($_POST['username']) && $_POST['password']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql = "SELECT username = '$username' AND password = '$password' FROM users";

if ($connection->query($sql)) {

    $_SESSION['username'] = $username;

    echo "<script>alert('Login Successfull');
    
window.location.href='./home.php';</script>";
} else {
    echo "<script>alert('Login Failed: ' . $connection->error;');
    window.location.href='./login.php';</script>";
}
