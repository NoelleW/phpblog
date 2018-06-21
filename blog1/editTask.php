<?php
require_once("query.php");
//Update tasks
$sql = "UPDATE Task";
if(mysqli_query($conn, $sql)){
echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($sql);
}
