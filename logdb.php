<?php
include 'dbconn.php';

// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
// }

// $sql = "SELECT username = '$username' AND password = '$password' FROM users";

// if ($mysqli->query($sql)) {
//     session_start();
//     $_SESSION['username'] = $username;

//     echo "<script>alert('Logged in Successfully');

// window.location.href='./index.php';</script>";
// } else {
//     echo "<script>alert('Login Failed: ' . $mysqli->error;');
//     window.location.href='./login.php';</script>";
// }


extract($_POST);

if (isset($login)) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $row = mysqli_num_rows($query);
    if ($row) {
        session_start();
        $_SESSION['username'] = $username;
        echo "<script>alert('Login Successful');window.location.href='./index.php';</script>";
    } else {
        echo "<script>alert('Please check your username or password');window.location.href='./login.php';</script>";
    }
}
