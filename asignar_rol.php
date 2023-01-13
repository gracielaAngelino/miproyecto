<?php
session_start();
$perfil= $_SESSION['SES_ADMIN'];
require_once "layout/head.php";
require_once "inicio.sesion.php";
 
require_once "conex_graciela.php";

$id = (int) $_GET['id']; 

if (isset($_POST['crear'])) {
	
	$id_rol = $_POST['roles'];
   $date     = date("Y-m-d H:i:s");

    $accion = " Se asigno  rol correctamente";

  $query= "UPDATE usuario set rol = '{$id_rol}' WHERE id='$id' ";

    $result = mysqli_query($conexion,$query);

    $auditoria= "INSERT INTO auditoria(nombre,accion,fecha) VALUES('$perfil', '$accion', '$date')";
$consulta_auditoria= mysqli_query($conexion,$auditoria);

 echo '<script type="text/javascript">
            alert(" Rol Asignado Correctamente");
              window.location.href="usuario.php";
          </script>';

  } else {

 ?>
<?php include "layout/submenu.php"; ?>

 <div class="row mt">
              <div class="col-lg-6">
                  <div class="form-panel">
                      <h4 class="mb"><center> Asignar Rol </center></h4>
               
              <form name="validar" method="post" class="form-horizontal" role="form">

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Seleccione el Rol </label>
                    <div class="form-group">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select name="roles"  id="roles" class="form-control" ><span class=" form-control" ></span>
          <option value="0">seleccione</option>
          <?php 
$consulta= "SELECT * FROM roles";
$result_rol   = mysqli_query($conexion,$consulta);

           ?>
          <?php foreach ($result_rol as $key):?>
          <option value="<?=$key['id']?>">
          <?=$key['nombre']?>
          </option>
          <?php endforeach;?>
        </select>
      </div>
      </div>
      <br>

  <center><button class="btn btn-theme" type="submit" name="crear">
     <i class=""></i> Asignar </button></center>

    <center> <a  href="usuario.php" class="btn btn-theme">Cancelar</a> </center>
            </div>
        </div>
       </form>
      </div>
    </div>
</div>
<br />


    <?php 

}
     ?>