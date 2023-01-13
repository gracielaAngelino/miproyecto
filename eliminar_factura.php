<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
 $id_fac = (int) $_GET['id']; 

$consulta = "SELECT * FROM factura WHERE id= $id_fac";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
 
$nro_fact   = $_POST['nro_fact '];
$codigo_fact = $_POST['codigo_fact'];
$n_servicio= $_POST['n_servicio'];
$n_cliente= $_POST['n_cliente'];
$total= $_POST['total'];
$date = date("Y-m-d H:i:s");

$accion = 'Factura Eliminada';
$query="DELETE FROM factura WHERE id = $id_fac";
$result   = mysqli_query($conexion,$query);

$accion = "Factura Eliminada";
$date     = date("Y-m-d H:i:s");

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

    echo '<script type="text/javascript">
          alert("Factura Eliminada ");
          window.location.href="factura.php";
          </script>';

?>