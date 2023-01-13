<?php
session_start();


require_once 'conex_graciela.php';
require_once 'layout/head.php';

$consulta = "SELECT * FROM inventario ";
$result   = mysqli_query($conexion, $consulta);
?>

<?php include "layout/submenu.php";?>

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="assets/css/dataTableHead.css">       

    <div class="container">	
	<h3><i class=""></i> <center>Inventario</h3></center>
</div>
		
<div class="btn-group" role="group" aria-label="Basic example">
  			<a href="agg_inventario.php" type="button"  class="btn btn-success">Registrar Artículo</a> 
		</div>	  
<br><br>
    <div class="table-responsive">        
     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
     <thead>
  <tr>
<th><center>Nro<center></th>
<th><center>Nombre de Artículo</center></th> 
<th><center>Cantidad</center></th> 
<th><center>Fecha</center></th> 
<th><center>Acción</center></th>
</tr>
</thead>
<?php foreach ($result as $key): ?>

<tr>
<td class="text-center"> <?php echo $key['id'];  ?></td>
<td class="text-center"> <?php echo $key['nombrearticulo'];  ?></td>
<td class="text-center"> <?php echo $key['cantidad'];  ?></td>
<td class="text-center"> <?php echo $key['fecha']; ?></td>

<div class="btn-group" role="group" aria-label="Basic example">
          <td class="text-center">
		  <a href="cantidad_inventario.php?&id=<?php echo $key['id']; ?>" class="btn btn-success btn-xs" title="Añadir Cantidad" data-toggle="tooltip"><i class="fa fa-plus"></i></span></div></a>
           
		  <a href="eliminar_inventario.php?&id=<?php echo $key['id']; ?>" class="btn btn-danger btn-xs"  title="eliminar" data-toggle="tooltip"><i class="fa fa-eraser"></i></span></div></a>
          </td>
        </div>

            </a>
            </div>
            </td>
        </tr>
<?php endforeach;?>
        </table>	
            </div>
                </div>

                 <!-- jQuery, Popper.js, Bootstrap JS -->

    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
       
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script> 
           