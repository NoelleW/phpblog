<?php
/**
 * Created by PhpStorm.
 * User: XJoeyV
 * Date: 5/25/2018
 * Time: 9:44 AM
 */

require_once 'src/BloggingPlatform.php';
require_once 'src/Blogger.php';

if(isset($_GET['action']) && !empty($_GET['action'])) {
    if(BloggingPlatform::get()->action($_GET['action'])) {
        BloggingPlatform::get()->view($_GET['action']);
    }
} else {
    BloggingPlatform::get()->view('index');
}
?>
