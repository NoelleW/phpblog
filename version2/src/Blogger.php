<?php
/**
 * Created by PhpStorm.
 * User: XJoeyV
 * Date: 5/25/2018
 * Time: 11:09 AM
 */

class Blogger extends BloggingPlatform
{
    private function date()
    {
        return "";
    }


    public function all()
    {
        $q = $this->db->query("SELECT * FROM `v3_blogs` ");
        return $q;
    }

    public function add($name, $content)
    {
        $date = $this->date();
        $this->db->query("INSERT INTO `v3_blogs` (name, content, date) VALUES ($name,$content,$date)", true);
        header('location: index.php');
    }
}