<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";
session_start();

if (isset($_POST["guardar"])){

$nombre   = $_POST['nombre'];
$cedula = $_POST['cedula'];
$correo  = $_POST['correo'];
$clave = md5($_POST['clave']);
$date = date("Y-m-d H:i:s");

$accion = "se registro como nuevo usuario";

$sql = "INSERT INTO usuario (nombre,cedula,correo,clave,fecha)VALUES('{$nombre}','{$cedula}','{$correo}','{$clave}','{$date}')";
$result = mysqli_query($conexion, $sql);
$sql_acc = "INSERT INTO auditoria(nombre,accion,fecha)VALUES('{$nombre}','{$accion}','{$date}')";
$result_acc = mysqli_query($conexion, $sql_acc); 
  
echo '<script type="text/javascript">
      alert("Registro Exitoso");
      window.location.href="login.php";
      </script>';
}else{


?>

<section id="main-content">
<div class="row mt">
<div class="col-lg-20">
<div class="form-panel">
                  	 
<h4 class="mb"><center> Ingrese sus Datos </center></h4>
<form class="form-horizontal style-form"  name="validar" method="post">


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-10">
<input type="text" name="nombre"class="form-control"
" placeholder=" Ingrese Nombre" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cedula</label>
<div class="col-sm-10">
<input type="text" name="cedula"class="form-control"
" placeholder=" Ingrese Cedula" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Direccion</label>
<div class="col-sm-10">
<input type="text" name="direccion"class="form-control"
" placeholder=" Ingrese Direccion" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Correo</label>
<div class="col-sm-10">
<input type="email" name="correo"class="form-control"
" placeholder=" Ingrese correo">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Clave</label>
<div class="col-sm-10">
<input type="text" name="clave"class="form-control"
" placeholder=" Ingrese clave" >
</div>
</div>

<center><button class="btn btn-theme" type="submit" name="guardar">
<i class=""></i> Registrar </button></center>

<br>
<center> <a  href="login.php" class="btn btn-theme">Cancelar</a> </center>

</form>
</div>
</div>      	
</div>
<?php
}
?>