<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="myDB";;
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Checking for connections
if ($conn->connect_error) 
{
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
$id=$_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM trainee where id = $id");
?>
<html>
<form action="test.php" method="post">
<?php while ($res = mysqli_fetch_array($result)) { ?>
	<table>
    <tr>
    <td><input type="text" name="f_name" value="<?php echo $res['first_name']; ?>"/></td>
    <td><input type="text" name="m_name" value="<?php echo $res['middle_name']; ?>"/></td>
    <td><input type="text" name="l_name" value="<?php echo $res['last_name']; ?>"/></td>
    <td><input type="text" name="email" readonly value="<?php echo $res['email']; ?>"/></td>
    <td><input type="text" name="gender" readonly value="<?php echo $res['gender']; ?>"/></td>
    <td><input type="text" name="contact" value="<?php echo $res['contact']; ?>"/></td>
    <td><input type="text" name="address" value="<?php echo $res['address']; ?>"/></td>
    <td><input type="text" name="reg_date" readonly value="<?php echo $res['reg_date']; ?>"/></td>
    <td><input type="hidden" name="id" value="<?php echo $res['id']; ?>"/></td>
    </tr>
<?php } ?>
</table>
<input type="submit" name="update" value="Submit"/>
</form>
</html>