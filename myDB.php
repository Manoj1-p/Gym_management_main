<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE)
{
	echo "Database created successfully";
} 
else 
{
	echo "Error creating database: " . $conn->error;
}

//connecting to database

mysqli_select_db($conn,'myDB' );


//trainee table/////
$traineetable = "CREATE TABLE IF NOT EXISTS trainee (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
middle_name VARCHAR(30),
email VARCHAR(50),
password VARCHAR(30),
gender VARCHAR(7),
contact VARCHAR(10),
address VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($traineetable) === TRUE) 
{
  echo "Table trainee created successfully";
} 
else 
{
  echo "Error creating table: " . $conn->error;
}


//trainer table/////
$trainertable = "CREATE TABLE IF NOT EXISTS trainer (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
middle_name VARCHAR(30),
email VARCHAR(50),
password VARCHAR(30),
gender VARCHAR(7),
contact VARCHAR(10),
address VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($trainertable) === TRUE) 
{
  echo "Table trainer created successfully";
} 
else 
{
  echo "Error creating table: " . $conn->error;
}

