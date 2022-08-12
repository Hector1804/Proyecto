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
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
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
                            <a class="nav-link" href="Registro.php">Registrate</a>
                        </li>
                        <li class="nav-item active">
                            <a href="" class="nav-link">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header id="head" class="secondary"></header>

        <!-- container -->
        <div class="container">
            <br>
            <div class="row">
                <article class="col-sm-9 maincontent">
                    <header class="page-header">
                        <h1 class="page-title">Envianos un mensaje!!!</h1>
                    </header>
                    
                    <p>
                        No olvides Registarte para ser parte del equipo HVM!!! ..... (Escribir mas cosas)
                    </p>
                    <br>
                        <form action="validar1.php" method="post">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Nombre" id="Nombre" placeholder="Nombre completo">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Correo" id="Correo" placeholder="Email">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="Telefono" id="Telefono" placeholder="Telefono">
                                </div>
                            
                            <br><br>
                            
                                <div class="col-sm-12">
                                    <textarea name="Mensaje" id="Mensaje" placeholder="Escribe tu mensaje aqui" class="form-control" rows="9"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 center" >
                                <button type="submit" class="btn btn-primary btn-danger"> Enviar Mensaje</button>
                                </div>
                            </div>
                            <br>
                            <br>

                        </form>
            <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7684.224628143963!2d-88.18926267347068!3d20.680363203894007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f510ac05e073bab%3A0xccd73571f13d1b71!2sCentro%20Universitario%20de%20Valladolid!5e0!3m2!1ses!2smx!4v1659664693387!5m2!1ses!2smx"  width="100%"> </iframe>
            </div>
            
            <br>
            <br>
            <br>
                </article>
                
                <!-- Sidebar -->
                <aside class="col-sm-3 sidebar sidebar-right">
    
                    <div class="widget">
                        <h4>Direccion</h4>
                        <address>
                            2002 Holcombe Boulevard, Houston, TX 77030, USA
                        </address>
                        <h4>Phone:</h4>
                        <address>
                            (713) 791-1414
                        </address>
                    </div>
    
                </aside>
    
            </div>
        </div>
        
        <section class="container-full top-space">
            <br>
            <br>
            <br>
            <br>

            
        </section>
    
        
    </body>
</html>
