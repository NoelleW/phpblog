
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
</head>
<body>
<form action="index.php" method="get">
    <p>
        <label for="taskTitle">Taak:</label>
        <input type="text" name="taskTitle" id="taskTitle" required>
    </p>
    <p>
        <label for="Content">Beschrijving: </label>
        <input type="text" name="taskContent" id="taskContent">
    </p>
    <p>
        <label for="DateExpire">Deadline: </label>
        <input type="datetime-local" name="taskDueDate" id="taskDueDate">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>