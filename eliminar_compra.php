<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_comp = (int) $_GET['id']; 

$consulta = "SELECT * FROM compra WHERE id= $id_comp";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$numero_orden=$key['numero_orden'];
$nombre=$key['nombre'];
$costo=$key['costo'];
$cantidad=$key['cantidad'];
$proveedor=$key['proveedor'];
$estado=$key['estado'];

$query="DELETE FROM compra WHERE id = $id_comp";
$result   = mysqli_query($conexion,$query);

$accion = "Compra Eliminado";
$date     = date("Y-m-d H:i:s");



echo '<script type="text/javascript">
alert("Compra Eliminado ");
window.location.href="compra.php";
</script>';

?>