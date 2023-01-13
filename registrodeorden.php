<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";
session_start();

if (isset($_POST["guardar"])){

$numero_orden = $_POST['numero_orden'];
$nombre       = $_POST['nombre'];
$costo        = $_POST['costo'];
$cantidad     = $_POST['cantidad'];
$cantidadnueva= $_POST['cantidadnueva'];
$proveedor    = $_POST['proveedor'];
$date = date("Y-m-d H:i:s");
$estado = $_POST['estado'];


$consulta= "SELECT * FROM compra WHERE id ";
$result_comp = mysqli_query($conexion,$consulta);
 //self::descuentaCantidad($id,$Cantidad)

 

$accion = "se registro nuevo orden de compra";

$insertaruno= $sql = "INSERT INTO compra (numero_orden,nombre,costo,cantidad,proveedor,fecha,estado) VALUES ('{$numero_orden}','{$nombre}','{$costo}','{$cantidad}','{$proveedor}','{$date}','{$estado}')";


$result = mysqli_query($conexion, $sql);


if ($insertaruno==true){ 
  
  $consulta="SELECT cantidad from inventario where id='$idproducto'";
  $cantidadinventario=$consulta;
    echo($cantidadinventario);
  //$sql = "INSERT INTO inventario (nombrearticulo,cantidad,fecha)  VALUES ('{$nombre}','{$cantidad}','{$date}')";
  $sql="SELECT cantidad FROM compra WHERE id='$idproducto'";
  //$result=mysqli_query($conexion,$consulta);
  //$cantidad1=mysqli_fetch_row($result)[0];
  $cantidadnueva=abs($cantidad + $cantidadinventario);

  $sql = "INSERT INTO inventario (nombrearticulo,cantidad,fecha)  VALUES ('{$nombre}','{$cantidadnueva}','{$date}')";



$result = mysqli_query($conexion,$sql);
}



 






if ($insertardos=true){


   echo '<script type="text/javascript">
      alert("Registro Exitoso");
      window.location.href="compra.php";
      </script>';

      echo($cantidadnueva);
}


else {



  echo $sql;
}


}else{


?>

<?php include "layout/submenu.php";?>


<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">


      <h4 class="mb">
        <center> Ingrese datos de la factura </center>
      </h4>
      <form id="frmAddOrdenCompra" class="form-horizontal style-form" name="validar" method="post">

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Número de Factura</label>
          <div class="col-sm-8">
            <input type="text" name="numero_orden" class="form-control" placeholder="Número de Factura ">
          </div>
        </div>




        <form name="validar" method="post" class="form-horizontal" role="form">

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Producto </label>

            <div class="col-md-8 col-sm-8 col-xs-12">
              <select name="nombre" id="nombre" class="form-control"><span class=" form-control"></span>
                <option value="">seleccione</option>
                <?php 
                  $consulta= "SELECT * FROM inventario";
                  $result_nom   = mysqli_query($conexion,$consulta);
                  ?>
                <?php foreach ($result_nom as $key):?>
                <option value="<?=$key['nombrearticulo']?>">
                  <?=$key['nombrearticulo']?>
                </option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Costo</label>
            <div class="col-sm-8">
              <input type="text" name="costo" class="form-control" placeholder="Costo">
            </div>
          </div>



          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Cantidad</label>
            <div class="col-sm-8">
              <input type="text" name="cantidad" class="form-control" placeholder="Cantidad">
            </div>
          </div>



            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Seleccione Proveedor</label>

              <div class="col-md-8 col-sm-8 col-xs-12">
                <select name="proveedor" id="proveedor" class="form-control"><span class=" form-control"></span>
                  <option value="">seleccione Proveedor</option>
                  <?php 
$consulta= "SELECT * FROM proveedor";
$result_pro  = mysqli_query($conexion,$consulta);

?>
                  <?php foreach ($result_pro as $key):?>
                  <option value="<?=$key['nombre']?>">
                    <?=$key['nombre']?>
                  </option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>



           
            <center><button class="btn btn-success" type="submit" name="guardar">
                <i class=""></i> Registrar </button>
              <a href="compra.php" type="button" class="btn btn-secondary">Cancelar</a>
            </center>

          </form>
        </div>
      </div>
    </div>
          <script src="assets/jquery-validation/jquery.validate.min.js"></script>
          <script src="assets/jquery-validation/additional-methods.min.js"></script>
          <script>
            var frmAddOrdenCompra = $('#frmAddOrdenCompra').validate({
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
            $('#frmAddOrdenCompra').submit(function (e) {

              if (frmAddOrdenCompra.errorList.length == 0) {

              }
              else {
                e.preventDefault();

              }


            });
          </script>
          <?php
}
?>