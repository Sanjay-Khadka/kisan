<?php

include 'dbconn.php';

$sql = "SELECT * FROM tbl_categories WHERE ID IN(SELECT DISTINCT ID as category_id FROM tbl_products WHERE category_id=1)";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $data = [];

    while ($row = $result->fetch_assoc()) {
        // array_puch( &array: $data, $rows);
    }
}

echo '<pre>';
print_r("");
echo '</pre>';
