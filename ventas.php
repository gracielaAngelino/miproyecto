<?php
session_start();


require_once 'conex_graciela.php';
require_once 'layout/head.php';

$consulta = "SELECT * FROM venta";
$result   = mysqli_query($conexion, $consulta);
?>

<?php include "layout/submenu.php";?>  

<h3><i class=""></i> <center>Tabla de Ventas</h3></center>
<div class="row">
         
       

<a  href="#.php" > <input <center type=submit  value="Facturar Venta"/>  </center> </a>
<div class="col-md-18">
<div class="content-panel">
<hr>
<table class="table">
<thead>
<tr>
<th><center>Id de Venta<center></th>
<th><center>Articulo</center></th>
<th><center>Cantidad</center></th> 
<th><center>Fecha</center></th>
</thead>

<tbody>
<?php foreach ($result as $key): ?>

<tr>
<td class="text-center"> <?php echo $key['id_venta'];  ?></td>
<td class="text-center"> <?php echo $key['id_articulos'];  ?></td>
<td class="text-center"> <?php echo $key['cantidad'];  ?></td>

          
          
</div>
</td>
</tr>
<?php endforeach;?>
</a>
</tbody>




