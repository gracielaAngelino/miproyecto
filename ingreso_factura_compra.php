<?php

require_once 'conex_graciela.php';
require_once "layout/head.php";

session_start();

if (isset($_POST["guardar"])){

$id_compra=$_POST['id_compra'];
$id_proveedor=$_POST['id_proveedor'];
$id_usuario=$_POST['id_usuario'];
$subtotal=$_POST['subtotal'];
$IVA=$_POST['IVA'];
$TOTAL=$_POST['TOTAL'];
$fecha_compra= date("Y-m-d H:i:s");

$consulta= "SELECT * FROM factura_compra WHERE id_compra=$id_compra";
$result_factc = mysqli_query($conexion,$consulta);
 
foreach ($result_art as $key):
$factc= $key['id_compra'];

endforeach;

if ($factc==$id_compra) {

echo '<script type="text/javascript">
alert(" Esta factura ya existe");
window.location.href="factura_compra.php";
</script>';

}else{

$date = date("Y-m-d H:i:s");
$accion = "se registro un nuevo articulo";

$sql = "INSERT INTO factura_compra (,nombre,descripcion,costocompra,costoventa,fecha,cantidad)VALUES('{$codigo}','{$nombre}','{$descripcion}','{$costocompra}','{$costoventa}','{$fecha}','{$cantidad}')";

$result = mysqli_query($conexion, $sql);
$sql_acc = "INSERT INTO auditoria(nombre,accion,fecha)VALUES('{$nombre}','{$accion}','{$date}')";
$result_acc = mysqli_query($conexion, $sql_acc); 
  echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="articulos.php";
        </script>';

}

}else{


?>
<?php include "layout/submenu.php";?>


                     
<h4 class="mb"><center> Ingrese datos</center></h4>
<form class="form-horizontal style-form"  name="validar" method="post">


<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Seleccione Proveedor </label>
<div class="form-group">
<div class="col-md-8 col-sm-6 col-xs-12">
<select name="id_proveedor"  id="id_proveedor" class="form-control">


<option value="0"></option>
<?php 
$consulta= "SELECT * FROM proveedor";
$result_factc  = mysqli_query($conexion,$consulta);
?>
<?php foreach ($result_serv as $key):?>
<option value="<?=$key['id_proveedor']?>">
<?=$key['nombre_proveedor']?>  
</option>
<?php endforeach;?>
</select>
</div>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Usuario</label>
<div class="col-sm-8">
<input type="text" name="nombre"class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Subtotal</label>
<div class="col-sm-8">
<input type="text" name="descripcion" class="form-control"
" placeholder="" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Iva</label>
<div class="col-sm-8">
<input type="text" name="costocompra"class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">TOTAL</label>
<div class="col-sm-8">
<input type="text" name="costoventa"class="form-control"
" placeholder=" " >
</div>
</div>



<center><button class="btn btn-theme" type="submit" name="guardar">
<i class=""></i> Registrar </button></center>
<br>
<center> <a  href="compra.php" class="btn btn-theme">Cancelar</a> </center>
</form>
</div>
</div>      
</div>

<?php
}
?>