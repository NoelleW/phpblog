<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password,$name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all data
$sql = "SELECT * FROM Task";


$result = $conn->query($sql);


// Show tasks
//if ($result->num_rows > 0) {
//    while($row = $result->fetch_assoc()) {
//        echo "Taak nr.: ". $row["ID"]. "<br>". "Taak: ". $row["Title"]. "<br>". "Beschrijving: " . $row["Content"]."<br>". $row["DateExpire"]. "<br><br>";
//    }
//} else {
//    echo "0 results";
//}
// No SQL Injections allowed!
//$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$taskTitle = mysqli_real_escape_string($conn, $_REQUEST['taskTitle']);
$taskContent = mysqli_real_escape_string($conn, $_REQUEST['taskContent']);
$taskDueDate = mysqli_real_escape_string($conn, $_REQUEST['taskDueDate']);


// Add Task
$sql = "INSERT INTO Task (Title,Content,DateExpire) 
VALUES ('$taskTitle','$taskContent','$taskDueDate')";


//Error check for Insert statement
if ($conn->multi_query($sql) == TRUE) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "DELETE FROM Task WHERE ID=$ID";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}






$conn->close();
//if ($result = mysqli_query($conn,$sql))
//{
//    // Fetch one and one row
//    while ($row=mysqli_fetch_row($result))
//    {
//        echo $sql;
//    }
//    // Free result set
//    mysqli_free_result($result);
//    echo "hello world0";
//}
//$conn->close();
?>