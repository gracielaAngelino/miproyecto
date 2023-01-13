<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_pro= (int) $_GET['id'];
$consulta = "SELECT * FROM proveedor WHERE id ='$id_pro' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id_proveedor']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
$nombre                 ="";
$nombre_proveedor       = $_POST['nombre'];
$telefono_proveedor     = $_POST['telefono'];
$direccion_proveedor    = $_POST['direccion'];
$date                   = date("Y-m-d H:i:s");
    
$accion = 'Información de Proveedor Editada';
$query= "UPDATE proveedor  set nombre = '{$nombre_proveedor}',telefono= '{$telefono_proveedor}', direccion= '{$direccion_proveedor}'WHERE id='{$id_pro}' ";

$result = mysqli_query($conexion,$query);
$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
        alert("Edicion de proveedor Exitosa");
        window.location.href="proveedores.php";
        </script>';

  } else {

 ?>

 <?php include "layout/submenu.php"; ?>

<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><center> Editar Datos de proveedor</center></h4>
                      
<form id="frmUpdProveedor" name="validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cédula/RIF</label>
<div class="col-sm-8">
<input type="text" name="ced_rif"class="form-control" value="<?php echo $key['ced_rif']; ?>" placeholder="Cédula/RIF" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control" value="<?php echo $key['nombre']; ?>" placeholder="Nombre">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Dirección</label>
<div class="col-sm-8">
<input type="text" name="direccion"class="form-control" value="<?php echo $key['direccion']; ?>" placeholder="Direccion">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
<div class="col-sm-8">
<input type="text" name="telefono"class="form-control" value="<?php echo $key['telefono']; ?>" placeholder="Telefono">
</div>
</div>
<center><button class="btn btn-theme" type="submit" name="actualizar">
<i class=""></i> Editar </button></center>
<br>
<center> <a  href="proveedores.php" class="btn btn-theme">Cancelar</a> </center>
</div>
</div>
</form>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmUpdProveedor = $('#frmUpdProveedor').validate({
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
$('#frmUpdProveedor').submit(function(e) {

  if (frmUpdProveedor.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   
  }
   

});
</script>

<?php
}


?>
