<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";

session_start();

if (isset($_POST["guardar"])){

$nombre   = $_POST['nombre'];
$ced_rif = $_POST['ced_rif'];
$direccion  = $_POST['direccion'];
$telefono  = $_POST['telefono'];
$date = date("Y-m-d H:i:s");


$consulta= "SELECT * FROM proveedor WHERE ced_rif=$ced_rif";
$result_prov = mysqli_query($conexion,$consulta);
 
foreach ($result_prov as $key):
$ci= $key['ced_rif'];

endforeach;

if ($ci==$ced_rif) {

echo '<script type="text/javascript">
alert("el documento del proveedor ya existe");
window.location.href="proveedores.php";
</script>';
}else{

$date = date("Y-m-d H:i:s");
$accion = "se registro como nuevo proveedpr";
$sql = "INSERT INTO proveedor (nombre,ced_rif,direccion,telefono,fecha)VALUES('{$nombre}','{$ced_rif}','{$direccion}','{$telefono}','{$date}')";
$result = mysqli_query($conexion, $sql);
$sql_acc = "INSERT INTO auditoria(nombre,accion,fecha)VALUES('{$nombre}','{$accion}','{$date}')";
$result_acc = mysqli_query($conexion, $sql_acc); 
  echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="proveedores.php";
        </script>';

}

}else{


?>
<?php include "layout/submenu.php";?>

<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
                     
<h4 class="mb"><center> Ingrese datos</center></h4>
<form id="frmAddProveedor" class="form-horizontal style-form"  name="validar" method="post">

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cédula/RIF</label>
<div class="col-sm-8">
<input type="text" name="ced_rif"class="form-control" placeholder="Cédula/RIF" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control" placeholder="Nombre">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Dirección</label>
<div class="col-sm-8">
<input type="text" name="direccion"class="form-control" placeholder="Direccion">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
<div class="col-sm-8">
<input type="text" name="telefono"class="form-control" placeholder="Telefono">
</div>
</div>

<center><button class="btn btn-theme" type="submit" name="guardar">
<i class=""></i> Registrar </button></center>
<br>
<center><a  href="proveedores.php" class="btn btn-theme">Cancelar</a></center>
</form>
</div>
</div>      
</div>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmAddProveedor = $('#frmAddProveedor').validate({
		rules: {
      ced_rif: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
			nombre: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
                  telefono: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
                  correo: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
                  direccion: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
                  receptor: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
		},
		messages: {
      ced_rif: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
			nombre: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
                  telefono: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
                  correo: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
                  direccion: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
                  receptor: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
		},
		errorElement: 'span',
		errorPlacement: function(error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function(element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});     
$('#frmAddProveedor').submit(function(e) {

  if (frmAddProveedor.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>
<?php
}
?>