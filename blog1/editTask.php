<?php

//Update tasks
$sql = "UPDATE Task SET Title='$taskTitle' WHERE ID= $id";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($sql);
}
