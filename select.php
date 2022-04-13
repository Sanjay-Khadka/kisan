<?php

include 'dbconn.php';

$sql = "SELECT * FROM tbl_products";

$result = $connection->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // array.push( &array: $data, $row);
        $data[] = $row;
    }
}

echo '<pre>';
print_r($data);
echo '</pre>';
