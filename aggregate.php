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

$sql = "SELECT count(*) as total_product,
    sum(price) as sum_price,
    max(price) as maximum_price,
    min(price) as minimum_price
    FROM tbl_products";
// "SELECT count(*) FROM tbl_products";

$result = $conection->query($sql);

if ($result->num_rows == 0) {
    $row = $result->fetch_assoc();
    print_r($row);
}
