<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";

session_start();

if (isset($_POST["guardar"])){

$nombre   = $_POST['nombre'];
$cedula = $_POST['cedula'];
$correo  = $_POST['correo'];
$clave = md5($_POST['clave']);

$consulta= "SELECT * FROM usuario WHERE cedula=$cedula";
$result_user = mysqli_query($conexion,$consulta);
 
foreach ($result_user as $key):
$ci= $key['cedula'];

endforeach;

if ($ci==$cedula) {

echo '<script type="text/javascript">
alert("la cedula del usuario ya existe");
window.location.href="usuario.php";
</script>';
}else{

$date = date("Y-m-d H:i:s");
$accion = "se registro como nuevo usuario";
$sql = "INSERT INTO usuario (nombre,cedula,correo,clave,fecha)VALUES('{$nombre}','{$cedula}','{$correo}','{$clave}','{$date}')";
$result = mysqli_query($conexion, $sql);
$sql_acc = "INSERT INTO auditoria(nombre,accion,fecha)VALUES('{$nombre}','{$accion}','{$date}')";
$result_acc = mysqli_query($conexion, $sql_acc); 
  echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="usuario.php";
        </script>';

}

}else{


?>
<?php include "layout/submenu.php";?>


                     
<h4 class="mb"><center> Ingrese datos</center></h4>
<form id="frmAddUsuario" class="form-horizontal style-form"  name="validar" method="post">

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cédula</label>
<div class="col-sm-8">
<input type="text" name="cedula"class="form-control" placeholder=" Cedula" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control" placeholder="Nombre" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Correo</label>
<div class="col-sm-8">
<input type="text" name="correo" class="form-control" placeholder="Correo" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Clave</label>
<div class="col-sm-8">
<input type="password" name="clave"class="form-control" placeholder="Clave" >
</div>
</div>

<center><button class="btn btn-theme" type="submit" name="guardar">
<i class=""></i> Registrar </button></center>
<br>
<center> <a  href="usuario.php" class="btn btn-theme">Cancelar</a> </center>
</form>
</div>
</div>      
</div>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
	var frmAddUsuario = $('#frmAddUsuario').validate({
		rules: {
			nombre: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
			cedula: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
			correo: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
			clave: {
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
			cedula: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
			correo: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
			clave: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
	$('#frmAddUsuario').submit(function (e) {

		if (frmAddUsuario.errorList.length == 0) {

		}
		else {
			e.preventDefault();

		}


	});
</script>
<?php
}
?>