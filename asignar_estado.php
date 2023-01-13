<?php
session_start();
$perfil= $_SESSION['SES_ADMIN'];
require_once "layout/head.php";
require_once "inicio.sesion.php";
 
require_once "conex_graciela.php";

$id = (int) $_GET['id']; 

if (isset($_POST['crear'])) {
	
	$id_estado = $_POST['estado'];
   $date     = date("Y-m-d H:i:s");

    $accion = " Se asigno  estado correctamente";

  $query= "UPDATE compra set estado = '{$id_estado}' WHERE id='$id' ";

    $result = mysqli_query($conexion,$query);

    

 echo '<script type="text/javascript">
            alert(" Estado Asignado Correctamente");
              window.location.href="compra.php";
          </script>';

  } else {

 ?>
<?php include "layout/submenu.php"; ?>

 <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><center> Asignar Estado </center></h4>
               
              <form name="validar" method="post" class="form-horizontal" role="form">

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Seleccione Estado  </label>
                    <div class="form-group">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select name="estado"  id="estado" class="form-control" ><span class=" form-control" ></span>
          <option value="0">seleccione</option>
          <?php 
$consulta= "SELECT * FROM estado";
$result_est  = mysqli_query($conexion,$consulta);

           ?>
          <?php foreach ($result_est as $key):?>
          <option value="<?=$key['estado']?>">
          <?=$key['estado']?>
          </option>
          <?php endforeach;?>
        </select>
      </div>
      </div>
      <br>

      <center><button class="btn btn-success" type="submit" name="crear">
<i class=""></i> Asignar </button>
  <a href="clientes.php" type="button"  class="btn btn-secondary">Cancelar</a> </center>
 
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