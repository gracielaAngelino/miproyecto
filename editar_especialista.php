<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_sp = (int) $_GET['id'];
$consulta = "SELECT * FROM especialistas WHERE id ='$id_sp' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
$codigo=$_POST['codigo']; 
$cedula=$_POST['cedula']; 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$cargo=$_POST['cargo'];
$kit_herramientas=$_POST['kit_herramientas'];

$date = date("Y-m-d H:i:s");
$accion = 'especialista editado';

$query= "UPDATE especialistas set codigo = '{$codigo}', nombre = '{$nombre}', cedula= '{$cedula}', nombre= '{$nombre}', apellido= '{$apellido}', telefono= '{$telefono}', cargo= '{$cargo}', kit_herramientas='{$kit_herramientas}' WHERE id='{$id_sp}' ";

$result = mysqli_query($conexion,$query);


 echo '<script type="text/javascript">
  alert("Edicion de especialista Exitosa");
  window.location.href="especialistas.php";
  </script>';

  } else {

 ?>
<?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><center> Editar datos de especialista </center></h4>

<form id="frmUpdEspecialista" name= "validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Código</label>
<div class="col-sm-8">
<input type="text" name="codigo"class="form-control" value="<?php echo $key['codigo']; ?>" placeholder="Codigo">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cédula</label>
<div class="col-sm-8">
<input type="text" name="cedula"class="form-control" value="<?php echo $key['cedula']; ?>" placeholder="Cedula">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control" value="<?php echo $key['nombre']; ?>" placeholder="Nombre">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Apellido</label>
<div class="col-sm-8">
<input type="text" name="apellido"class="form-control" value="<?php echo $key['apellido']; ?>" placeholder="Apellido">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
<div class="col-sm-8">
<input type="text" name="telefono"class="form-control" value="<?php echo $key['telefono']; ?>" placeholder="Telefono">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cargo</label>
<div class="col-sm-8">
<input type="text" name="cargo" class="form-control" value="<?php echo $key['cargo']; ?>" placeholder="Cargo">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Kit de Herramientas</label>
<div class="col-sm-8">
<input type="text" name="kit_herramientas"class="form-control" value="<?php echo $key['kit_herramientas']; ?>" placeholder="Herramientas" >
</div>
</div>

<center><button class="btn btn-theme" type="submit" name="actualizar">
<i class=""></i> Editar </button></center>
<br>
<center> <a  href="especialistas.php" class="btn btn-theme">Cancelar</a> </center>
</div>
</div>
</form>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmUpdEspecialista = $('#frmUpdEspecialista').validate({
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
$('#frmUpdEspecialista').submit(function(e) {

  if (frmUpdEspecialista.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>
<?php
}


?>
