<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";
session_start();
if (isset($_POST["guardar"])){

$nombre         = "";
$codigo         = "";
$encargado      = "";
$insumos        = "";
$costo          = "";

$nombre         = $_POST['nombre'];
$codigo         = $_POST['codigo'];
$encargado      = $_POST['encargado'];
$insumos        = $_POST['insumos'];
$costo          = $_POST['costo'];


$consulta= "SELECT * FROM servicio WHERE codigo=$codigo";
$result_serv = mysqli_query($conexion,$consulta);
 
foreach ($result_serv as $key):
$cod= $key['codigo'];

endforeach;

if ($cod==$codigo) {

echo '<script type="text/javascript">
alert("el código de servicio ya existe");
window.location.href="servicios.php";
</script>';
}else{


$accion = "se registro un nuevo servicio";
$sql = "INSERT INTO servicio (nombre,codigo,encargado,insumos,costo)VALUES('{$nombre}','{$codigo}','{$encargado}','{$insumos}','{$costo}')";
$result = mysqli_query($conexion, $sql);

  echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="servicios.php";
        </script>';

}

}else{


?>
<?php include "layout/submenu.php";?>

<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">

                     
<h4 class="mb"><center> Ingrese datos</center></h4>
<form id="frmAddServicio" class="form-horizontal style-form"  name="validar" method="post">


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control"
" placeholder="Nombre" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Código</label>
<div class="col-sm-8">
<input type="text" name="codigo"class="form-control"
" placeholder="Codigo" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Encargado</label>
<div class="col-sm-8">
<input type="text" name="encargado" class="form-control"
" placeholder="Encargado" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Insumos</label>
<div class="col-sm-8">
<input type="text" name="insumos"class="form-control"
" placeholder="Insumos" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Costo</label>
<div class="col-sm-8">
<input type="text" name="costo"class="form-control"
" placeholder="Costo" >
</div>
</div>

<center><button class="btn btn-success" type="submit" name="guardar">
<i class=""></i> Registrar </button>
  <a href="servicios.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
 
</form>
</div>
</div>      
</div>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmAddServicio = $('#frmAddServicio').validate({
		rules: {
			nombre: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      codigo: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      encargado: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      insumos: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      costo: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
		},
		messages: {
			nombre: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      codigo: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      encargado: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      insumos: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      costo: {
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
$('#frmAddServicio').submit(function(e) {

  if (frmAddServicio.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>
<?php
}
?>