<?php

include 'dbconn.php';

$sql = "SELECT * FROM tbl_products tp JOIN tbl_categories tc to ON tp.category_id = tc.ID";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $rows;
    }
}
echo '<pre>';
print_r($data);
echo '</pre>';
