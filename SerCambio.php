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
                                <li><a class="dropdown-item" href="SerAuto.php">Servicio Automotriz</a></li>
                                <li><a class="dropdown-item active" href="">Cambios de componentes</a></li>
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
                        
                        <h1 class="page-title">Cambio de componentes</h1>
                    </header>
                    <p>Su buen estado sirve para prevenir averías costosas, mejora el rendimiento y el 
                        consumo, y aporta mayor seguridad.Aceite, pastillas de freno, correa de la 
                        distribución, neumáticos, son algunos de los elementos de un coche que con el 
                        tiempo y el uso se desgastan y hay que cambiarlo con un doble objetivo , evitar 
                        averías que a la larga puedan resultar más costosas y, sobre todo, mantener el 
                        coche en perfecto estado para evitar accidentes.</p>
                    <p>Atento a este curioso ranking elaborado por HVM Taller Mecanico que nos detalla 
                        cuáles son los componentes que mas se sustituyen en un taller mecánico cuando 
                        acudes con tu coche. </p>
                    <h3>Filtro de aceite</h3>
                    <p>Sin duda es todo un ‘clásico’ que se suele cambiar cada 10.000 kilómetros. Ocupa 
                        la primera posición.</p>
                    <h3>Aceite</h3>
                    <p>El ‘compañero inseparable’ del filtro. Aquí las recomendaciones de sustitución 
                        varían en función de su calidad y tipo de vehículo. Como media se suele cambiar 
                        cada 15.000 / 30.000 km.</p>
                    <h3>Filtro antipolen</h3>
                    <p>Se encarga de evitar la entrada de polen, pero también de polvo y otras partículas 
                        al habitáculo. Conviene revisarlo para por ejemplo evitar alergias al usar el 
                        vehículo. Está formado por un material mucho más denso que un filtro de aire 
                        convencional.</p>
                    <h3>Filtros de habitáculo.</h3>
                    <p>Se recomienda cambiar el filtro de habitáculo cada 15.000 km o, al menos, una vez 
                        al año.</p>
                    <h3>Aire acondicionado</h3>
                    <p>Será necesario realizar una revisión cada dos años para prevenir averías complejas 
                        y costosas, además de alargar la vida útil del sistema. Un mantenimiento periódico 
                        previene de la pérdida de refrigerante, protegiendo el medio ambiente.</p>
                    <h3>Iluminación </h3>
                    <p>Hay que revisar el sistema siempre antes de cada viaje de largo recorrido. Lo 
                        recomendable es cambiar las lámparas cada 50.000 km o cada dos años -aunque hay 
                        lámparas que tienen una mayor vida útil y se recomienda cambiarlas cada 100.000 
                        km-.</p>
                    <h3>Bujías y calentadores</h3>
                    <p> La vida útil de una bujía depende de sus características, del tipo de combustible y 
                        de las condiciones de conducción. Las bujías modernas soportan entre 30.000 y 60.000 
                        km.</p>
                    <h3>Freno de disco</h3>
                    <p>No existe una cifra exacta ya que dependerá en gran medida del vehículo y de la 
                        utilización que haga. De forma genérica se recomienda controlar el desgaste de discos 
                        y pastillas cada 20.000 km. Las pastillas delanteras se desgastan con mayor facilidad 
                        que las traseras</p>
                    <br><br><br>
                </article>
                
                <aside class="col-sm-4 sidebar sidebar-right">
    
                    <div class="widget">
                        <br><br><br>
                        <ul class="list-unstyled list-spaces">
                           <img src="assets/img/Servicios/SerCambio/1.jpg" alt="" width="90%">
                           <br><br><br>
                           <img src="assets/img/Servicios/SerCambio/2.jpg" alt="" width="90%">
                           <br><br><br>
                           <img src="assets/img/Servicios/SerCambio/3.png" alt="" width="90%">
                           <br><br><br>
                           <img src="assets/img/Servicios/SerCambio/4.jpg" alt="" width="90%">
                           <br><br><br>
                           <img src="assets/img/Servicios/SerCambio/5.jpg" alt="" width="90%">
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
    
    
        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>
    </body>
    
</html>