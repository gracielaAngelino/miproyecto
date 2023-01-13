<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";
session_start();

if (isset($_POST["guardar"])){

$nombre           = $_POST['nombre'];
$ci               = $_POST['ci'];
$telefono         = $_POST['telefono'];
$correo           = $_POST['correo'];
$direccion        = $_POST['direccion'];
$receptor         = $_POST['receptor'];
$fecha            = date("Y-m-d H:i:s");

$consulta= "SELECT * FROM pclientes WHERE id ";
$result_cli = mysqli_query($conexion,$consulta);
 
foreach ($result_cli as $key):
$cie= $key['ci'];

endforeach;

if ($cie==$ci) {

 echo '<script type="text/javascript">
       alert("el documento del cliente ya existe");
        window.location.href="clientes.php";
        </script>';
}else{


$date = date("Y-m-d H:i:s");
$accion = "se registro nuevo cliente";

$sql = "INSERT INTO pclientes (nombre,ci,telefono,correo,direccion,receptor,fecha)VALUES('{$nombre}','{$ci}','{$telefono}','{$correo}','{$direccion}', '{$receptor}','{$date}')";
    $result = mysqli_query($conexion, $sql);


echo '<script type="text/javascript">
      alert("Registro Exitoso");
      window.location.href="clientes.php";
      </script>';

}
         
}else{


?>

<?php include "layout/submenu.php";?>
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
              	 
<h4 class="mb"><center> Ingrese Datos del Cliente </center></h4>
<form id="frmAddCliente" class="form-horizontal style-form"  name="validar" method="post">
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">CI/RIF</label>
<div class="col-sm-8">
<input type="text" name="ci"class="form-control"
" placeholder="CI/RIF">
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
<label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
<div class="col-sm-8">
<input type="text" name="telefono"class="form-control"
" placeholder="Teléfono" >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Correo</label>
<div class="col-sm-8">
<input type="text" name="correo"class="form-control"
" placeholder="Correo">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Dirección</label>
<div class="col-sm-8">
<input type="text" name="direccion"class="form-control"
" placeholder="Dirección">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Receptor</label>
<div class="col-sm-8">
<input type="text" name="receptor"class="form-control" placeholder="Receptor">
</div>
</div>


<center><button class="btn btn-success" type="submit" name="guardar">
<i class=""></i> Registrar </button>
<a href="clientes.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
</form>
</div>
</div>    	
</div>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmAddCliente = $('#frmAddCliente').validate({
		rules: {
                  ci: {
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
                  ci: {
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
$('#frmAddCliente').submit(function(e) {

  if (frmAddCliente.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>
<?php
}
?>