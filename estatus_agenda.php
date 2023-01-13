<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_ag = (int) $_GET['id'];
$consulta = "SELECT * FROM agenda WHERE id ='$id_ag' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {

$estatus= $_POST['estatus'];


$date = date("Y-m-d H:i:s");
$accion = 'Servicio editado';

$query= "UPDATE agenda set estatus= '{$estatus}' WHERE id='{$id_ag}' ";

$result = mysqli_query($conexion,$query);
$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
  alert("Modificación de estatus exitosa");
  window.location.href="index.php";
  </script>';

  } else {

 ?>
<?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-6">
<div class="form-panel">
<h4 class="mb"><center> Modificación de estatus </center></h4>

<form name= "validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Estatus</label>
<div class="col-sm-8">
<input type="text" name= "estatus" value="<?php echo $key['estatus']; ?>"  class="form-control"
placeholder= "">
</div>
</div>





<center><button class="btn btn-theme" type="submit" name="actualizar">
<i class=""></i> Modificar </button></center>

<center> <a  href="index.php" class="btn btn-theme">Cancelar</a> </center>
</div>
</div>
</form>

<?php
}


?>
