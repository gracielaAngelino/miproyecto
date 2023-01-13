<?php 
session_start();
include('layout/head.php');
include 'Invoice.php';
$invoice = new Invoice();
//$invoice->checkLoggedIn();
if(!empty($_POST['guardar']) && $_POST['guardar']) {	
	$invoice->saveInvoice($_POST);
	header("Location:factura.php");	
   // echo '<script type="text/javascript">alert("Facturado"); window.location.href="inventario.php";</script>';
}
else{
?>
<?php include "layout/submenu.php";?>  
<title>Factura</title>



<div class="container content-invoice">
<form id="frmAddFactura" name="frmAddFactura" method="post" class="invoice-form" role="form" novalidate> 
<div class="load-animate animated fadeInUp">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <h2 class="title">Sistema de Facturación</h2>
    <?php include('menu.php');?>	
</div>		    		
</div>
<input id="currency" type="hidden" value="$">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <h3>De,</h3>
    <a>Servicios y Montajes Padilla Tovar S.A</a><br>
    <a>J-10000000</a><br>
    <a>0200-000-00-00</a><br>		
    <a>sermonpa@gmail.com</a><br>	<br>
    <a>San Joaquín - Estado Carabobo</a><br>	
    
</div>      		
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
    <h3>Cliente</h3>

<div class="form-group">
<div class="form-group">

<select name="cliente"  id="cliente" class="form-control" ><span class=" form-control" required></span>
<option value="">seleccione</option>
<?php 
$consulta= "SELECT * FROM pclientes";
$result_prov   = mysqli_query($conexion,$consulta);

?>
<?php foreach ($result_prov as $key):?>
<option value="<?=$key['nombre']?>">
<?=$key['nombre']?>
</option>
<?php endforeach;?>
</select>

</div>
</div>

    <div class="form-group">
        <textarea class="form-control" rows="3" name="address" id="address" placeholder="Su dirección" required></textarea>
    </div>
    
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <table class="table table-bordered table-hover" id="invoiceItem">	
        <tr>
            <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
            <th width="15%">Prod. No</th>
            <th width="38%">Tipo de servicio</th>
            <th width="20%">Horas trabajadas</th>
            <th width="15%">Precio</th>								
            <th width="15%">Total</th>
        </tr>							
        <tr>
            <td><input class="itemRow" type="checkbox"></td>
            <td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>
            <td>

<div class="form-group">
<div class="form-group">

<select name="productName[]"  id="productName_1" class="form-control" ><span class=" form-control" ></span>
<option value="0">seleccione</option>
<?php 
$consulta= "SELECT * FROM servicio";
$result_prov   = mysqli_query($conexion,$consulta);

?>
<?php foreach ($result_prov as $key):?>
<option value="<?=$key['nombre']?>">
<?=$key['nombre']?>
</option>
<?php endforeach;?>
</select>

</div>
</div>
            
           
            <td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
            <td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
            <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
        </tr>						
    </table>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <button class="btn btn-danger delete" id="removeRows" type="button">- Borrar</button>
    <button class="btn btn-success" id="addRows" type="button">+ Agregar Más</button>
</div>
</div>

<div class="row">	
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    <h3>Notas: </h3>
    <div class="form-group">
        <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Notas" required></textarea>
    </div>
    <br>
    <div class="form-group">
        <input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
        <input type="submit" name="guardar" value="Guardar Factura" class="btn btn-success">						
    </div>
    
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <span class="form-inline">
        <div class="form-group">
            <label>Subtotal: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal" required>
            </div>
        </div>
        <div class="form-group">
            <label>Tasa Impuesto: &nbsp;</label>
            <div class="input-group">
                <input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tasa de Impuestos" required>
                <div class="input-group-addon">%</div>
            </div>
        </div>
        <div class="form-group">
            <label>Cantidad pagada: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Monto de Impuesto" required>
            </div>
        </div>							
        <div class="form-group">
            <label>Total: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total" required>
            </div>
        </div>
        <div class="form-group">
            <label>Cantidad pagada: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Cantidad pagada" required>
            </div>
        </div>
        <div class="form-group">
            <label>Cantidad debida: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Cantidad debida" required>
            </div>
        </div>
    </span>
</div>
</div>
      	
</div>
</form>			
</div>
</div>	
<?php include('layout/footer.php');?>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/jquery-validation/additional-methods.min.js"></script>
<script>
 	var frmAddFactura = $('#frmAddFactura').validate({
		rules: {
      cliente: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
	  address: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
      subTotal: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
            taxRate: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
            taxAmount: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
            totalAftertax: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
            amountPaid: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
            amountDue: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
            notes: {
				required: true,
				minlength: 1,
				maxlength: 50
			},
		},
		messages: {
            cliente: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
			address: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
            subTotal: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
            taxRate: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
            taxAmount: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
            totalAftertax: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
            amountPaid: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
            amountDue: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
            notes: {
				required: "Requerido",
				minlength: "Ingrese entre 1 y 50 caracteres",
				maxlength: "Ingrese entre 1 y 50 caracteres"
			},
		},
		errorElement: 'span',
		errorPlacement: function(error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function(element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});     
$('#frmAddFactura').submit(function(e) {

  if (frmAddFactura.errorList.length == 0) {

  }
  else{
    e.preventDefault();
   }
   });
</script>
<?php
}
?>