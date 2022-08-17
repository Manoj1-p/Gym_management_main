<?php

//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$servername = "localhost";
$username = "root";
$password = "";
$db="myDB";;
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
$id=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM trainee WHERE id = $id"; 

if (mysqli_query($conn, $sql)) 
{
    mysqli_close($conn);
    header('Location: t_display.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>