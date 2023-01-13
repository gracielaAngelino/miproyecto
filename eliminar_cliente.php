<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_c= (int) $_GET['id']; 

$consulta = "SELECT * FROM pclientes WHERE id= $id_c";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$nombre=$key['nombre'];
$ci=$key['ci'];
$telefono=$key['telefono'];
$correo=$key['correo'];
$direccion=$key['direccion'];
$receptor=$key['receptor'];



$accion = 'Cliente Eliminado';

$query="DELETE FROM pclientes WHERE id = $id_c";
$result   = mysqli_query($conexion,$query);

$accion = "Cliente Eliminado";
$date     = date("Y-m-d H:i:s");


echo '<script type="text/javascript">
alert("Cliente Eliminado ");
window.location.href="clientes.php";
</script>';

?>












