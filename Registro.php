<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HVM - Taller Mecanico</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


    </head>


    <body>
        <!-- ******************* Barra de navegacion************************-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <img src="assets/img/logo.png" alt="logo" width="10%" height="10%">
                <!-- <a class="navbar-brand" href="">Taller Mecanico</a> -->
                <h5 href="">Taller Mecanico</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Ofertas.php">Ofertas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Productos.php$categoria=0">Todos los productos</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <?php
                                include("conex.php");
                                $link=Conectarse();
                                $resulc=mysqli_query($link,"select * from categoria");
                                while($rowR=mysqli_fetch_array($resulc)){
                                    
                                    echo '
                                    <li><a class="dropdown-item" href="Productos.php?categoria='.$rowR['ID_Categoria'].'">'.$rowR['Nombre'].'</a></li>
                                        ';
                                }
                            ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="Servicios.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="SerAuto.php">Servicio Automotriz</a></li>
                                <li><a class="dropdown-item" href="SerCambio.php">Cambios de componentes</a></li>
                                <li><a class="dropdown-item" href="Serfallo.php">Revision de fallo</a></li>
                                <li><a class="dropdown-item" href="SerMantenimiento.php">Mantenimiento</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Registrate</a>
                        </li>
                        <li class="nav-item">
                            <a href="Contactanos.php" class="nav-link">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <article class="col-sm-9 maincontent">
                    <header class="page-header">
                        <h4> </h4>
                        <h1 class="page-title">Se parte del equipo!!</h1>
                    </header>
                    <br>
                    <p>
                        Unite al equipo!!! .............. (escribir algo bonito)...
                    </p>
                    <br>
                        <form action="validar.php" method="post">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Nombre" id="Nombre" placeholder="Nombre">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="ApellidoPat" id="ApellidoPat" placeholder="Apellido Paterno">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="ApellidoMat" id="ApellidoMat" placeholder="Apellido Materno">
                                </div>
                                <br> <br>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" name="Edad" id="Edad" placeholder="edad">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Correo" id="Correo" placeholder="Correo Electronico">
                                </div>  
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Calle" id="Calle" placeholder="Calle">
                                </div>
                                <br><br>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Cruzamiento" id="Cruzamiento" placeholder="Cruzamiento">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" name="NoExt" id="NoExt" placeholder="NoExt">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" name="CP" id="CP" placeholder="C.P.">
                                </div>
                                <br> <br>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="Localidad" id="Localidad" placeholder="Localidad">
                                </div>
                                <br><br>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="Colonia" id="Colonia" placeholder="Colonia">
                                </div>
                                <br><br>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Usuario" id="Usuario" placeholder="Usuario">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Contrasena" id="Contrasena" placeholder="Contraseña">
                                </div>
                                <br><br><br>

                                <div class="col-sm-6  text-right" align="right">
                                    <button type="submit" class="btn btn-primary btn-danger"> Enviar Datos</button>
                                </div>
                            </div>

                            
                            
                        </form>
                </article>
                <!-- /Article -->
                
                <!-- Sidebar -->
                <aside class="col-sm-3 sidebar sidebar-right">
    
                    <div class="widget">
                        <h4>Direccion</h4>
                        <address>
                            2002 Holcombe Boulevard, Houston, TX 77030, USA
                        </address>
                        <h4>telefono:</h4>
                        <address>
                            (713) 791-1414
                        </address>
                    </div>
    
                </aside>
                <!-- /Sidebar -->
    
            </div>
        </div>	<!-- /container -->
        

    </body>
</html>
