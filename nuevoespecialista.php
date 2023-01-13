<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";

session_start();

if (isset($_POST["guardar"])){


$codigo=$_POST['codigo']; 
$cedula=$_POST['cedula']; 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$cargo=$_POST['cargo'];
$kit_herramientas=$_POST['kit_herramientas'];

$date = date("Y-m-d H:i:s");
$accion = "se registro un nuevo especialista";

$sql = "INSERT INTO especialistas (codigo,cedula,nombre,apellido,telefono,cargo,kit_herramientas)VALUES('{$codigo}','{$cedula}','{$nombre}','{$apellido}','{$telefono}','{$cargo}','{$kit_herramientas}');";



$result = mysqli_query($conexion, $sql);

if ($result){
  echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="especialistas.php";
        </script>';
}
else
{
  echo $sql;
}

}

else{


?>
<?php include "layout/submenu.php";?>

<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
                     
<h4 class="mb"><center> Ingrese datos</center></h4>
<form id="frmAddEspecialista" class="form-horizontal style-form"  name="validar" method="post">

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Código</label>
<div class="col-sm-8">
<input type="text" name="codigo"class="form-control"
" placeholder="Codigo">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cédula</label>
<div class="col-sm-8">
<input type="text" name="cedula"class="form-control"
" placeholder="Cedula">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control"
" placeholder="Nombre">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Apellido</label>
<div class="col-sm-8">
<input type="text" name="apellido"class="form-control"
" placeholder="Apellido">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
<div class="col-sm-8">
<input type="text" name="telefono"class="form-control"
" placeholder="Telefono">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cargo</label>
<div class="col-sm-8">
<input type="text" name="cargo" class="form-control"
" placeholder="Cargo">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Kit de Herramientas</label>
<div class="col-sm-8">
<input type="text" name="kit_herramientas"class="form-control"
" placeholder="Herramientas" >
</div>
</div>

<center><button class="btn btn-success" type="submit" name="guardar">
<i class=""></i> Registrar </button>
  <a href="especialistas.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
</form>
</div>
</div>      
</div>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmAddEspecialista = $('#frmAddEspecialista').validate({
		rules: {
      codigo: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
			nombre: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      apellido: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      cedula: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      telefono: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      cargo: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      kit_herramientas: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
		},
		messages: {
      codigo: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
			nombre: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      apellido: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      cedula: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      telefono: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      cargo: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      kit_herramientas: {
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
$('#frmAddEspecialista').submit(function(e) {

  if (frmAddEspecialista.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>
<?php
}
?>