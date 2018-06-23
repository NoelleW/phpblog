<a href="index.php">Ga naar het overzicht</a>
<form action="editTask.php" method="post" >
    <p>
        <label for="taskTitle">Taak:</label>
        <input type="text" name="title" id="title" required>
    </p>
    <p>
        <label for="Content">Beschrijving: </label>
        <input type="text" name="content" id="content">
    </p>
    <input type="submit" value="Submit">
</form>


<?php
require_once("query.php");
$title = $_POST["title"];
$content = $_POST["content"];
$id = $_REQUEST['id'];
$sql = "UPDATE tasks SET title='$title', content='$content' WHERE id='$id'";

