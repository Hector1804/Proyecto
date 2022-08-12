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
                            <a class="nav-link dropdown-toggle active" id="navbarDropdown" href="Servicios.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item active" href="">Servicio Automotriz</a></li>
                                <li><a class="dropdown-item" href="SerCambio.php">Cambios de componentes</a></li>
                                <li><a class="dropdown-item" href="Serfallo.php">Revision de fallo</a></li>
                                <li><a class="dropdown-item" href="SerMantenimiento.php">Mantenimiento</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Registro.php">Registrate</a>
                        </li>
                        <li class="nav-item">
                            <a href="Contactanos.php" class="nav-link">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header id="head" class="secondary"></header>

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h4> </h4>
                    <h4> </h4>
                    <h4> </h4>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h4> </h4>
                    <h4> </h4>
                    <h4> </h4>
                </nav>
                <article class="col-sm-8 maincontent">
                    <header class="page-header">
                        
                        <h1 class="page-title text-info">¿Cada Cuánto llevar mi Vehículo a Servicio?</h1>
                    </header>
                    <br>
                    <p>Estrenar un auto y que todos sus componentes funcionen de manera óptima es de las 
                        mejores sensaciones que te puede dar un vehículo. Sin embargo, hacer que su estado 
                        impecable dure solo es posible con revisiones periódicas en un taller mecánico o 
                        concesionario. Pero, ¿qué debe incluír un Servicio Automotriz de calidad? Descubre: 
                        ¿Cada cuánto hacer el servicio a tu auto?, ¿Qué incluye el Servicio Automotriz? y 
                        Cuáles son los componentes que debes cambiar o reparar para mantener el correcto 
                        funcionamiento de tu vehículo.</p>
                    <br>
                    <br>
                    <h3 class="text-danger">Servicio de Mantenimiento Automotriz Preventivo</h3>
                    <p>El primer servicio que se debe hacer a un auto o vehículo doméstico es el de los 
                        primeros 5,000 km y en él se lleva a cabo una revisión exhaustiva de los puntos 
                        clave del funcionamiento.</p>
                    <p>El resultado de este análisis determinará si se da mantenimiento o se cambian
                         algunos de los componentes.</p>
                    <br>
                    <br>
                    <h3 class="text-danger">Servicio Automotriz a los 5,000 Km</h3>
                    <p>En el Servicio automotriz de 5,000 Km es recomendable revisar varios de los siguientes 
                        puntos:</p>
                    <p>1° Cambio de aceite y filtro </p>
                    <p>2° Limpieza del filtro de aire, de gasolina y las bujías</p>
                    <p>3° Revisión de luces </p>
                    <p>4° Ajuste del tiempo de encendido</p>
                    <p>5° Revisión de clutch</p>
                    <p>6° Borner</p>
                    <p>7° Nivelar la batería</p>
                    <p>8° Revisar el tren delantero</p>
                    <p>Aun cuando parece un listado largo, los componentes son sencillos y son los que con 
                        mayor probabilidad requerirán atención o reemplazo para el correcto funcionamiento.</p>
                    <br>
                    <br>
                    <h3 class="text-danger">Servicio Automotriz a los 10,000 Km</h3>
                    <p>Después del primer Servicio para tu Auto, es recomendable hacer uno a los 10,000 Km y 
                        en adelante cada 10,000 Km (o cada año, lo que ocurra primero). Como es lógico, este 
                        Servicio requerirá más cambios de componentes, pero es indispensable para prevenir 
                        daño severo.</p>
                    <p>Un Servicio Automotriz estándar de cada 10,000 Km puede incluir:</p>
                    <p>1° Cambio de bujías</p>
                    <p>2° Cambio de aceite y filtro</p>
                    <p>3° Cambio del filtro de gasolina y aire</p>
                    <p>4° Cambio del refrigerante</p>
                    <p>5° Cambio de la faja del alternador</p>
                    <p>6° Ajuste del tiempo de encendido</p>
                    <p>7° Revisión de las luces y los faros</p>
                    <p>8° Ajuste del clutch</p>
                    <p>9° Revisión de los niveles de: la caja, la batería e hidráulico</p>
                    <p>10° Limpieza de terminales de batería</p>
                    <p>11° Revisión de los frenos y el tren delantero</p>
                    <p>Una vez hecho cualquiera de los dos servicios, es recomendable que te asegures de que 
                        tu auto quedó perfecto, pues de esto depende tu seguridad y el futuro estado del 
                        vehículo. En los establecimientos de Servicio Ford, por ejemplo, un asesor te dará 
                        un recorrido, donde podrás probar las diferentes capacidades de los componentes
                        revisados. En este paso, te dirán los cambios que tuvo el vehículo y debes estar 
                        atento de sonidos y apariencia.</p>
                        <br><br><br>
                </article>
                
                <aside class="col-sm-4 sidebar sidebar-right">
    
                    <div class="widget">
                        <h4></h4>
                        <br>
                        <ul class="list-unstyled list-spaces">
                           <img src="assets/img/Servicios/SerAuto/1.png" alt="" width="120%">
                           <br><br><br>
                           <img src="assets/img/Servicios/SerAuto/2.png" alt="" width="120%">
                           <br> <br><br><br><br><br>
                           <img src="assets/img/Servicios/SerAuto/3.png" alt="" width="120%"><h5 class=" text-center">Servisio automotriz HVM</h5> 
                           <br><br><br><br><br><br>
                           <img src="assets/img/Servicios/SerAuto/4.png" alt="" width="120%">
                           <br><br><br><br><br>
                           <img src="assets/img/logo.png" alt="" width="120%">
                        </ul>
                    </div>
    
                </aside>
    
            </div>
        </div>	
        
    
        <footer id="footer" class="top-space">
    
            <div class="footer1">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Contactanos</h3>
                            <div class="widget-body">
                                <p>+52 659 9674 45<br>
                                    <a href="mailto:#">hvmtaller@gmail.com</a><br>
                                    <br>
                                </p>	
                            </div>
                        </div>
    
    
                        <div class="col-md-6 widget bg-info">
                            <h3 class="widget-title">Importante</h3>
                            <div class="widget-body">
                                <p>Somos una mepresa que se compromete a cuidar realizar correctamente cualquier trabajo</p>
                                <p>Danos una oportunidad y no te arrepentiras de nada!!!!</p>
                            </div>
                        </div>
    
                    </div> <!-- /row of widgets -->
                </div>
            </div>
            <br><br><br>
        </footer>
                            
        <!-- Pie de pagina-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">HVM &copy; Taller Mecanico</p></div>
            <div class="container"><p class="m-0 text-center text-white">hvmtaller@gmail.com</p></div>
        </footer>
        
<!-- ********************************FIN de seccion de inicio ******************************************* -->
        
    </body>
</html>