<?php
// Establishing Connection with Server
$servername = "localhost";
$username = "root";
$password = "";
$db="myDB";;
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
 // Fetching variables of the form which travels in URL
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$gender = $_POST['gender'];
	$contact = $_POST['phone'];
	$address = $_POST['address'];
	$q="SELECT email FROM trainee WHERE email = '$email'";
	$result =mysqli_query($conn,$q);

	if ($result && mysqli_num_rows($result) > 0)
	{
		echo "<script>alert('Email already exists!!');window.location.href='addmem.html';</script>";
		;
	}
	else
	{
	if($fname !='')
	{
	//Insert Query of SQL
	$insert = "INSERT INTO trainee(first_name,middle_name,last_name,email,password,gender,contact,address) 
					values ('$fname','$mname','$lname','$email','$pass','$gender','$contact','$address')";
				if ($conn->query($insert) === TRUE) 
				{
				  echo "<script>alert('Added!!');window.location.href='collect.html';</script>";
				} 
				else 
				{
				  echo "Error creating table: " . $conn->error;
				}
	}
	else
	{
		echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
	}
	}
mysqli_close($conn); // Closing Connection with Server
?>
