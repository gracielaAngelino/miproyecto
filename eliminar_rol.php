<?php
session_start();

require_once "layout/submenu.php";
require_once "conex_graciela.php";
$id_roles = (int) $_GET['id']; //recivir el id por URL

$consulta = "SELECT * FROM roles WHERE id_rol= $id_roles";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$nombre=$key['nombre'];

$query="DELETE FROM roles WHERE id_rol = $id_roles";
$result   = mysqli_query($conexion,$query);

$accion = "Rol Eliminado";
$date     = date("Y-m-d H:i:s");

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

echo '<script type="text/javascript">
alert("Rol Eliminado de forma Exitosa");
window.location.href="roles.php";
</script>';

?>