<?php
require_once("query.php");

$sql = "UPDATE tasks SET title=$title WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}