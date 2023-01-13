<?php

$hostname='localhost';
$username='root';
$password='';
$dbname='sistema';

$conexion=mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	mysqli_select_db($conexion,$dbname);
	


?>
