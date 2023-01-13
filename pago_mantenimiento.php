<?php
session_start();

require_once 'conex_imroma1.php';
require_once 'layout/head.php';

$id_presupuest_o = (int) $_GET['id'];
$consulta = "SELECT * FROM presupuest_o WHERE id ='$id_presupuest_o' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
  
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$servicios   = $_POST['servicios'];
$cantidad  = $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$forma_pago  = $_POST['forma_pago'];
$ref_entrega  = $_POST['ref_entrega'];
$total  = $_POST['total'];

$date = date("Y-m-d H:i:s");
$accion = "se registro nueva información del presupuesto";

$query= "UPDATE presupuest_o set nombre = '{$nombre}', cedula= '{$cedula}', servicios= '{$servicios}', cantidad= '{$cantidad}', descripcion= '{$descripcion}',forma_pago= '{$forma_pago}', ref_entrega= '{$ref_entrega}',  total= '{$total}' WHERE id='{$id_presupuest_o}' ";

$result = mysqli_query($conexion,$query);

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
      alert("Nueva información registrada");
      window.location.href="presupuesto.php";
      </script>';

  } else {

 ?>

<?php include "layout/submenu.php"; ?>

<div class="row mt">
<div class="col-lg-6">
<div class="form-panel">
<h4 class="mb"><center> NOTA DE ENTREGA SERVICIO DE MANTENIMIENTO "IMROMA" </center></h4>
                      
<form name= "validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name= "nombre" value="<?php echo $key['nombre']; ?>"  class="form-control"
placeholder= "">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cedula</label>
<div class="col-sm-8">
<input type="text" name="cedula" value="<?php echo $key['cedula']; ?>" class="form-control"  placeholder=" ">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Servicio</label>
<div class="col-sm-8">
<input type="text" name="servicios" value="<?php echo $key['servicios']; ?>" class="form-control"  placeholder=" ">
</div>
</div>
                                  
 <div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cantidad de Equipos</label>
<div class="col-sm-8">
<input type="text" name= "cantidad" value="<?php echo $key['cantidad']; ?>"  class="form-control"
placeholder= "Ingrese Cantidad">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Descripcion</label>
<div class="col-sm-8">
<input " type="text" name=descripcion value="<?php echo $key['descripcion']; ?>"  class="form-control"
placeholder=" Ingrese Descripcion">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Estado de Pago</label>
<div class="col-sm-8">
<input " type="text" name=forma_pago value="<?php echo $key['forma_pago']; ?>"  class="form-control"
placeholder=" Ingrese Forma de pago">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Referencia de Nota de Entrega</label>
<div class="col-sm-8">
<input " type="text" name= ref_entrega value="<?php echo $key['ref_entrega']; ?>"  class="form-control"
placeholder=" ">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Total</label>
<div class="col-sm-8">
<input " type="text" name=total value="<?php echo $key['total']; ?>"  class="form-control"
placeholder=" Ingrese Total">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Fecha</label>
<div class="col-sm-8">
<input " type="date" name=fecha value="<?php echo $key['fecha']; ?>"  class="form-control"
placeholder=" Ingrese Fecha">
</div>
</div>

<br>
<center><button class="btn btn-line" type="submit" >
<i href="#" class=""></i> IMPRIMIR </button></center>
<br>

</div>
</div>
</form>

<?php
}

?>