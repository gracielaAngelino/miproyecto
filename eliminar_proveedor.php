<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_p = (int) $_GET['id']; 

$consulta = "SELECT * FROM proveedor WHERE id_proveedor= $id_p";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$nombre_proveedor=$key['nombre_proveedor'];
$telefono_proveedor=$key['telefono_proveedor'];
$direccion_proveedor=$key['direccion_proveedor'];

$accion = 'Proveedor Eliminado';

$query="DELETE FROM proveedor WHERE id_proveedor = $id_p";
$result   = mysqli_query($conexion,$query);

$accion = "Proveedor Eliminado";
$date     = date("Y-m-d H:i:s");

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

echo '<script type="text/javascript">
alert("Proveedor Eliminado ");
window.location.href="proveedores.php";
</script>';

?>