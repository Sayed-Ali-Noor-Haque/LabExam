<?php include "Controller/validate.php"?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task 2</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <hr>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="first_name">First Name:</label> <input type="text" name="first_name" ><br>
			<br>
            <label for="last_name">Last Name:</label> <input type="text" name="last_name"><br>
			<br>
			<label for="email">E-mail: </label> <input type="text" name="email"><br>
            <br>
            <label for="Gender">Gender:</label>
            <input type="radio" name="Gender" value="Male">Male
            <input type="radio" name="Gender" value="Female">Female<br>
			<br>
			
			<label for="Mobile Number">Mobile Number: </label> <input type="Mobile Number" name="Mobile Number"><br>
      
            <br>
			<label for="Date Of Birth">Date Of Birth:</label>
<input type="Date Of Birth" id="start" name="trip-start"
       value="dd-mm-yy"
       min="01-01-1850" max="31-12-2030"><br>
			<br>
			<label for="HSC Result">HSC Result: </label> <input type="HSC Result" name="HSC Result"><br>
			<br>
			<label for="SSC Result">SSC Result: </label> <input type="SSC Result" name="SSC Result"><br>
			<br>
            <label for="Select A course you want to enroll">Select A course you want to enroll:</label>
            <input type="mySelect" name="Select A course you want to enroll" value="CSE">CSE
            <input type="mySelect" name="Select A course you want to enroll" value="EEE">EEE
            <input type="mySelect" name="Select A course you want to enroll" value="BBA">BBA<br>
            <br>
             <label for="Select A year enrolling year">Select A year enrolling year:</label>
            <input type="mySelect" name="Select A year enrolling year" value="2019">2019
            <input type="mySelect" name="Select A year enrolling year" value="2020">2020
            <input type="mySelect" name="Select A year enrolling year" value="2021">2021<br>
			<br>
			             <label for="Select A year enrolling year">Select A year enrolling year:</label>
            <input type="mySelect" name="Select A year enrolling year" value="summer">summer
            <input type="mySelect" name="Select A year enrolling year" value="spring">spring
            <input type="mySelect" name="Select A year enrolling year" value="Fall">Fall<br>
			<br>
			
            
     
            <input type="Insert Data" name="Insert Data" value="Insert Data">
           
        </form>>

    <?php include "Controller/process.php" ?>
    </body>
</html>