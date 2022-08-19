<?php
include('../dbconn.php');
$pid = $_GET['id'];

$q = mysqli_query($mysqli, "delete from products where productid='$pid'");

header('location:manageProd.php?page=notification');
