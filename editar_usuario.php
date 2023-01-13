<?php
session_start();

require_once 'conex_graciela.php';
require_once 'layout/head.php';

$id_usuarios = (int) $_GET['id'];
$consulta = "SELECT * FROM usuario WHERE id ='$id_usuarios' ";
$result   = mysqli_query($conexion,$consulta);

foreach ($result as $key): endforeach;

$str   = $key['id']; //convert string in array for camp
$array = str_split($str,2);

if (isset($_POST['actualizar'])) {
  
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$clave = md5($_POST ['clave']);
$date = date("Y-m-d H:i:s");
    
$accion = 'Información del Usuario Editada';

$query= "UPDATE usuario set nombre = '{$nombre}', cedula= '{$cedula}',
  correo= '{$correo}',clave= '{$clave}'  WHERE id='{$id_usuarios}' ";

$result = mysqli_query($conexion,$query);
$auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$nombre', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
       alert("Edicion de Usuario Exitosa");
        window.location.href="usuario.php";
        </script>';

  } else {

 ?>
 <?php include "layout/submenu.php"; ?>
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><center> Editar Datos </center></h4>
                      
 <form name= "validar" class="form-horizontal style-form" method="post">
                       
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
<div class="col-sm-8">
<input type="text" name= "nombre" value="<?php echo $key['nombre']; ?>"  class="form-control"
placeholder= "Ingrese Nombre">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Cedula</label>
<div class="col-sm-8">
<input type="text" name="cedula" value="<?php echo $key['cedula']; ?>" class="form-control"
 placeholder=" Ingrese Cedula">                               
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Correo</label>
<div class="col-sm-8">
<input type="email" name="correo"  value="<?php echo $key['correo']; ?>" class="form-control"
placeholder= " Ingrese Correo">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Clave</label>
<div class="col-sm-8">
<input  type="password" name=clave value="<?php echo $key['clave']; ?>"  class="form-control"
placeholder=" Ingrese Clave">
<br>
<center><button class="btn btn-info" type="submit" name="actualizar">
<i class=""></i> Editar </button>
  <a href="usuario.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>


</div>
</div>
</form>


<?php
}


?>


