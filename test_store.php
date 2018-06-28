
<!DOCTYPE html>
<html>
<head>
	<title>Registration Result</title>
<style type="text/css">
h1{
	text-align: center;
}
body{
	background-image: url("football.jpg");
	background-repeat: none;
	background-position: center;
}
a:link{
	text-decoration: none;
	font-family: monospace;
	letter-spacing: 1px;
	font-size: 30px;
}
a:visited{
	text-decoration: none;
}
a:hover{
	text-decoration: none;
}
a:active{
	text-decoration: none;
}	
</style>	
</head>
<body>


<?php
include 'test_conn.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gen = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$con = $_POST['contact'];

$query = "insert into bestXI values ('$fname', '$lname', '$gen', '$dob', '$email', '$pass', '$cpass', '$con' )";
$op = mysqli_query($db_conn, $query);

if ($op){
	echo "<h1>Registration completed successfully</h1>";
}else{
	echo "<h1>Error occured in registration.</h1>";
}

?>

	
	<h1><a href="login.php">Login Now</a></h1>
</body>
</html>