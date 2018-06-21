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
$sql = "SELECT * FROM tasks";


$result = $conn->query($sql);


// Show tasks
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Taak nr.: ". $row["id"]. "<br>". "Taak: ". $row["title"]. "<br>". "Beschrijving: " . $row["content"]."<br>". $row["date"]. "<br><br>";
    }
} else {
    echo "0 results";
}

// Add Task
//$sql = "INSERT INTO Tasks (title,content)
//VALUES (title, content)";

//Error check for Insert statement


if (isset($_POST['submit']))
{
    $user= $_POST['title'];
    $email = $_POST['content'];
    $pass= $_POST['date'];

    mysqli_query("INSERT INTO Tasks (title, content, date) VALUES(title,content, date)");

}
//best outside the if statement so user isn't stuck on a white blank page.

//$sql = "DELETE FROM Task WHERE ID=$ID";
//if(mysqli_query($conn, $sql)){
//    echo "Records were deleted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//}






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