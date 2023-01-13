<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";
 $id_esp = (int) $_GET['id']; 

$consulta = "SELECT * FROM especialistas WHERE id= $id_esp";
$result   = mysqli_query($conexion, $consulta);

foreach ($result as $key): endforeach;
 
$nombre= $_POST['nombre'];
$cedula= $_POST['cedula'];

$accion = 'Especialista Eliminado';
$query="DELETE FROM especialistas WHERE id = $id_esp";
$result   = mysqli_query($conexion,$query);

$accion = "Especialista Eliminado";
$date     = date("Y-m-d H:i:s");

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

    echo '<script type="text/javascript">
          alert("Especialista Eliminado ");
          window.location.href="especialistas.php";
          </script>';

?>