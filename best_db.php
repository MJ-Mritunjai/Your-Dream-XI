<?php
include 'test_conn.php';

$email = $_POST['email'];
$format = $_POST['format'];
$gk = $_POST['gk'];
$rb = $_POST['rb'];
$rcb = $_POST['rcb'];
$lcb = $_POST['lcb'];
$lb = $_POST['lb'];
$dm = $_POST['dm'];
$lcm = $_POST['lcm'];
$rcm = $_POST['rcm'];
$lw = $_POST['lw'];
$rw = $_POST['rw'];
$cf = $_POST['cf'];
$man = $_POST['man'];

//echo $email,$format,$gk,$rb,$rcb,$lcb,$lb,$dm,$lcm,$rcm,$lw,$rw,$cf,$man;
$st_query = "insert into team values ('$email', '$format', '$gk', '$rb', '$rcb', '$lcb', '$lb', '$dm', '$lcm', '$rcm', '$lw', '$rw', '$cf', '$man') ";
$op_query = mysqli_query($db_conn, $st_query);

if ($op_query){
	$op = "Your team has been submitted.";
}
else{
	$op_err = "You have already submitted your team once.";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Submission</title>
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
<h1><?php echo $op; ?></h1>

<h1><a href="view_team.php">See your team here</a></h1>
</body>
</html>