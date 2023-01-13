<?php

session_start();

require_once "conex_graciela.php";
require_once "inicio.sesion.php";  
require_once "layout/head.php";


$consulta = "SELECT * FROM roles";
$result   = mysqli_query($conexion, $consulta);
 foreach ($result as $key): 

endforeach;
?>
<?php include "layout/submenu.php";?>
<br>
<div>
<h3><i class=""></i> <center>Roles</h3></center>
</div>
        
<div class="btn-group" role="group" aria-label="Basic example">
  			<a href="nuevo_rol.php" type="button"  class="btn btn-success">Nuevo Rol</a> 
		</div>           

<div class="content-panel">
<hr>
<table class="table">
<thead>
<tr>
<th>Nro</th>
<th><center>Nombre</center></th>
<th> <center>Acceso</center></th>    
<th><center>Fecha</center></th>
<th><center>Accion</center></th>
</tr>

</thead>
<tbody>
<?php foreach ($result as $key): ?>

<tr>
<td class="text-center"> <?php echo $key['id'];  ?></td>
<td class="text-center"> <?php echo $key['nombre']; ?></td>
<td class="text-center"> <?php echo $key['acceso']; ?></td>
<td class="text-center"> <?php echo $key['fecha']; ?></td>
<td class="text-center">
                                
<a href="editar_rol.php?&id=<?php echo $key['id']; ?>" class="btn btn-info btn-xs" title="Editar"  data-toggle="tooltip">
<span class="fa fa-pencil-square-o"></span>
</a>

<div class="btn-group">

<a href="eliminar_rol.php?&id=<?php echo $key['id']; ?>"class="btn btn-danger btn-xs"  title="eliminar" data-toggle="tooltip">

<span class="fa fa-times-circle-o"></span>
</a>

</div>
</td>
</tr>
<?php endforeach;?>
</tbody> 
            