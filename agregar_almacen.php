<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";

session_start();

if (isset($_POST["guardar"])){

$codigo   = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$date = date("Y-m-d H:i:s");



$consulta= "SELECT * FROM almacen WHERE codigo=$codigo";
$result_alm = mysqli_query($conexion,$consulta);
 
foreach ($result_alm as $key):
$co= $key['codigo'];

endforeach;

if ($co==$codigo) {

echo '<script type="text/javascript">
alert("el codigo de artículo ya existe");
window.location.href="almacen.php";
</script>';
}else{

$date = date("Y-m-d H:i:s");
$accion = "se realizó un nuevo registro";
$sql = "INSERT INTO almacen (codigo,nombre,descripcion,cantidad,fecha)VALUES('{$codigo}','{$nombre}','{$descripcion}','{$cantidad}','{$date}')";
$result = mysqli_query($conexion, $sql);

  echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="almacen.php";
        </script>';

}

}else{


?>
<?php include "layout/submenu.php";?>


                     
<h4 class="mb"><center> Ingrese datos</center></h4>
<form class="form-horizontal style-form"  name="validar" method="post">




<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Código</label>
<div class="col-sm-8">
<input type="text" name="codigo"class="form-control"
" placeholder=" Ingrese codigo" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control"
" placeholder=" Ingrese Nombre" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Descripción</label>
<div class="col-sm-8">
<input type="text" name="descripcion" class="form-control"
" placeholder=" Ingrese descripcion" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cantidad</label>
<div class="col-sm-8">
<input type="text" name="cantidad"class="form-control"
" placeholder=" Ingrese cantidad" >
</div>
</div>

<center><button class="btn btn-theme" type="submit" name="guardar">
<i class=""></i> Registrar </button></center>
<br>
<center> <a  href="almacen.php" class="btn btn-theme">Cancelar</a> </center>
</form>
</div>
</div>      
</div>

<?php
}
?>