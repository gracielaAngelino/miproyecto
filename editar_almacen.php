<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_alm = (int) $_GET['id'];
$consulta = "SELECT * FROM almacen WHERE id ='$id_alm' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
  
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad= $_POST['cantidad'];
$date = date("Y-m-d H:i:s");
    
$accion = 'Información del Cliente Editada';

$query= "UPDATE almacen set nombre = '{$nombre}', descripcion= '{$descripcion}',
  cantidad= '{$cantidad}' WHERE id='{$id_alm}' ";

$result = mysqli_query($conexion,$query);


 echo '<script type="text/javascript">
       alert("Edicion de almacen Exitosa");
        window.location.href="almacen.php";
        </script>';

  } else {

 ?>
 <?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-6">
<div class="form-panel">
<h4 class="mb"><center> Editar Datos </center></h4>
                      
 <form name= "validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name= "nombre" value="<?php echo $key['nombre']; ?>"  class="form-control"
placeholder= "Ingrese Nombre">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Descripción</label>
<div class="col-sm-8">
<input type="text" name="descripcion" value="<?php echo $key['descripcion']; ?>" class="form-control"
 placeholder=" Ingrese descripcion">                               
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cantidad</label>
<div class="col-sm-8">
<input type="text" name="cantidad"  value="<?php echo $key['cantidad']; ?>" class="form-control"
placeholder= " Ingrese Correo">
</div>
</div>


<center><button class="btn btn-theme" type="submit" name="actualizar">
<i class=""></i> Editar </button></center>

<center> <a  href="usuario.php" class="btn btn-theme">Cancelar</a> </center>
</div>
</div>
</form>


<?php
}


?>


