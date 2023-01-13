<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_art = (int) $_GET['id'];
$consulta = "SELECT * FROM articulos WHERE id ='$id_art' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
  
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$caracteristicas=$_POST['caracteristicas'];
$proveedor=$_POST['proveedor'];

$date = date("Y-m-d H:i:s");
    
$accion = 'Información del artículo editada';

$query= "UPDATE articulos set nombre = '{$nombre}', codigo= '{$codigo}',
  marca= '{$marca}',caracteristicas= '{$caracteristicas}',proveedor= '{$proveedor}'WHERE id='{$id_art}' ";

$result = mysqli_query($conexion,$query);

 echo '<script type="text/javascript">
       alert("Edicion de Artículo Exitosa");
        window.location.href="articulos.php";
        </script>';

  } else {

 ?>
 <?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><center> Editar Datos </center></h4>
                      
 <form id="frmUpdArticulo" name= "validar" class="form-horizontal style-form" method="post">
                       


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre" value="<?php echo $key['nombre']; ?>" class="form-control"
 placeholder="Nombre">                               
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Codigo</label>
<div class="col-sm-8">
<input type="text" name="codigo"  value="<?php echo $key['codigo']; ?>" class="form-control"
placeholder="Codigo">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Marca</label>
<div class="col-sm-8">
<input type="text" name="marca"  value="<?php echo $key['marca']; ?>" class="form-control"
placeholder= "Marca">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Características</label>
<div class="col-sm-8">
<input type="text" name="caracteristicas"  value="<?php echo $key['caracteristicas']; ?>" class="form-control"
placeholder= "Características">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Proveedor</label>
<div class="col-sm-8">
<input type="text" name="proveedor"  value="<?php echo $key['proveedor']; ?>" class="form-control"
placeholder= "Proveedor">
</div>
</div>



<center><button class="btn btn-info" type="submit" name="actualizar">
<i class=""></i> Editar </button>
  <a href="articulos.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
  </div>
</div>
</form>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
	var frmUpdArticulo = $('#frmUpdArticulo').validate({
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
			marca: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
			caracteristicas: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
			proveedor: {
				required: true,
			},
      costo: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      cantidad: {
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
			marca: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
			caracteristicas: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      costo: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
      cantidad: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
			proveedor: {
				required: "Requerido",
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
	$('#frmUpdArticulo').submit(function (e) {

		if (frmUpdArticulo.errorList.length == 0) {

		}
		else {
			e.preventDefault();

		}


	});
</script>

<?php
}


?>


