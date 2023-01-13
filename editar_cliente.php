<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_cli = (int) $_GET['id'];
$consulta = "SELECT * FROM pclientes WHERE id ='$id_cli' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
  
$nombre = $_POST['nombre'];
$ci= $_POST['ci'];
$telefono =($_POST ['telefono']);
$correo = ($_POST ['correo']);
$direccion = ($_POST ['direccion']);
$receptor = ($_POST ['receptor']);
$date = date("Y-m-d H:i:s");
    
$accion = 'Información del cliente editada';

$query= "UPDATE pclientes set nombre = '{$nombre}', ci= '{$ci}',telefono= '{$telefono}',correo= '{$correo}' ,direccion= '{$direccion}',receptor= '{$receptor}'   WHERE id='{$id_cli}' ";

$result = mysqli_query($conexion,$query);


 echo '<script type="text/javascript">
       alert("Edicion de cliente Exitosa");
        window.location.href="clientes.php";
        </script>';

  } else {

 ?>
 <?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><center> Editar Datos </center></h4>
                      
 <form id="frmUpdCliente" name= "validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name= "nombre" value="<?php echo $key['nombre']; ?>"  class="form-control"
placeholder= "Nombre">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">CI/RIF</label>
<div class="col-sm-8">
<input type="text" name= "ci" value="<?php echo $key['ci']; ?>"  class="form-control"
placeholder= "CI/RIF">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
<div class="col-sm-8">
<input type="text" name="telefono" value="<?php echo $key['telefono']; ?>" class="form-control"
 placeholder="Teléfono">                               
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Correo</label>
<div class="col-sm-8">
<input type="text" name="correo" value="<?php echo $key['correo']; ?>" class="form-control"
 placeholder="Correo">                               
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Dirección</label>
<div class="col-sm-8">
<input type="text" name="direccion"  value="<?php echo $key['direccion']; ?>" class="form-control"
placeholder= "Dirección">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Receptor</label>
<div class="col-sm-8">
<input type="text" name="receptor"  value="<?php echo $key['receptor']; ?>" class="form-control" placeholder= "Receptor">
</div>
</div>


<center><button class="btn btn-info" type="submit" name="actualizar">
<i class=""></i> Editar </button>
  <a href="clientes.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
  </div>
</div>
</form>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmUpdCliente = $('#frmUpdCliente').validate({
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
$('#frmUpdCliente').submit(function(e) {

  if (frmUpdCliente.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>

<?php
}


?>


