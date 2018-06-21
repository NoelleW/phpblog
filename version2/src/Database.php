<?php
/**
 * Created by PhpStorm.
 * User: XJoeyV
 * Date: 5/25/2018
 * Time: 9:45 AM
 */

class Database
{

    private $DB;
    private $DETAILS = [
        "host" => "127.0.0.1",
        "user" => "root",
        "pass" => "",
        "name" => "blogging"
    ];

    public function __construct()
    {
        $host = $this->DETAILS['host'];
        $db = $this->DETAILS['name'];
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $this->DB = new PDO($dsn, $this->DETAILS['user'], $this->DETAILS['pass']);
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql, $exec = false) {
        if($exec) {
            try {
                $this->DB->exec($sql);
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        $stmt = $this->DB->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}