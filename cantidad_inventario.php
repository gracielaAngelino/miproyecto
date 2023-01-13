<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_inv = (int) $_GET['id'];
$consulta = "SELECT * FROM inventario WHERE id ='$id_inv' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
  

$cantidad=$_POST['cantidad'];

    
$accion = 'Cantidad del artículo del inventario editada';

$query= "UPDATE inventario set cantidad= '{$cantidad}' WHERE id='{$id_inv}' ";

$result = mysqli_query($conexion,$query);


 echo '<script type="text/javascript">
       alert("Se agrego cantidad de forma Exitosa");
        window.location.href="inventario.php";
        </script>';

  } else {

 ?>
 <?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><center> Cargar Cantidad </center></h4>
                      
 <form name= "validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Seleccione Cantidad </label>
<div class="form-group">
<div class="col-md-8 col-sm-6 col-xs-12">
<select name="cantidad"  id="cantidad" class="form-control" ><span class=" form-control" ></span>
<option value="0">seleccione</option>
<?php 
$consulta= "SELECT * FROM compra";
$result_comp  = mysqli_query($conexion,$consulta);

?>
<?php foreach ($result_comp as $key):?>
<option value="<?=$key['cantidad']?>">
<?=$key['cantidad']?>

</option>
<?php endforeach;?>
</select>
</div>
</div>




<center><button class="btn btn-info" type="submit" name="actualizar">
<i class=""></i> Editar </button>
  <a href="inventario.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
  </div>
</div>
</form>


<?php
}


?>


