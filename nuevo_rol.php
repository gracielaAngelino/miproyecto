<?php

session_start();

require_once "layout/head.php";
require_once "conex_graciela.php";

if (isset($_POST["guardar"])) {
$nombre   = $_POST['nombre'];
$date = date("Y-m-d H:i:s");
$acceso  = implode(',', $_POST['box']);
$accion = " se registro nuevo rol";
$sql = "INSERT INTO roles (nombre,acceso,fecha) VALUES('{$nombre}','{$acceso}','{$date}')";


$result = mysqli_query($conexion, $sql);
$sql_acc = "INSERT INTO auditoria(nombre,accion,fecha) VALUES('{$nombre}','{$accion}','{$date}')";
$result_acc = mysqli_query($conexion, $sql_acc);

echo '<script type="text/javascript">
      alert("Registro del Rol Exitoso");
      window.location.href="roles.php";
      </script>';


} else {

?>

<?php include "layout/submenu.php";?>
<div class="row mt">
<div class="col-lg-6">
<div class="form-panel"> 
<h4 class="mb"><center> Nuevo Rol </center></h4>
                      
<form name= "validar" class="form-horizontal style-form" method="post">

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name= "nombre" class="form-control"
" placeholder=" Ingrese Nombre">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Inicio</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="1" class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Servicios</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="2" class="form-control"  >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Almacén</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="3" class="form-control"  >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Facturación</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="4" class="form-control"  >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Clientes</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="5" class="form-control"  >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Configuración</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="6" class="form-control"  >
</div>
</div>



<center><button class="btn btn-theme" type="submit" name="guardar">
<i class=""></i> Crear </button></center>

<center> <a  href="roles.php" class="btn btn-theme">Cancelar</a> </center>
</div>
</div>
</form>
<?php
}

?>