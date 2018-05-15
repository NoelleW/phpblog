<?php
/**
 * Created by PhpStorm.
 * User: Noëlle
 * Date: 9-5-2018
 * Time: 20:34
 */
pdo_drivers();
$user = "root";
$pass = "";
try {
    $conn = new PDO("mysqli:host=localhost;dbname=blog;", $user, $pass);
} catch (PDOException $e){
    print "Error!: " . $e->getMEssage()."<br/>";
    die();
}
