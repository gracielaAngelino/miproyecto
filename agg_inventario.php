<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";

session_start();

if (isset($_POST["guardar"])){

$nombrearticulo   = $_POST['nombrearticulo'];





$date = date("Y-m-d H:i:s");
$accion = "se registro nuevo articulo en inventario";
$sql = "INSERT INTO inventario (nombrearticulo,cantidad,fecha)VALUES('{$nombrearticulo}','{$cantidad}','{$date}')";
$result = mysqli_query($conexion, $sql);

 
  echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="inventario.php";
        </script>';


 $query_search=mysqli_query($conex,"SELECT * FROM inventario WHERE codigo= codigo");
$result=mysqli_num_rows($query_search);
if($result>0) {
while($data=mysqli_query(conex,"SELECT *FROM  inventario WHERE codigo=codigo")){
$inventario=$data["cantidad"];
$inventario_update=$inventario+$cantidad;
mysqli_query($conex,"UPDATE inventario SET cantidad= SET cantidad='$inv_update' WHERE cod_articulo=$codigo");



	}
}

}else{


?>
<?php include "layout/submenu.php";?>

<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">

      <h4 class="mb">
        <center> Ingrese datos del artículo</center>
      </h4>
      <form id="frmAddInventario" method="post" class="form-horizontal" role="form">

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nombre </label>
          <div class="form-group">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <select name="nombrearticulo" id="nombrearticulo" class="form-control"><span class=" form-control"></span>
                <option value="">seleccione</option>
                <?php 
$consulta= "SELECT * FROM articulos";
$result_nom   = mysqli_query($conexion,$consulta);

?>


                <?php foreach ($result_nom as $key):?>
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
            <a href="inventario.php" type="button" class="btn btn-secondary">Cancelar</a>
          </center>
      </form>
    </div>
  </div>
</div>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
  var frmAddInventario = $('#frmAddInventario').validate({
    rules: {
      nombrearticulo: {
        required: true,
        minlength: 1,
        maxlength: 50
      },
      codigo: {
        required: true,
        minlength: 1,
        maxlength: 50
      },
      cantidad: {
        required: true,
        minlength: 1,
        maxlength: 50
      },
      stok: {
        required: true,
        minlength: 1,
        maxlength: 50
      },
    },
    messages: {
      nombrearticulo: {
        required: "Requerido",
        minlength: "Ingrese entre 1 y 50 caracteres",
        maxlength: "Ingrese entre 1 y 50 caracteres"
      },
      codigo: {
        required: "Requerido",
        minlength: "Ingrese entre 1 y 50 caracteres",
        maxlength: "Ingrese entre 1 y 50 caracteres"
      },
      cantidad: {
        required: "Requerido",
        minlength: "Ingrese entre 1 y 50 caracteres",
        maxlength: "Ingrese entre 1 y 50 caracteres"
      },
      stok: {
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
  $('#frmAddInventario').submit(function (e) {

    if (frmAddInventario.errorList.length == 0) {

    }
    else {
      e.preventDefault();

    }


  });
</script>
<?php
}
?>