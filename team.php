<?php
include 'test_conn.php';

$email = $_POST['email'];

$em_check = "select * from team where email='$email'";
$op = mysqli_query($db_conn, $em_check);

if($op){
	if(mysqli_num_rows($op) == 1){
			echo "";
	}
	else{
		echo "<h2>Your Team doesn't exist.</h2>";
	}
}
$f_format = "select format from team where email='$email'";
$op_format = mysqli_query($db_conn, $f_format);
$d_format = mysqli_fetch_assoc($op_format);

$f_gk = "select gk from team where email='$email'";
$op_gk = mysqli_query($db_conn, $f_gk);
$d_gk = mysqli_fetch_assoc($op_gk);

$f_rb = "select rb from team where email='$email'";
$op_rb = mysqli_query($db_conn, $f_rb);
$d_rb = mysqli_fetch_assoc($op_rb);

$f_rcb = "select rcb from team where email='$email'";
$op_rcb = mysqli_query($db_conn, $f_rcb);
$d_rcb = mysqli_fetch_assoc($op_rcb);

$f_lcb = "select lcb from team where email='$email'";
$op_lcb = mysqli_query($db_conn, $f_lcb);
$d_lcb = mysqli_fetch_assoc($op_lcb);

$f_lb = "select lb from team where email='$email'";
$op_lb = mysqli_query($db_conn, $f_lb);
$d_lb = mysqli_fetch_assoc($op_lb);

$f_dm = "select dm from team where email='$email'";
$op_dm = mysqli_query($db_conn, $f_dm);
$d_dm = mysqli_fetch_assoc($op_dm);

$f_lcm = "select lcm from team where email='$email'";
$op_lcm = mysqli_query($db_conn, $f_lcm);
$d_lcm = mysqli_fetch_assoc($op_lcm);

$f_rcm = "select rcm from team where email='$email'";
$op_rcm = mysqli_query($db_conn, $f_rcm);
$d_rcm = mysqli_fetch_assoc($op_rcm);

$f_lw = "select lw from team where email='$email'";
$op_lw = mysqli_query($db_conn, $f_lw);
$d_lw = mysqli_fetch_assoc($op_lw);

$f_rw = "select rw from team where email='$email'";
$op_rw = mysqli_query($db_conn, $f_rw);
$d_rw = mysqli_fetch_assoc($op_rw);

$f_cf = "select cf from team where email='$email'";
$op_cf = mysqli_query($db_conn, $f_cf);
$d_cf = mysqli_fetch_assoc($op_cf);

$f_man = "select manager from team where email='$email'";
$op_man = mysqli_query($db_conn, $f_man);
$d_man = mysqli_fetch_assoc($op_man);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Your Team</title>
<style type="text/css">
fieldset{
	border:3px solid black;
	border-radius: 20px;
	max-width: 60%;
	margin: auto;
}
legend{
	font-size: 50px;
	font-family: monospace;
}
body{
	background-image: url("football.jpg");
	background-repeat: none;
	background-position: center;
}
table{	
	letter-spacing: 2px;
	font-family: Arial;
	font-size: 30px;
}
h2{
	text-align: center;
}
</style>
</head>
<body>
<form action="1.php">
	<p align="center"><input type="submit" name="logout" value="Logout" ></p>
</form>
<fieldset>
	<legend align="center">Your Team</legend>
<table align="center">
	<tr>
		<th>Formation : </th>
		<th><?php echo $d_format['format']; ?></th>
	</tr>
	<tr>
		<td>Goalkeeper : </td>
		<td><?php echo $d_gk['gk']; ?></td>
	</tr>
	<tr>
		<td>Right Back : </td>
		<td><?php echo $d_rb['rb']; ?></td>
	</tr>
	<tr>
		<td>Left Central Defender : </td>
		<td><?php echo $d_lcb['lcb']; ?></td>
	</tr>
	<tr>
		<td>Right Central Defender : </td>
		<td><?php echo $d_rcb['rcb']; ?></td>
	</tr>
	<tr>
		<td>Left Back : </td>
		<td><?php echo $d_lb['lb']; ?></td>
	</tr>
	<tr>
		<td>Defensive Midfielder : </td>
		<td><?php echo $d_dm['dm']; ?></td>
	</tr>
	<tr>
		<td>Left Central Midfielder : </td>
		<td><?php echo $d_lcm['lcm']; ?></td>
	</tr>
	<tr>
		<td>Right Cental Midfielder : </td>
		<td><?php echo $d_rcm['rcm']; ?></td>
	</tr>
	<tr>
		<td>Left Winger : </td>
		<td><?php echo $d_lw['lw']; ?></td>
	</tr>
	<tr>
		<td>Right Winger : </td>
		<td><?php echo $d_rw['rw']; ?></td>
	</tr>
	<tr>
		<td>Centre Forward : </td>
		<td><?php echo $d_cf['cf']; ?></td>
	</tr>
	<tr>
		<th>Manager : </th>
		<th><?php echo $d_man['manager']; ?></th>
	</tr>
</table>
</fieldset>
</body>
</html>