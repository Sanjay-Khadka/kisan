<?php

include 'db.php';

// Delete Table Query
$sql = "DELETE FROM tbl_products WHERE id=101";

// Execute SQL and get result object in case of select query
$result = $connection->query($sql);

// Check if result object contain any record
if ($connection->affected_rows == 1) {
    echo "Record Deleted Successfully";
}
