<?php

require_once("query.php");

$id = $_REQUEST['id'];

// sending query
$sql = "DELETE FROM tasks WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Taak verwijderd - je wordt naar de takenlijst verstuurd..";
    header( "refresh:1;url=index.php" );
} else {
    echo "Error deleting record: " . $conn->error;
}