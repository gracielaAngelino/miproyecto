<?php
session_start();
echo '<html>';
require_once "conex_graciela.php";

if (isset($_POST['Login'])) {
$correo = $_POST['correo'];
$clave = md5($_POST['clave']);
  
$loginSql = "SELECT * FROM usuario WHERE correo='{$correo}' AND clave ='{$clave}'";
$loginquery = mysqli_query($conexion, $loginSql) or die(mysqli_error());
$nrosolicitudes = mysqli_num_rows($loginquery);



if ($nrosolicitudes > 0) {
foreach ($loginquery as $logindata):
$_SESSION['Id'] = $correo;
$_SESSION['userid'] = $logindata["id"];
endforeach;

$_SESSION['SES_ADMIN'] = $correo;

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

} else {

?>
<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="alert alert-warning alert-dismissable">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center> <strong>Error de ingreso al sistema</strong> </center>
</div>
<br>
<br>
<br>
<center><div><img class="img-responsive" src="assets/img/ui-danro.jpg"></center>
</div>
</div>
</body>
<?php

echo "<meta http-equiv='refresh' content='3; url = login.php'>";

}

}

?>
<html>
  
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
  <script>
  $.backstretch("assets/img/f.jpg", {speed: 500});
  </script>
  
</html>

