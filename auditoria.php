<?php
session_start();

require_once 'conex_graciela.php';
require_once "layout/head.php";

$consulta = "SELECT * FROM auditoria";
$result   = mysqli_query($conexion, $consulta);
?>

<?php include "layout/submenu.php"; ?>
            
<h3><i class=""></i> <center>Auditoria</h3></center>
<div class="row">
<div class="col-md-12">
<div class="content-panel">
<hr>
<table class="table">
<thead>
<tr>
<th>Nro</th>
<th><center>Nombre</center></th>
<th> <center>Accion</center></th>
<th><center>Fecha</center></th>
</tr>
</thead>

<tbody>

<?php foreach ($result as $key): ?>

<tr>
<td class="text-center"> <?php echo $key['id'];  ?></td>
<td class="text-center"> <?php echo $key['nombre']; ?></td>
<td class="text-center"> <?php echo $key['accion']; ?></td>
<td class="text-center"> <?php echo $key['fecha']; ?></td>
</tr>

<?php endforeach;?>

</tbody> 