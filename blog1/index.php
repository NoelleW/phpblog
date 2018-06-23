

<html>
<body>
<a href="newTask.php"> Nieuwe taak</a><br><br>
<?php
require_once("query.php");
// Show task
$sql = "SELECT  id ,title, content, date FROM tasks";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Taak nr.: ". $row["id"] . "<br>" . "Taak: " . $row["title"] . "<br>" . "Beschrijving: " .$row["content"]. "<br>". $row["date"].
            "<a href=\"deleteTask.php?id=$row[id]\">Delete</a><br><br>" ;
    }
}


$conn->close();
?>
</body>
</html>