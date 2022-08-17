
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="addmemm.css">
    <title>Add trainer</title>
</head>
<body>
    <div class="mem">
        <div class=outouter>
        <div class="outer">
            <div class="inner">
                <h1>ADD TRAINER HERE</h1>
                <form>
                        <input type="text" placeholder="Enter First Name" class="input-boxing" required>
                        <input type="text" placeholder="Enter Middle Name" class="input-boxing">
                        <input type="text" placeholder="Enter Last Name" class="input-boxing" required>
                        <select name="gender">
                            <option name="gender" value="select">Select</option>
                            <option name="gender" value="male">Male</option>
                            <option name="gender" value="female">Female</option>
                            <option name="gender" value="others">Others</option>
                        </select>
                        <input type="text" name="num" class="input-boxing" placeholder="Enter Phone Number" onkeypress="return onlyNumberKey(event)" maxlength="10" required>
                        <input type="email" class="input-boxing" placeholder="Enter Email" required>
                        <textarea class="input-boxing" placeholder="Enter Address Here"></textarea>
                        <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </div>

    <script>
        function onlyNumberKey(evt) 
        {
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
        }
    </script>
    
</body>
</html>