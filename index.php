
<?php 

session_start();
require_once "inicio.sesion.php";
require_once "conex_graciela.php";
require_once "layout/head.php";
$consulta = "SELECT * FROM agenda";


?>

<!DOCTYPE html>
<html>

<div> <?php require_once "layout/submenu.php"; ?></div>

<div id="layoutSidenav_content">
                <body>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Inicio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>

                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <img class="card-img-top" src="assets/img/maquinaria.jpg" alt="Card image cap">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="card-text">Trabajos de alto rendimiento</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <img class="card-img-top" src="assets/img/2.jpg" alt="Card image cap">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="card-text">Personal altamente capacitado</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <img class="card-img-top" src="assets/img/5.jpg" alt="Card image cap">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="card-text">Servicios de calidad</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <img class="card-img-top" src="assets/img/1.jpg" alt="Card image cap">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="card-text">Trabajos de alto rendimiento</p>
                                        
                                    </div>
                                </div>
                            </div>
</body>
                        <?php require_once "layout/footer.php"; ?>
