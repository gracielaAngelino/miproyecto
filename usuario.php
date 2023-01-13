<?php

session_start();

//require_once "inicio.sesion.php";
require_once 'conex_graciela.php';
require_once 'layout/head.php';

$consulta = "SELECT * FROM usuario ";
$result   = mysqli_query($conexion, $consulta);

?>

<br>
<div>
<?php include "layout/submenu.php"; ?>
<div class="container">	

<h3><i class=""></i> <center>Usuarios</h3></center>

</div>


<div class="btn-group" role="group" aria-label="Basic example">
  			<a href="registro_interno.php" type="button"  class="btn btn-success">Añadir nuevo usuario</a> 
		</div>
<div class="content-panel">
<hr>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Nro</th>
<th><center>Nombre</center></th>
<th> <center>Cedula</center></th>
<th><center>Correo</center></th>
<th><center>Clave</center></th>
<th><center>Fecha</center></th>
<th><center>Accion</center></th>
</tr>
</thead>

<tbody>
<?php foreach ($result as $key): ?>

<tr>
<td class="text-center"> <?php echo $key['id'];  ?></td>
<td class="text-center"> <?php echo $key['nombre']; ?></td>
<td class="text-center"> <?php echo $key['cedula']; ?></td>
<td class="text-center"> <?php echo $key['correo']; ?></td>
<td class="text-center"> <?php echo $key['clave']; ?></td>
<td class="text-center"> <?php echo $key['fecha']; ?></td>
<td class="text-center">
                                
<a href="editar_usuario.php?&id=<?php echo $key['id']; ?>" class="btn btn-info btn-xs" title="editar"  data-toggle="tooltip">
<span class="fa fa-pencil-square-o"></span>
</a>


<a href="asignar_rol.php?&id=<?php echo $key['id']; ?>"class="btn btn-warning btn-xs"  title="asignar rol" data-toggle="tooltip">
<span class="fa fa-users"></span>
</a>

<div class="btn-group">

<a href="eliminar_usuario.php?&id=<?php echo $key['id']; ?>"class="btn btn-danger btn-xs"  title="eliminar" data-toggle="tooltip">
<span class="fa fa-times-circle-o"></span>
</a>

</div>
</td>
</tr>
<?php endforeach;?>
</tbody> 
