<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_serv = (int) $_GET['id'];
$consulta = "SELECT * FROM servicio WHERE id ='$id_serv' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
$nombre = $_POST['nombre'];
$costo= $_POST['costo'];
$encargado= $_POST['encargado'];
$insumos= $_POST['insumos'];



$date = date("Y-m-d H:i:s");
$accion = 'Servicio editado';

$query= "UPDATE servicio set nombre= '{$nombre}', costo= '{$costo}', encargado= '{$encargado}',insumos= '{$insumos}'WHERE id='{$id_serv}' ";

$result = mysqli_query($conexion,$query);


 echo '<script type="text/javascript">
  alert("Edicion de Servicio Exitosa");
  window.location.href="servicios.php";
  </script>';

  } else {

 ?>
<?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><center> Editar Servicio </center></h4>

<form id="frmUpdServicio" name="validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name= "nombre" value="<?php echo $key['nombre']; ?>"  class="form-control"
placeholder= "">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Costo</label>
<div class="col-sm-8">
<input type="text" name="costo" value="<?php echo $key['costo']; ?>" class="form-control"  placeholder=" ">               
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Encargado</label>
<div class="col-sm-8">
<input type="text" name="encargado" value="<?php echo $key['encargado']; ?>" class="form-control"  placeholder=" ">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Insumos</label>
<div class="col-sm-8">
<input type="text" name="insumos" value="<?php echo $key['insumos']; ?>" class="form-control"  placeholder=" ">
</div>
</div>


<center><button class="btn btn-info" type="submit" name="actualizar">
<i class=""></i> Editar </button>
  <a href="servicios.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
  


</div>
</div>
</form>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmUpdServicio = $('#frmUpdServicio').validate({
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
$('#frmUpdServicio').submit(function(e) {

  if (frmUpdServicio.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>
<?php
}


?>
