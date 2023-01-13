<?php 

 
session_start();
require_once "inicio.sesion.php";
require_once "conex_imroma1.php";


?>
<!DOCTYPE html>
<html>

<div> <?php require_once "layout/head.php"; ?></div>
<div> <?php require_once"layout/submenu.php"; ?></div>
<font color="black" face="">  
<h3><i class=""></i> <center> Elige un tipo de servicio para crear presupuesto</h3></center>
<div class="row">
</font>

<br>
<center> <a  href="presupuestoo.php" > <input <center type=submit  value="Servicio de Reparación"/>  </center> </a>
<br>

<br>
<center> <a  href="presupuesto.php" > <input <center type=submit  value="Servicio de Mantenimiento"/>  </center> </a>