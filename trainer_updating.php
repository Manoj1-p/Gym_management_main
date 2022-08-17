<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="up.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    <title>Updating</title>
    <style>
    	form
    	{
    		width: 100%;
    	}
        table 
        {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        input
        {
        	width: 100%;
        }
  
        td 
        {
           
            border: 1px solid black;	
        }
  
        th,
        td 
        {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td 
        {	
            font-weight: lighter;
        }
    </style>
</head>
<body>
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
	$result = mysqli_query($conn, "SELECT * FROM trainer where id = $id");
?>
    <form action="trainer_updated.php" method="post">
    	<?php while ($res = mysqli_fetch_array($result)) { ?>
    		<table>
    			<tr>
        			<th>FIRST NAME</th>
        			<th>MIDDLE NAME</th>
        			<th>LAST NAME</th>
        			<th>EMAIL</th>
        			<th>GENDER</th>
	        		<th>PHONE NUMBER</th>
	        		<th>ADDRESS</th>
	        		<th>REGDATE</th>
	        			
        		</tr>
			    <tr>
				    <td><input type="text" name="f_name" value="<?php echo $res['first_name']; ?>"/></td>
				    <td><input type="text" name="m_name" value="<?php echo $res['middle_name']; ?>"/></td><br>
				    <td><input type="text" name="l_name" value="<?php echo $res['last_name']; ?>"/></td><br>
				    <td><input type="text" name="email" readonly value="<?php echo $res['email']; ?>"/><br></td>
				    <td><input type="text" name="gender" readonly value="<?php echo $res['gender']; ?>"/></td>
				    <td><input type="text" name="contact" value="<?php echo $res['contact']; ?>"/></td>
				    <td><input type="text" name="address" value="<?php echo $res['address']; ?>"/></td>
				    <td><input type="text" name="reg_date" readonly value="<?php echo $res['reg_date']; ?>"/></td>
				    
			    </tr>
			    <tr>
			    	<td colspan="8" align="center"><input type="submit" name="update" value="Submit"/></td>
			    </tr>
			    <input type="hidden" name="id" value="<?php echo $res['id']; ?>"/>
			<?php } ?>
			</table>
	</form>
</body>
</html>