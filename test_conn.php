<?php

$db_conn = mysqli_connect('localhost', 'root', '', 'test');

if ($db_conn -> connect_error){
	die ("Connection not established.");
}

?>