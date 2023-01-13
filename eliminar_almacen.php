<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
 $id_alm = (int) $_GET['id']; 

$consulta = "SELECT * FROM almacen WHERE id = $id_alm";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
 

$nombre= $_POST['nombre'];

 
$accion = 'Articulo Eliminado';
$query="DELETE FROM articulos WHERE id = $id_alm";
$result   = mysqli_query($conexion,$query);

$accion = "Articulo Eliminado";
$date     = date("Y-m-d H:i:s");



    echo '<script type="text/javascript">
          alert("Articulo Eliminado ");
          window.location.href="almacen.php";
          </script>';

?>