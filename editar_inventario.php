<?php
session_start();

require_once 'conex_imroma1.php';
require_once 'layout/head.php';

$id_inventari_o = (int) $_GET['id'];
$consulta = "SELECT * FROM inventari_o WHERE id ='$id_inventari_o' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convierte string en array para campos
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
$costo = $_POST['costo'];
$date = date("Y-m-d H:i:s");
$accion = 'Información de inventario Editada';

$query= "UPDATE inventari_o set   costo= '{$costo}' WHERE id='{$id_inventari_o}' ";

$result = mysqli_query($conexion,$query);

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
        alert("Edicion de Inventario Exitosa");
        window.location.href="inventario.php";
        </script>';

  } else {

 ?>
 <?php include "layout/submenu.php"; ?>

<div class="row mt">
<div class="col-lg-6">
<div class="form-panel">
<h4 class="mb"><center> Editar Datos de  Inventario</center></h4>

<form name= "validar" class="form-horizontal style-form" method="post">
                       

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Costo</label>
<div class="col-sm-8">
<input type="text" name="costo"  value="<?php echo $key['costo']; ?>" class="form-control"
placeholder= " ">
</div>
</div>


<center><button class="btn btn-theme" type="submit" name="actualizar">
<i class=""></i> Editar </button></center>

<center> <a  href="inventario.php" class="btn btn-theme">Cancelar</a> </center>
</div>
</div>
</form>


<?php
}


?>
