<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_in= (int) $_GET['id']; 

$consulta = "SELECT * FROM inventario WHERE id= $id_in";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
$nombrearticulo=$key['nombrearticulo'];
$codigoarticulo=$key['codigoarticulo'];
$cantidad=$key['cantidad'];
$stok=$key['stok'];
$date     = date("Y-m-d H:i:s");


$accion = 'Artículo Eliminado';

$query="DELETE FROM inventario WHERE id = $id_in";
$result   = mysqli_query($conexion,$query);

$accion = "Artículo Eliminado";
$date     = date("Y-m-d H:i:s");


echo '<script type="text/javascript">
alert("Artículo Eliminado ");
window.location.href="inventario.php";
</script>';

?>












