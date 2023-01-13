<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_arti = (int) $_GET['id']; 

$consulta = "SELECT * FROM articulos WHERE id= $id_arti";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$nombre=$key['nombre'];
$codigo=$key['codigo'];
$marca=$key['marca'];
$caracteristicas=$key['caracteristicas'];
$proveedor=$key['proveedor'];
$costo=$key['costo'];
$cantidad=$key['cantidad'];
$accion = 'Artículo Eliminado';

$query="DELETE FROM articulos WHERE id = $id_arti";
$result   = mysqli_query($conexion,$query);

$accion = "Artículo Eliminado";
$date     = date("Y-m-d H:i:s");



echo '<script type="text/javascript">
alert("Artículo Eliminado ");
window.location.href="articulos.php";
</script>';

?>