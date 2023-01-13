<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";

session_start();

if (isset($_POST["guardar"])){

$nombre   = $_POST['nombre'];
$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$caracteristicas = $_POST['caracteristicas'];
$proveedor = $_POST['proveedor'];
$costo = $_POST['costo'];
$cantidad = $_POST['cantidad'];

$consulta= "SELECT * FROM articulos WHERE codigo=$codigo";
$result_user = mysqli_query($conexion,$consulta);
 
foreach ($result_cod as $key):
$cod= $key['codigo'];

endforeach;

if ($cod==$codigo) {

echo '<script type="text/javascript">
alert("el codigo del articulo ya existe");
window.location.href="articulos.php";
</script>';
}else{

$date = date("Y-m-d H:i:s");
$accion = "se registro nuevo articulo";
$sql = "INSERT INTO articulos (nombre,codigo,marca,caracteristicas,proveedor,costo,cantidad)VALUES('{$nombre}','{$codigo}','{$marca}','{$caracteristicas}','{$proveedor}','{$costo}','{$cantidad}')";
$result = mysqli_query($conexion, $sql);

$result_acc = mysqli_query($conexion, $sql_acc); 
  echo '<script type="text/javascript">
	alert("Registro Exitoso");
	window.location.href = "articulos.php";
</script>';


 $query_search=mysqli_query($conex,"SELECT*FROM inventario WHERE codigo= codigo");
$result=mysqli_num_rows($query_search);
if($result>0) {
while($data=mysqli_query(conex,"SELECT *FROM  inventario WHERE codigo=codigo")){
$inventario=$data["cantidad"];
$inventario_update=$inventario+$cantidad;
mysqli_query($conex,"UPDATE inventario SET cantidad= SET cantidad='$inv_update' WHERE cod_articulo=$codigo");



	}
}

}

}else{


?>
<?php include "layout/submenu.php";?>

<div class="row mt">
	<div class="col-lg-12">
		<div class="form-panel">

			<h4 class="mb">
				<center> Ingrese datos</center>
			</h4>
			<form id="frmAddArticulo" name="validar" method="post" class="form-horizontal" role="form">

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
					<div class="col-sm-8">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre">
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Código</label>
					<div class="col-sm-8">
						<input type="text" name="codigo" class="form-control" placeholder="Codigo">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Marca</label>
					<div class="col-sm-8">
						<input type="text" name="marca" class="form-control" placeholder="Marca">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Características</label>
					<div class="col-sm-8">
						<input type="text" name="caracteristicas" class="form-control" placeholder="Caracteristicas">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Proveedor </label>
					<div class="form-group">
						<div class="col-md-8 col-sm-6 col-xs-12">
							<select name="proveedor" id="proveedor" class="form-control"><span
									class=" form-control"></span>
								<option value="">seleccione</option>
								<?php 
$consulta= "SELECT * FROM proveedor";
$result_prov   = mysqli_query($conexion,$consulta);

?>
								<?php foreach ($result_prov as $key):?>
								<option value="<?=$key['nombre']?>">
									<?=$key['nombre']?>
								</option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
				</div>

				<center><button class="btn btn-success" type="submit" name="guardar">
						<i class=""></i> Registrar </button>
					<a href="articulos.php" type="button" class="btn btn-secondary">Cancelar</a>
				</center>
			</form>
		</div>
	</div>
</div>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
	var frmAddArticulo = $('#frmAddArticulo').validate({
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
	$('#frmAddArticulo').submit(function (e) {

		if (frmAddArticulo.errorList.length == 0) {

		}
		else {
			e.preventDefault();

		}


	});
</script>
<?php
}
?>