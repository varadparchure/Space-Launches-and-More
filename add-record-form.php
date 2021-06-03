<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>Add Records Form</title>
    
<link rel="stylesheet" type="text/css" href="sign.css">
    
</head>

<body>
   
<div class="main1">  
<form action="insert.php" method="post">
	
    <h1>Sign-Up</h1>    
	
    <p>
    	<label for="Name">Name :</label>
        <input type="text" name="u_name"  id="Name">
    </p>
    <br>
	
	<p>
    	<label for="DOB">Date_Of_Birth :</label>
        <input type="date" name="dob" id="Date_Of_Birth">
    </p>
    <br>
	
	<p>
    	<label for="Address">Address :</label>
        <input type="text" name="u_add" id="Address">
    </p>
    <br>
	
	<p>
    	<label for="Gender">Gender :</label>
        <input type="radio" name="u_gender" value="male" checked> Male
		<input type="radio" name="u_gender" value="female"> Female
    </p>
    <br>
	
<div class="addreec">
<input type="submit" value="Add Records" id="addrec">
</div>

<br>
<br>

    <div class="log">
    Have a account?
	<a href="login.html">
    <div class="log1">Login</div> </a>
    </div>

</form>

</body>

</html>