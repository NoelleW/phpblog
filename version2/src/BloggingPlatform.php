<?php
/**
 * Created by PhpStorm.
 * User: XJoeyV
 * Date: 5/25/2018
 * Time: 9:44 AM
 */

require_once 'Database.php';

class BloggingPlatform
{

    private static $instance;
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public static function get()
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function action($action)
    {
        return file_exists('tpl/'.$action.'.php');
    }

    public function view($view)
    {
        include_once 'tpl/' . $view . '.php';
    }

    public function blogger()
    {
        return new Blogger();
    }
}