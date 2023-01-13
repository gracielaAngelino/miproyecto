<?php

include_once 'conex_graciela.php';

?>


 <!DOCTYPE html>
  <html lang="en">
  <head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>Login</title>
  
  <link href="assets/css/estilos.css" rel="stylesheet">

  </head>

  <body class="bg-primary">
			<body background="assets/img/no.jpg" >
				<style>
				body {
					background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("assets/img/no.png");
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-size: 100% 100%;
					background-opacity: 20%;
				}
			</style>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Servicios y Montajes Padilla Tovar S.A</h3></div>
                                    <div class="card-body">

                                        <form method="post" action="validar.php">

											<div class="form-floating mb-3">
											<input class="form-control" label class="small mb-1" name="correo" type="text" />
											<label for="inputEmailAddress">Usuario</label>
									</div>
											<div class="form-floating mb-3">
											<input class="form-control" label class="small mb-1" id="inputPassword" name="clave" type="password" />
											<label for="inputPassword">Contraseña</label>
										</div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Olvidó la contraseña?</a>
																								<div class="form-group  text-right"></a>
																						<button class="btn btn-primary" type="submit" name="Login" >Iniciar sesión</button></div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2022 Servicios y Montajes Padilla Tovar S.A</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="js/scripts.js"></script>
    </body>
  </html>
