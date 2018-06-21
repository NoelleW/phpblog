
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
</head>
<body>
<form  method="post">
    <p>
        <label for="taskTitle">Taak:</label>
        <input type="text" name="title" id="title" required>
    </p>
    <p>
        <label for="Content">Beschrijving: </label>
        <input type="text" name="content" id="content">
    </p>
    <p>
        <label for="DateExpire">Deadline: </label>
        <input type="date" name="date" id="date">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>