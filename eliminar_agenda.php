<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_ag= (int) $_GET['id']; 

$consulta = "SELECT * FROM agenda WHERE id= $id_ag";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$cliente=$key['cliente'];
$servicio=$key['servicio'];
$fecha=$key['fecha'];
$estatus=$key['estatus'];


$accion = 'Cita Eliminada';

$query="DELETE FROM agenda WHERE id = $id_ag";
$result   = mysqli_query($conexion,$query);

$accion = "Cita Eliminada";
$date     = date("Y-m-d H:i:s");

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

echo '<script type="text/javascript">
alert("Cita Eliminada ");
window.location.href="index.php";
</script>';

?>

