<?php

require_once 'conex_imroma1.php';
require_once "layout/head.php";
session_start();


$id_inventario = (int) $_GET['id'];
$consulta = "SELECT * FROM inventari_o WHERE id ='$id_inventario' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST["guardar"])){
$nombre   = $_POST['nombre'];
$codigo = $_POST['codigo'];
$proveedor   = $_POST['proveedor'];
$modelo = $_POST['modelo'];
$costo = $_POST['costo'];
$referencia  = $_POST['referencia'];
$salida  = $_POST['salida'];
$existencia  = $_POST['existencia'];
$total  = $_POST['total'];
$cantidad  = $_POST['cantidad'];
$motivo  = $_POST['motivo'];
$ref_entrega  = $_POST['ref_entrega'];
     

//$consulta= "SELECT * FROM agg_articulos WHERE id=$nombre";
//$result_cant   = mysqli_query($conexion,$consulta);
 //foreach ($result_cant as $key):
          
 //$cantidad= $key['cantidad'];

//endforeach;
$costo_f=$cantidad-$existencia;
$date = date("Y-m-d H:i:s");
$accion = "se agrego artículos al inventario";

$sql = "INSERT INTO inventari_o (nombre,codigo,proveedor,modelo,costo,referencia,salida,existencia,total ,cantidad,fecha)VALUES('{$nombre}','{$codigo}','{$proveedor}','{$modelo}','{$costo}','{$referencia}','{$cantidad}','{$existencia}','{$costo_f}','{$cantidad}','{$date}')";

$result = mysqli_query($conexion, $sql);
$sql_acc = "INSERT INTO auditoria(nombre,accion,fecha)VALUES('{$nombre}','{$accion}','{$date}')";
$result_acc = mysqli_query($conexion, $sql_acc); 
  
echo '<script type="text/javascript">
      alert("Registro Exitoso");
      window.location.href="inventario.php";
      </script>';

$sql_art = "INSERT INTO descontar_articulos(nombre,cantidad,descripcion,Numero_entrega,fecha)VALUES('{$nombre}','{$cantidad}','{$motivo}','{$ref_entrega}','{$date}')";

$result_acc = mysqli_query($conexion, $sql_art); 

}else{


?>

<br>
<br>
<section id="main-content">
<div class="row mt">
<div class="col-lg-20">
<div class="form-panel">
<h4 class="mb"><center> Ingrese  Datos del descuento </center></h4>

<form class="form-horizontal style-form"  name="validar" method="post">

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre del Repuesto</label>
<div class="col-sm-10">
<input type="text" name="nombre"value="<?php echo $key['nombre']; ?>" class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Código</label>
<div class="col-sm-10">
<input type="text" name="codigo" value="<?php echo $key['codigo']; ?>"class="form-control"
" placeholder=" " >
</div>
</div>

                          
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Proveedor</label>
<div class="col-sm-10">
<input type="text" name="proveedor" value="<?php echo $key['proveedor']; ?>"class="form-control"
" placeholder=" ">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Modelo</label>
<div class="col-sm-10">
<input type="text" name="modelo"value="<?php echo $key['modelo']; ?>" class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Costo</label>
<div class="col-sm-10">
<input type="text"  name="costo" value="<?php echo $key['costo']; ?>"class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Referencia</label>
<div class="col-sm-10">
<input type="text"  name="referencia" value="<?php echo $key['referencia']; ?>"class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Existencia</label>
<div class="col-sm-10">
<input type="text"  name="existencia" value="<?php echo $key['total']; ?>"class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cantidad</label>
<div class="col-sm-10">
<input type="text"  name="cantidad" value="<?php echo $key['cantidad']; ?>" class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Motivo</label>
<div class="col-sm-10">
<input type="text"  name="motivo"  class="form-control"
" placeholder=" " >
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Seleccione Referencia</label>
<div class="form-group">
<div class="col-md-8 col-sm-6 col-xs-12">

<select name="ref_entrega"  id="ref_entrega" class="form-control">

<option value="0">seleccione</option>
          
<?php 
$consulta= "SELECT * FROM presupuestoo_o";
$result_serv   = mysqli_query($conexion,$consulta);
?>
<?php foreach ($result_serv as $key):?>
<option value="<?=$key['ref_entrega']?>">
<?=$key['ref_entrega']?> 
<?php endforeach;?>
</select>
</div>
</div>
</div>


<center><button class="btn btn-theme" type="submit" name="guardar">
<i class=""></i> Registrar </button></center>
<br>
<center> <a  href="login.php" class="btn btn-theme">Cancelar</a> </center>
</form>
</div>
</div>      
</div>
<?php
}
?>