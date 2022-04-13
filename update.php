<?php

include 'dbconn.php';

// $sql = "UPDATE tbl_products SET name='Natraj Pencil', price=15 WHERE id=101";
$sql = "UPDATE kisanarea SET username='pompe', password='' WHERE id=1";

$result = $connecton->query($sql);

if ($connection->affected_rows == 1) {
    echo 'Record Updated Successfully';
} else {
    echo 'Failed';
}
