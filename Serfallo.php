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
                                <li><a class="dropdown-item" href="SerCambio.php">Cambios de componentes</a></li>
                                <li><a class="dropdown-item active" href="">Revision de fallo</a></li>
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
                
                <article class="col-sm-8 maincontent">
                    <header class="page-header">
                        <br> <br>
                        <h1 class="page-title text-danger">Dectectar fallas en el vehículo</h1>
                    </header>
                    <p>Identificar a tiempo fallas en los motores, aun sin saber de mecánica automotriz, 
                        es importante para evitar quedarse varado a medio camino.Los autos cuentan con 
                        maquinarias delicadas a las que se debe dar mantenimiento periódicamente para 
                        garantizar su buen funcionamiento.</p>
                    <p>Más allá de los servicios de mantenimiento de autos recomendados por el fabricante 
                        cada 5 mil o 10 mil kilómetros, es conveniente que revises habitualmente los niveles 
                        del aceite, el anticongelante y los líquidos de frenos y de transmisión, así como 
                        el inflado de las llantas, sobre todo si saldrás a carretera.</p>
                    <br>
                    <br>
                    <h3>Sistemas de alerta de tu vehículo</h3> 
                    <p>Las luces del tablero se iluminarán cuando enciendas el motor, pero pon atención si 
                        algún ícono se queda prendido después de unos segundos.Algunos te indicarán problemas
                        en el nivel o presión del aceite, el inflado de las llantas o algún desperfecto en
                        el motor o sus sensores. Acude con un especialista en mecánica automotriz antes de 
                        que el problema se agrave o el auto te deje tirado en el camino.</p>
                    <h3>Explosiones inusuales</h3>
                    <p>Fallas en la combustión o detonaciones en los cilindros debidos a la falta de afinación
                        pueden resultar en problemas graves y costosos en los pistones.</p>
                    <h3> Chillidos al encender</h3>
                    <p>Si al accionar la llave el motor no enciende sino más bien se escucha un chillido, se 
                        trata de un problema en el motor de arranque que deberá atender un mecánico eléctrico.</p>
                    <h3>Vibraciones o golpeteo en la caja de velocidades</h3>
                    <p>Si al hacer los cambios de velocidad notas traqueteos o sacudidas, debes acudir al taller 
                        a que hagan una revisión completa de la caja.</p>
                    <h3>Humo y olores extraños</h3>
                    <p>Si el humo es blanco y sale del motor puede deberse a un sobrecalentamiento del mismo, pero 
                        si sale del escape el problema puede ser más grave aún y deberse a algún contaminante en la 
                        gasolina o a una filtración de aceite.Los olores pueden originarse tanto en fugas de aceite 
                        o de refrigerante como en bandas quemadas o problemas en los frenos.Fuera de estas señales 
                        características, cualquier detalle inusual en la conducción de tu vehículo puede ser señal 
                        de una avería y es conveniente que acudas al taller mecánico para su revisión.</p>
                    <p>Habrá ocasiones en que sea más conveniente que no circules o te detengas y llames al servicio 
                        de asistencia vial que ofrecen los seguros de autos para que un mecánico acuda en tu auxilio 
                        o se envíe una grúa a recoger tu auto y llevarlo al taller más cercano.Una descompostura 
                        mientras estas circulando o que te deje varado en un lugar poco visible o en medio de la 
                        vía puede ser peligroso para tu propia seguridad y la de los demás.Presta atención a las 
                        señales y atiende las fallas en el motor de tu vehículo antes de que suceda algo más grave.</p>
                        <br><br><br>
                </article>
                
                <aside class="col-sm-4 sidebar sidebar-right">
    
                    <div class="widget">
                        <h4></h4>
                        <br> <br>
                        <ul class="list-unstyled list-spaces">
                           <img src="assets/img/Servicios/Serfallo/0.jpg" alt="" width="120%">
                           <br> <br>
                           <img src="assets/img/Servicios/Serfallo/0.1.jpg" alt="" width="120%">
                           <br> <br>
                           <img src="assets/img/Servicios/Serfallo/1.jpg" alt="" width="120%">
                           <br> <br>
                           <img src="assets/img/Servicios/Serfallo/2.jpg" alt="" width="120%">
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