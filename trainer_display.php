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
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
		.centre{
			text-align:center;
		}
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>List</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Joined On</th>
                <th>Update</th>
                <th>Delete</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                // LOOP TILL END OF DATA 
			// SQL query to select data from database
			$sql = "SELECT * FROM trainer";
		// define how many results you want per page
			$results_per_page = 9;

			// find out the number of results stored in database
			$result = mysqli_query($conn, $sql);
			$number_of_results = mysqli_num_rows($result);

			// determine number of total pages available
			$number_of_pages = ceil($number_of_results / $results_per_page);

			// determine which page number visitor is currently on
			if (!isset($_GET['page'])) {
				$page = 1;
			} else {
				$page = $_GET['page'];
			}

			// determine the sql LIMIT starting number for the results on the displaying page
			$this_page_first_result = ($page - 1) * $results_per_page;

			// retrieve selected results from database and display them on page
			$sql = 'SELECT * FROM trainer LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
			$result = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_array($result)) 
			{
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['middle_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['reg_date'];?></td>
                <?php
                echo "<td><a href='trainer_updating.php?id=".$row['id']."'>Update</a></td>";
                echo "<td><a href='trainer_delete.php?id=".$row['id']."'>Delete</a></td>";
			}
                ?>
            </tr>
         
        </table><div class="centre">
		    <?php
			
			for ($page = 1; $page <= $number_of_pages; $page++) {
				echo '<a href="t_display.php?page='. $page .'">' . $page . '</a>&nbsp;&nbsp;';
			}
            ?>
    </section>
</body>
  
</html>