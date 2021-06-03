<!DOCTYPE html>

<html>

<head>

<title>Acknowledgement</title>

</head>
    
<body>

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "space");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$today = date("Y-m-d");
$diff = date_diff(date_create($dob), date_create($today));
$u_age = $diff->format('%y');

$u_name = mysqli_real_escape_string($link, $_REQUEST['u_name']);
$u_add = mysqli_real_escape_string($link, $_REQUEST['u_add']);
$u_gender = mysqli_real_escape_string($link, $_REQUEST['u_gender']);

// attempt insert query execution

//Insert Into UAdmin
$sql = "INSERT INTO uadmin(dob) VALUES ('$dob')";
if(mysqli_query($link, $sql)){
   
} else{
    echo "<br>ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//Insert Into Senior
$sql = "INSERT INTO users(u_name,u_add,dob,u_age,u_gender) VALUES ('$u_name', '$u_add', '$dob', '$u_age', '$u_gender')";
if(mysqli_query($link, $sql)){
   
} else{
    echo "<br>ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//Fetch Result Inserted
$resulted=mysqli_query($link,"select u_id from users where dob='$dob' and u_name='$u_name' and u_add='$u_add'");
while($data = mysqli_fetch_array($resulted)){
	$u_id=$data['u_id'];
}


// close connection
mysqli_close($link);
?>

<br>
<br>
    
    <div class="acc">
    Account Created 
    </div>
    
    <br>
    
	<h2>
    YOUR ID IS:
    </h2>

<?php
	echo "<h3>$u_id</h3>";
?>
    
<br>
<br>   
<br>
    
	<h2>
    YOUR PASSWORD IS:
    </h2>
        
<?php
    echo "<h3>$dob</h3>";
?>

    <br>
    <br>
    <br>
    <br>
    
    <br>
    <br>
    
	<style>
        
    body,html{
    height: 100%;
    background-image:url(l.jpg);
    background-size: cover;
    background-blend-mode:darken;
    background-color: rgba(11, 13, 11, 0.51);
    color: white;
    background-attachment: fixed;
	text-align: center;        
	}

.acc{
    font-size: 50px;
}
        
        
        
.button {
	background-color: #4CAF50; /* Green */
	border: none;
	color: white;
	padding: 16px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
	cursor: pointer;
}
        
        
.button1 {
	background-color: rgba(255, 255, 255, 0.56); 
	color: black; 
	border: 2px solid rgba(0, 0, 0, 0.85);
}
            
.button2 {
	background-color: rgba(255, 255, 255, 0.56); 
	color: black; 
	border: 2px solid rgba(0, 0, 0, 0.85);
}
    
.button1:hover {
	background-color: #131841;
	color: white;
}
        
.button2:hover {
	background-color: rgba(170, 49, 49, 0.72);
	color: white;
}
            
</style>
<button class="button button1"> <a href="http://localhost/Space/login.html"> <div class="sign">LOGIN</div> </a>    
<button class="button button2"> <a href="http://localhost/Space/add-record-form.php"> <div class="sign">SignUp</div> </a></button>

</body>

</html>
