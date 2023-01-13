<?php
session_start();


require_once 'conex_graciela.php';
require_once 'layout/head.php';

$consulta = "SELECT * FROM inventario ";
$result   = mysqli_query($conexion, $consulta);
?>

<br>
<div>
<?php include "layout/submenu.php";?>  
<div class="container">	

<h3><i class=""></i> <center>Inventario</h3></center>

</div>
<div class="btn-group" role="group" aria-label="Basic example">
  <a href="registroarticulo.php" type="button"  class="btn btn-info">Agregar Cantidad</a>
  <a href="agg_inventario.php" type="button"  class="btn btn-secondary">Agregar Articulo</a> 
</div>
<div class="content-panel">
<hr>
<table class="table">
<thead>
<tr>
<th><center>Id<center></th>
<th><center>Nombre de Artículo</center></th> 
<th><center>Cantidad</center></th> 
<th><center>Stok Mínimo</center></th> 
<th><center>Fecha</center></th> 
<th><center>Acción</center></th>

</thead>

<tbody>

<?php foreach ($result as $key): ?>

<tr>
<td class="text-center"> <?php echo $key['id'];  ?></td>
<td class="text-center"> <?php echo $key['nombrearticulo'];  ?></td>
<td class="text-center"> <?php echo $key['cantidad'];  ?></td>
<td class="text-center"> <?php echo $key['stok'];  ?></td>
<td class="text-center"> <?php echo $key['fecha']; ?></td>
<td class="text-center"> 

<a href="eliminar_inventario.php?&id=<?php echo $key['id']; ?>
"class="btn btn-danger btn-xs"  title="eliminar" data-toggle="tooltip">
<span class="fa fa-times"></span>
</a>


</div>
</div>
</td>
</tr>


<?php endforeach;?>


</a>
</tbody> 




