<?php
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
if (isset($_POST['update'])) {
	$sql = "UPDATE trainer SET first_name='$_POST[f_name]',middle_name='$_POST[m_name]',last_name='$_POST[l_name]',contact='$_POST[contact]',address='$_POST[address]'
        WHERE id = '$_POST[id]'";
} else {
echo "Nothing was posted";
}
if (mysqli_query($conn, $sql)) 
{
	header('Location: trainer_display.php'); //If book.php is your main page where you list your all records
    exit;
} else {
echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>