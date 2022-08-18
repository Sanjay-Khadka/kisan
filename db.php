<?php
$servername = "localhost";
$username = 'root';
$password = '';
$database = 'kisanarea';

//  Creating Connection
$connection = new mysqli($servername, $username, $password);

// Checking Connection
if ($connection->connect_errno != 0) {
    die('Connection Failed ' . $connection->connect_error);
}

// Creating Database
$sql = "CREATE DATABASE $database";

if ($connection->query($sql)) {
    echo "Database Created Successfully";
} else {
    echo "Error Creating Database: " . $connection->connect_error;
}
