<?php

include 'dbconn.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql = "SELECT username = '$username' AND password = '$password' FROM users";

if ($mysqli->query($sql)) {
    session_start();
    $_SESSION['username'] = $username;

    echo "<script>alert('Logged in Successfully');
    
window.location.href='./index.php';</script>";
} else {
    echo "<script>alert('Login Failed: ' . $mysqli->error;');
    window.location.href='./login.php';</script>";
}
