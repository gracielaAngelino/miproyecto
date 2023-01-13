<?php
//session_start();
$perfil = $_SESSION['SES_ADMIN'];



require_once "conex_graciela.php";  
require_once "inicio.sesion.php";

$consulta_a = "SELECT * FROM usuario WHERE correo= '$perfil' ";
$result_a   = mysqli_query($conexion, $consulta_a);
foreach ($result_a as $info_a): endforeach;
$rol  = $info_a['rol']; // obtener rol de la sesion de la persona

$consulta_roles = "SELECT * FROM roles WHERE id= '$rol' ";
$result_roles   = mysqli_query($conexion, $consulta_roles);
foreach ($result_roles as $info_rol): endforeach;
$str   = $info_rol['acceso']; //obtiene acceso de configuracion
$array = str_split($str,2); //convertir array
?>
      
          <div id="sidebar"  class="nav-collapse " style="background: #8E2DE2;
    background: -webkit-linear-gradient(to right, #4d4d4d, #2a252e);
    background: linear-gradient(to right, #4d4d4d, #404041); color: white">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  
                  <li class="sub-menu">
                    
                  
                  <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="index.php" >
                           <i class="glyphicon glyphicon-home"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                <?php }?>
                <hr>

                <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="servicios.php" >
                           <i class="fa fa-wrench"></i>
                          <span>Servicios</span>
                      </a>
                  </li>
                <?php }?>


                <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="clientes.php" >
                           <i class="fa fa-male"></i>
                          <span>Clientes</span>
                      </a>
                  </li>
                <?php }?>

                <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="articulos.php" >
                           <i class="fa fa-th-large"></i>
                          <span>Artículos</span>
                      </a>
                  </li>
                <?php }?>

                <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="especialistas.php" >
                           <i class="fa fa-briefcase"></i>
                          <span>Especialistas</span>
                      </a>
                  </li>
                <?php }?>

                <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="proveedores.php" >
                           <i class="fa fa-building"></i>
                          <span>Proveedor</span>
                      </a>
                  </li>
                <?php }?>
               
<hr>

                <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="compra.php" >
                           <i class="fa fa-shopping-cart"></i>
                          <span>Compra</span>
                      </a>
                  </li>
                <?php }?>

                <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="factura.php" >
                           <i class="fa fa-credit-card"></i>
                          <span>Factura</span>
                      </a>
                  </li>
                <?php }?>

              <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="inventario.php" >
                           <i class="fa fa-archive"></i>
                          <span>Inventario</span>
                      </a>
                  </li>
                <?php }?>              

<hr>

                  <?php if (in_array(10, $array)) {?> 
                   <li class="sub-menu">
                      <a href="config.php" >
                           <i class="fa fa-gear"></i>
                          <span>Configuración</span>
                      </a>

                      <ul class="sub">
                          <li><a  href="usuario.php">Gestión de usuario</a></li>
                         </li>
                      </ul>

                      <ul class="sub">
                          <li><a  href="roles.php">Roles</a></li>
                         </li>
                      </ul>

                      <ul class="sub">
                          <li><a  href="estadocompra.php">Estados Orden Compra</a></li>
                         </li>
                      </ul>

                      <ul class="sub">
                          <li><a  href="auditoria.php">Auditoría</a></li>
                         </li>
                      </ul>

                      <ul class="sub">
                          <li><a  href="#.php">Respaldo del Sistema</a></li>
                         </li>
                      </ul>



                  </li>
                  <br>
                  <br>
                  
                <?php }?>

                
                  </li>
              </ul>
     

               <div class="top-menu">
             
            </div>
              <!-- sidebar menu end-->
          </div>
      
      <!--sidebar end-->
 
                         </span>
                         
             </div>
      </div>
        
<section id="main-content">
          <section class="wrapper">


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  

  </body>
</html>


     
  
