
<form action="index.php" method="post" >
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

// Add task
$title = $_POST["title"];
$content = $_POST["content"];
$sql = "INSERT INTO tasks (title,content) VALUES ('$title','$content ')";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>". $conn->error;
}
?>