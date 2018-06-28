<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<style type="text/css">
fieldset{
	border:3px solid black;
	border-radius: 20px;
	max-width: 30%;
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

</style>

</head>
<body>
	<form action="test_check.php" method="post">
		<fieldset>
		<legend align="center">Login</legend>
		<table align="center">
			<tr>
				<td>E-mail id</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>

