<?php

include 'dbconn.php';

$sql = "CREATE TABLE kisanarea (
    ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";

if ($connection->query($sql)) {
    echo " Created Successfully";
} else {
    echo "Error Creating Database: " . $connection->connect_error;
}
