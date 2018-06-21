<?php
/**
 * Created by PhpStorm.
 * User: XJoeyV
 * Date: 5/25/2018
 * Time: 10:32 AM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>All Blogs</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Blogging Platform</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <a href="?action=add" class="btn btn-sm btn-success">Add Blog</a>
                </div>
            </div>
            <div class="row">
            <?php foreach (BloggingPlatform::get()->blogger()->all() as $blog): ?>
                <div class="col-md-12">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blog['name'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $blog['date'] ?></h6>
                            <p class="card-text">
                                <?= $blog['content'] ?>
                            </p>
                            <a href="?action=edit&id=<?= $blog['id'] ?>" class="card-link btn-sm">Edit</a>
                            <a href="?action=delete&id=<?= $blog['id'] ?>" class="card-link btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>

