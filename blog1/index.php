<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Takenlijst</title>
</head>
<body>
<table>
    <tr>
        <td><h1>Taken</h1></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p><a href="newTask.php">Voeg taak toe</a></p></td>
    </tr>
</table>



</body>
</html>
<?php
require("query.php");

// Show tasks
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Taak nr.: ". $row["id"]. "<br>". "Taak: ". $row["title"]. "<br>". "Beschrijving: " . $row["content"]."<br>"."Eind datum: " . $row["DATE"]. "<br>".

            "<form action=\"editTask.php\" method=\"post\">

                <input type=\"submit\" value=\"Bewerk\"> 
               
            </form> 
            
            <form action=\"deleteTask.php\" method=\post\">

                <input type=\"submit\" value=\"Verwijder\"> 
               
            </form>
<a href='editTask.php'>Bewerk</a> &nbsp; &nbsp;<a href='deleteTask.php'>Verwijder</a><br><br>";

    }
} else {
    echo "De takenlijst is leeg";
}
?>