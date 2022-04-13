<?php
$servername = "localhost";
$username = 'root';
$password = '';
$database = 'kisanarea';

//  Creating Connection
$connection = new mysqli($servername, $username, $password, $database);

// Checking Connection
if ($connection->connect_errno != 0) {
    die('Connection Failed ' . $connection->connect_error);
}

// Creating Database
