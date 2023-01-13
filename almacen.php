<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$consulta = "SELECT * FROM almacen ";
$result   = mysqli_query($conexion, $consulta);
?>

<?php include "layout/submenu.php";?>  
<div class="container-fluid px-1">
		<div class="container-fluid">
		<h1 class="mt-4">Inventario<a href="agregar_almacen.php" type="button" class="btn btn-success" ><i class="fas fa-plus"></i></a></h1>
        <ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
			<li class="breadcrumb-item active">Inventario</li>
		</ol>
</div>

<div class="container-fluid px-1">
<div class="card-header">
			<i class="fas fa-table me-1"></i>
			Lista de Clientes
	</div>
	
<hr>
<table class="table">
<thead>
<tr>
<th><center>Id</center></th>
<th><center>Código</center></th>
<th><center>Nombre</center></th>
<th><center>Descripcion</center></th>
<th><center>Cantidad</center></th>
<th><center>Fecha</center></th>
<th><center>Acción</center></th>
</tr>
</thead>

<tbody>
<?php foreach ($result as $key): ?>
	
<tr>
<td class="text-center"> <?php echo $key['id'];  ?></td>
<td class="text-center"> <?php echo $key['codigo'];  ?></td>
<td class="text-center"> <?php echo $key['nombre'];  ?></td>
<td class="text-center"> <?php echo $key['descripcion'];  ?></td>
<td class="text-center"> <?php echo $key['cantidad'];  ?></td>
<td class="text-center"> <?php echo $key['fecha'];  ?></td>
<td class="text-center">
                                
<a href="editar_almacen.php?&id=<?php echo $key['id']; ?>" 
class="btn btn-warning" data-toggle="tooltip" ><i class="fas fa-pen">
</i></a></th>

<a href="eliminar_almacen.php?&id=<?php echo $key['id']; ?>" 
class="btn btn-danger" data-toggle="tooltip" ><i class="fas fa-trash-alt">	
</i></a>

</div>
</div>
</td>
</tr>
<?php endforeach;?>
</tbody> 
</div>
</div>


