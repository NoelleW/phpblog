<?php
/**
 * Created by PhpStorm.
 * User: Noëlle
* Date: 26-4-2018
* Time: 13:07
*/

require_once("query.php");
$id = $_GET['id'];
//$sql = "SELECT id FROM Task WHERE id = ".$_GET[];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Taak nr.: " . $row["id"];

        if ($_GET[$id] == $row["id"]){
            echo "test";
        }
    }}
echo $id;