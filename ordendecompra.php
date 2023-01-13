<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_com = (int) $_GET['id'];
$consulta = "SELECT * FROM compra WHERE id ='$id_com' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {

$numero_orden = $_POST['numero_orden'];
$nombre = $_POST['nombre'];
$costo = $_POST['costo'];
$cantidad = $_POST['cantidad'];
$proveedor = ($_POST ['proveedor']);
$estado = ($_POST ['estado']);
$date = date("Y-m-d H:i:s");
    

$query= "UPDATE compra set  numero_orden = '{$numero_orden}', nombre = '{$nombre}',  costo= '{$costo}',cantidad= '{$cantidad}',proveedor= '{$proveedor}',estado= '{$estado}',fecha= '{$date}'  WHERE id='{$id}' ";

$result = mysqli_query($conexion,$query);
$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
       alert("");
        window.location.href="compra.php";
        </script>';

  } else {

 ?>
 <?php include "layout/submenu.php"; ?>

 <div class="row mt">
<div class="col-lg-12">
<div class="form-panel">

 <h4 class="mb"><center> Orden de Compra</center></h4>
<form id="frmUpdOrdenCompra" class="form-horizontal style-form"  name="validar" method="post">

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Número de Orden</label>
<div class="col-sm-8">
<input type="text" name="numero_orden" value="<?php echo $key['numero_orden']; ?>" class="form-control" placeholder="Número de Orden">                               
</div>
</div>                      


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre de Artículo</label>
<div class="col-sm-8">
<input type="text" name="nombre" value="<?php echo $key['nombre']; ?>" class="form-control" placeholder="Nombre de Artículo">                               
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Costo</label>
<div class="col-sm-8">
<input type="text" name="costo" value="<?php echo $key['costo']; ?>" class="form-control" placeholder="Costo">                               
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cantidad</label>
<div class="col-sm-8">
<input type="text" name="cantidad"  value="<?php echo $key['cantidad']; ?>" class="form-control" placeholder= "Cantidad">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Proveedor</label>
<div class="col-sm-8">
<input type="text" name="proveedor"  value="<?php echo $key['proveedor']; ?>" class="form-control" placeholder= "Proveedor">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Estado</label>
<div class="col-sm-8">
<input type="text" name="estado"  value="<?php echo $key['estado']; ?>" class="form-control" placeholder= "Estado">
</div>
</div>




<center><button class="btn btn-theme" type="submit" name="Imprimir">
<i class=""></i> Editar </button></center>
<br>

<center> <a  href="compra.php" class="btn btn-theme">Volver</a> </center>
</div>
</div>
</form>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
          <script src="assets/jquery-validation/additional-methods.min.js"></script>
          <script>
            var frmUpdOrdenCompra = $('#frmUpdOrdenCompra').validate({
              rules: {
                numero_orden: {
                  required: true,
                  minlength: 1,
                  maxlength: 50
                },
                nombre: {
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
                proveedor: {
                  required: true,
                },
                estado: {
                  required: true,
                },
              },
              messages: {
                numero_orden: {
                  required: "Requerido",
                  minlength: "Ingrese entre 1 y 50 caracteres",
                  maxlength: "Ingrese entre 1 y 50 caracteres"
                },
                nombre: {
                  required: "Requerido",
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
                estado: {
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
            $('#frmUpdOrdenCompra').submit(function (e) {

              if (frmUpdOrdenCompra.errorList.length == 0) {

              }
              else {
                e.preventDefault();

              }


            });
          </script>

<?php
}


?>


