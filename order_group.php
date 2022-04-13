<?php

include 'dbconn.php';
$sql = "SELECT ID as category_id, sum(price) from tbl_products
GROUP BY category_id ORDER BY category_id DESC";

$result = $connection->query($sql);

if ($result->$num_rows > 0) {
    $data = [];

    while ($rows = $result->fetch_assoc()) {
        // array_push(_&array: $data, $rows);
    }
}
