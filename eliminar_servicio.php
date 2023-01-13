<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
$id_serv = (int) $_GET['id']; 

$accion = 'Servicio Eliminado';
$query="DELETE FROM servicio WHERE id = $id_serv";
$result   = mysqli_query($conexion,$query);

$accion = "Servicio Eliminado";
$date     = date("Y-m-d H:i:s");

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

    echo '<script type="text/javascript">
          alert("Servicio Eliminado ");
          window.location.href="servicios.php";
          </script>';

?>