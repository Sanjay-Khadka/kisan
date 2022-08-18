<?php
session_start();
unset($_SESSION['admin']);
header('location:index.php');



session_start();
include('../dbconn.php');
$admin = $_SESSION['admin'];
if ($admin == "") {
    header('location:login.php');
}
