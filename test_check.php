<?php
include 'test_conn.php';

$email = $_POST['email'];
$pass = $_POST['pass'];
/*
function val()
{

	header('Location:http://localhost/project/1.php');
}*/

$query = "select passw from bestXI where e_mail='$email' ";
$op = mysqli_query($db_conn, $query);

$fetch_name = "select f_name from bestXI where e_mail='$email' ";
$op_name = mysqli_query($db_conn, $fetch_name);
$display_fname = mysqli_fetch_assoc($op_name);

$fetch_lname = "select l_name from bestXI where e_mail='$email' ";
$op_lname = mysqli_query($db_conn, $fetch_lname);
$display_lname = mysqli_fetch_assoc($op_lname);

$fetch_gen = "select gender from bestXI where e_mail='$email' ";
$op_gen = mysqli_query($db_conn, $fetch_gen);
$display_gen = mysqli_fetch_assoc($op_gen);

$fetch_dob = "select date from bestXI where e_mail='$email' ";
$op_dob = mysqli_query($db_conn, $fetch_dob);
$display_dob = mysqli_fetch_assoc($op_dob);

$fetch_email = "select e_mail from bestXI where e_mail='$email' ";
$op_email = mysqli_query($db_conn, $fetch_email);
$display_email = mysqli_fetch_assoc($op_email);

$fetch_con = "select contact from bestXI where e_mail='$email' ";
$op_con = mysqli_query($db_conn, $fetch_con);
$display_con = mysqli_fetch_assoc($op_con);

if($op){
	if(mysqli_num_rows($op) > 0){
		$arr = mysqli_fetch_assoc($op);
		$co = 1;
		while ($co == 1){
			$r_pass = $arr['passw'];
			$co = 2;
		}	
	}else{
			echo "No record found.";
		}
if ($pass == $r_pass){
	//echo "<h1>WELCOME"," ",$email,"</h1>";
}else{
	header('Location: http://localhost/project/login.php');
}		
	
}
mysqli_close($db_conn);

?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style type="text/css">
fieldset{
	border:3px solid black;
	border-radius: 20px;
	max-width: 70%;
	margin: auto;
}
legend{
	font-size: 50px;
	font-family: monospace;
}
h1{
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
<!--<script type="text/javascript">
	var email = document.f.email.value;
	function val(){
		if (email == "" || email == null){
			alert("Please enter your E-mail id");
			return false;
		}
		else{
			window.location = "http://localhost/project/best_db.php";
			return true;
		}
	}
</script>-->
</head>
<body>
<h1 align="center">
	Welcome	
</h1>
<form action="1.php">
	<p align="center"><input type="submit" name="logout" value="Logout"></p>
</form>
<fieldset id="f1">
	<legend align="center">About You</legend>
<table align="center">
	<tr>
		<td>First Name : <?php echo $display_fname['f_name']; ?></td>
		<td>Last Name : <?php echo $display_lname['l_name']; ?></td>
	</tr>
	<tr>	
		<td>Gender : <?php echo $display_gen['gender']; ?></td>
		<td>Date of Birth : <?php echo $display_dob['date']; ?></td>
	</tr>
	<tr>
		<td>E-mail : <?php echo $display_email['e_mail']; ?></td>
		<td>Contact : <?php echo $display_con['contact']; ?></td>
	</tr>
</table>
</fieldset>
</form>
<!--<button type="button" onclick="logout()">Logout</button>
-->


<form name="f" action="best_db.php" method="post" >
	<fieldset id="f2">
		<legend align="center">Create Your own Best XI</legend>
	<table align="center">
		<tr height="45px">
			<th>Select Formation</th>
			<td><select name="format">
				<option value="4-3-3">4-3-3</option>
				<option value="4-4-2">4-4-2</option>
				<option value="4-2-3-1">4-2-3-1</option>
				<option value="3-4-3">3-4-3</option>
			</select></td>
		</tr>
		<tr>
			<td>Goalkeeper</td>
			<td><select name="gk">
				<option value="Marc ter Stegen">Marc-André ter Stegen</option>
				<option value="Iker Casillas">Iker Casillas</option>
				<option value="David de Gea">David de Gea</option>
				<option value="Gianluigi Buffon">Gianluigi Buffon</option>
				<option value="Manuel Neuer">Manuel Neuer</option>
				<option value="Keylor Navas">Keylor Navas</option>
				<option value="Jan Oblak">Jan Oblak</option>
			</select></td>
		</tr>
		<tr>
			<td>Right Back</td>
			<td><select name="rb">
				<option value="Dani Alves">Dani Alves</option>
				<option value="Nelson Semedo">Nelson Semedo</option>
				<option value="Dani Carvajal">Dani Carvajal</option>
				<option value="Juanfran">Juanfran</option>
			</select></td>
		</tr>
		<tr>
			<td>Right Centre Back</td>
			<td><select name="rcb">
				<option value="Gerard Pique">Gerard Pique</option>
				<option value="Sergio Ramos">Sergio Ramos</option>
				<option value="Giorgio Chiellini">Giorgio Chiellini</option>
				<option value="Thiago Silva">Thiago Silva</option>
				<option value="David Luiz">David Luiz</option>
				<option value="Javier Mascheranho">Javier Mascheranho</option>
			</select></td>
		</tr>
		<tr>
			<td>Left Centre Back</td>
			<td><select name="lcb">
				<option value="Samuel Umtiti">Samuel Umtiti</option>
				<option value="Mats Hummels">Mats Hummels</option>
				<option value="Diego Godin">Diego Godin</option>
				<option value="Leonardo Bonucci">Leonardo Bonucci</option>
				<option value="Raphael Varane">Raphael Varane</option>
				<option value="Pepe">Pepe</option>
			</select></td>
		</tr>
		<tr>
			<td>Left Back</td>
			<td><select name="lb">
				<option value="Marcelo">Marcelo</option>
				<option value="Jordi Alba">Jordi Alba</option>
				<option value="Filipe Luis">Filipe Luis</option>
				<option value="Lucas Digne">Lucas Digne</option>
			</select></td>
		</tr>
		<tr>
			<td>Defensive Midfielder</td>
			<td><select name="dm">
				<option value="Sergio Busquets">Sergio Busquets</option>
				<option value="Casemiro">Casemiro</option>
				<option value="Kante">Kante</option>
				<option value="Cesc Fabregas">Cesc Fabregas</option>
				<option value="Fernandinho">Fernandinho</option>
				<option value="Xabi Alonso">Xabi Alonso</option>
			</select></td>
		</tr>
		<tr>
			<td>Left Central Midfielder</td>
			<td><select name="lcm">
				<option value="Andres Iniesta">Andres Iniesta</option>
				<option value="Toni Kroos">Toni Kroos</option>
				<option value="Paul Pogba">Paul Pogba</option>
				<option value="Philepe Coutinho">Philepe Coutinho</option>
				<option value="Isco">Isco</option>
				<option value="David Silva">David Silva</option>
			</select></td>
		</tr>
		<tr>
			<td>Right Central Midfielder</td>
			<td><select name="rcm">
				<option value="Luka Modric">Luka Modric</option>
				<option value="Kevin de Bryune">Kevin de Bryune</option>
				<option value="Ivan Rakitic">Ivan Rakitic</option>
				<option value="Sergi Roberto">Sergi Roberto</option>
				<option value="Jorghinho">Jorghinho</option>
				<option value="Marco Veratti">Marco Veratti</option>
			</select></td>
		</tr>
		<tr>
			<td>Left Winger</td>
			<td><select name="lw">
				<option value="Neymar Jr">Neymar Jr</option>
				<option value="Osumane Dembele">Osumane Dembele</option>
				<option value="Kylian Mambappe">Kylian Mambappe</option>
				<option value="Alexis Sanchez">Alexis Sanchez</option>
				<option value="Pedro Rodriguez">Pedro Rodriguez</option>
				<option value="Cristiano Ronaldo">Cristiano Ronaldo</option>
			</select></td>
		</tr>
		<tr>
			<td>Right Winger</td>
			<td><select name="rw">
				<option value="Lionel Messi">Lionel Messi</option>
				<option value="Arjen Robben">Arjen Robben</option>
				<option value="Gerath Bale">Gerath Bale</option>
				<option value="Rahim Sterling">Rahim Sterling</option>
				<option value="Md. Salah">Md. Salah</option>
				<option value="Mario Gotze">Mario Gotze</option>
			</select></td>
		</tr>
		<tr>
			<td>Centre Forward</td>
			<td><select name="cf">
				<option value="Luis Suarez">Luis Suarez</option>
				<option value="Karim Benzema">Karim Benzema</option>
				<option value="Edison Cavani">Edison Cavani</option>
				<option value="Zalatan Ibrhamovic">Zalatan Ibrhamovic</option>
				<option value="Sergio Aguero">Sergio Aguero</option>
				<option value="Robert Lewandowski">Robert Lewandowski</option>
			</select></td>
		</tr>
		<tr height="45px">
			<th>Select Manager</th>
			<td><select name="man">
				<option value="Pep Guardiola">Pep Guardiola</option>
				<option value="Zinadine Zidane">Zinadine Zidane</option>
				<option value="Jose Mourinho">Jose Mourinho</option>
				<option value="Ernesto Velverde">Ernesto Velverde</option>
				<option value="Antonio Conte">Antonio Conte</option>
				<option value="Jurgen Klopp">Jurgen Klopp</option>
			</select></td>
		</tr>
		<tr>
			<td>E-mail id</td>
			<td><input type="text" name="email" placeholder="Enter your E-mail again"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Confirm"></td>
		</tr>
		</fieldset>
	</table>
<h3 align="center">Already have a team <a href="view_team.php">Click here</a></h3>	
</form>
</body>
</html>