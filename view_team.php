<!DOCTYPE html>
<html>
<head>
	<title>View Your Team</title>
<style type="text/css">
body{
	background-image: url("football.jpg");
	background-repeat: none;
	background-position: center;
}
fieldset{
	border:3px solid black;
	border-radius: 20px;
	max-width: 30%;
	margin: auto;
}
table{	
	letter-spacing: 2px;
	font-family: Arial;
	font-size: 30px;
}
</style>
</head>
<body>

<form action="team.php" method="post">
	<fieldset>
	<table align="center">
		<tr>
			<td>E-mail id</td>
			<td><input type="text" name="email" placeholder="Enter your email here"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
	</fieldset>
</form>

</body>
</html>