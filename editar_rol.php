<?php 
session_start();
require_once "layout/head.php";
require_once "library/load.php";
require_once "inicio.sesion.php";
require_once "conex_graciela.php";

$id_roles = (int) $_GET['id']; //recivir el id por URL


$consulta = "SELECT * FROM roles WHERE id ='$id_roles' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;
$str   = $key['acceso']; //convert string in array for camp
$array = str_split($str,1);


if (isset($_POST['actualizar'])) {

$nombre = $_POST['nombre'];
$date = date("Y-m-d H:i:s");
$accion = 'Información del Rol Editada';

$camp    = implode(',', $_POST['box']);		
 
$query= "UPDATE roles set nombre = '{$nombre}', acceso= '{$camp}', fecha = '{$date}' WHERE id='{$id_roles}' ";
$result = mysqli_query($conexion,$query);

$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
        alert("Edición de  Rol Exitoso");
        window.location.href="roles.php";
        </script>';

  } else {

 ?>

<?php include "layout/submenu.php";?>

<div class="row mt">
<div class="col-lg-6">
<div class="form-panel">

<h4 class="mb"><center> Editar Rol </center></h4>     

<form name= "validar" class="form-horizontal style-form" method="post">

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name= "nombre" value="<?php echo $key['nombre']?>" class="form-control"
" placeholder=" Ingrese Nombre">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Inicio</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="1" class="form-control" <?php checked($array,1)  ?>>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Servicios</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="2" class="form-control" <?php checked($array,2)  ?> >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Almacén</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="3" class="form-control" <?php checked($array,3)  ?> >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Facturación</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="4" class="form-control"  <?php checked($array,4)  ?>>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Clientes</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="5" class="form-control"  <?php checked($array,5)  ?>>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Configuración</label>
<div class="col-sm-8">
<input name="box[]" type="checkbox" value="6" class="form-control" <?php checked($array,6)  ?>>
</div>
</div>

<center><button class="btn btn-theme" type="submit" name="actualizar">
<i class=""></i> Editar </button></center>

<center> <a  href="roles.php" class="btn btn-theme">Cancelar</a> </center>
</div>
</div>
</form>

<?php

}

?>