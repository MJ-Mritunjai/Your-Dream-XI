<!DOCTYPE html>
<html>
<head>
	<title>Dream Team</title>

<style>
fieldset{
	border:3px solid black;
	border-radius: 20px;
	max-width: 50%;
	margin: auto;
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
<!--
<script type="text/javascript">
	var fn = document.f.fname.value;
	var ln = document.f.lname.value;
	var em = document.f.email.value;
	var co = document.f.contact.value;
	var pasw = document.f.pass.value;
	var cpasw = document.f.cpass.value;

	function validate(){
		if (fn == "" || fn == null){
			alert("Please enter your First name.");
			return false;
		}
		if (ln == "" || ln == null){
			alert("Please enter your Last name.");
			return false;
		}
		if (pasw.length < 5){
			alert("Please create password of more than 5 character.");
			return false;
		}
		if (cpasw != pasw){
			alert("Password don't match.");
			return false;
		}
	}
</script>
-->
</head>
<body bgcolor=" AliceBlue" >
	<form name="f" onsubmit="validate()" action="test_store.php" method="post">
		<fieldset>
			<legend colspan="2" align="center" style="font-family: monospace; font-size: 30px; letter-spacing:1px; "><b>Register Yourself</b></legend>
		<table align="center">
			<tr height="35px" >
				<th colspan="2" style="font-family: monospace; font-size: 30px; letter-spacing:1px; "></th>
			</tr>
			
			<tr height="35px">
				<td >First Name</td>
				<td><input type="text" name="fname" size="35" placeholder="Enter your First Name"></td>
			</tr>
			<tr height="35px" width="500px">
				<td>Last Name</td>
				<td><input type="text" name="lname" size="35" placeholder="Enter your Last Name"></td>
			</tr>
			<tr height="35px">
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female </td>
			</tr>
			<tr height="35px">
				<td>Date of Birth</td>
				<td><input type="date" name="dob"></td>
			</tr>
			<tr height="35px">
				<td>E-mail id</td>
				<td><input type="text" name="email" size="35" placeholder="Enter your E-mail id"></td>
			</tr>
			<tr height="35px">
				<td>Password</td>
				<td><input type="password" name="pass" size="35" placeholder="Enter your password"></td>
			</tr>
			<tr height="35px">
				<td>Confirm Password</td>
				<td><input type="password" name="cpass" size="35" placeholder="Enter your password again"></td>
			</tr>
			<tr height="35px">
				<td>Contact</td>
				<td><input type="text" name="contact" size="35" placeholder="Enter your contact number"></td>
			</tr>
			<tr height="35px">
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Register">
					<input type="reset" name="reset" value="Clear">
				</td>
			</tr>
			<tr>
				<td  colspan="2" align="center">
					All set to login.
				</td>
			</tr>
			<tr >
				<td colspan="2" align="center">
					<a href="login.php"><b>Login Now</b></a>
				</td>
			</tr>

		</table>
		</fieldset>	
	</form>
	
</body>
</html>