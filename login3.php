
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trainer login</title>
</head>
<body>
<?php
   // Establishing Connection with Server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="mydb";;
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $sql = "SELECT * FROM trainer WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count==1) {
         
         header("location: trainer_tt.html");
      }else {
         echo "<script>alert('Wrong ID and Password!!');</script>";
      }
   }
?>

    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="" method="POST">
                        <input type="email" class="input-box" placeholder="Your username(email)" name="email" required> 
                        <br><br>
                        <input type="password" class="input-box" placeholder="Your password" name="password" required>
                        <br><br>
                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>