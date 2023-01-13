<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_usuarios = (int) $_GET['id']; 

$consulta = "SELECT * FROM usuario WHERE id= $id_usuarios";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$nombre=$key['nombre'];
$apellido=$key['apellido'];
$correo=$key['correo'];
$clave=$key['clave'];
$accion = 'Usuario Eliminado';

$query="DELETE FROM usuario WHERE id = $id_usuarios";
$result   = mysqli_query($conexion,$query);

$accion = "Usuario Eliminado";
$date     = date("Y-m-d H:i:s");



echo '<script type="text/javascript">
alert("Usuario Eliminado ");
window.location.href="usuario.php";
</script>';

?>