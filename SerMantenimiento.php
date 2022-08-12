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
                                <li><a class="dropdown-item" href="Serfallo.php">Revision de fallo</a></li>
                                <li><a class="dropdown-item active" href="">Mantenimiento</a></li>
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
                        <h1 class="page-title text-danger">Mantenimiento de tu vehículo</h1>
                    </header>
                    <p>Conducir un coche es caro desde el momento en el que te planteas obtener 
                        el permiso de conducir. El carnet es costoso, y especialmente, la compra 
                        del coche, pero no cabe duda de que mantener correctamente la maquinaria 
                        de dicho automóvil requiere también un gran desembolso que, a la larga, 
                        acabará ahorrándonos dinero y, sobre todo, muchos disgustos.</p>
                    <h3>Mantenimiento correctivo</h3>
                    <p>Durante las tareas de mantenimiento correctivo tienen cabida las reparaciones 
                        o sustituciones de aquellos componentes del vehículo que han dejado de 
                        funcionar o ya no lo hacen adecuadamente.</p>
                    <h3>Mantenimiento preventivo</h3>
                    <p>El mantenimiento preventivo se refiere al seguimiento de las instrucciones del 
                        fabricante en las que se indica los espacios de tiempo o kilometraje en
                        los que se deben sustituir ciertas partes del vehículo o cada cuánto deben ser 
                        revisadas.</p>
                    <h3>Mantenimiento predictivo</h3>
                    <p>Por último, el mantenimiento predictivo es aquel que convierte al propietario en 
                        observador, es decir, saber reconocer por los propios medios y sentidos si ha de 
                        realizarse alguna reparación antes de que el componente llegue a fallar.
                        La mayor parte del mantenimiento puede ser realizada por el mismo propietario si 
                        éste dispone de los medios y herramientas adecuadas. Será capaz de realizar 
                        comprobaciones tales como la revisión de la presión de los neumáticos (que debe 
                        realizarse mensualmente), observar el nivel del líquido de frenos, o verificar si 
                        el sistema de alumbrado del vehículo funciona correctamente, siendo este último muy 
                        importante ya que sirve tanto para ver a los demás conductores como para ser visto 
                        por ellos.</p>
                    <p>Sin embargo, hay apartados del mantenimiento que requieren el uso de mano de obra 
                        especializada, por lo que puede ser necesario acudir a un taller especializado en 
                        dicho componente, y no se debe escatimar a la hora de escogerlo ni optar por materiales 
                        de inferior calidad para abaratar el precio de la reparación. Hay que recordar que un 
                        buen mantenimiento puede salvar no sólo la vida del coche, sino también la de su propio 
                        conductor, así como la de otros conductores que circulen por la carretera, y eso no tiene 
                        precio.</p>
                    <p>Destacar aquí que, utilizar ciertas piezas procedentes de desguace para llevar a cabo las 
                        reparaciones del vehículo puede ser tan beneficioso como perjudicial, por ello es 
                        necesario contar con la garantía de compra además de exigir que la pieza esté previamente 
                        revisada y comprobada por un profesional. Las piezas relacionadas con los sistemas de 
                        seguridad tanto activa como pasiva del vehículo, se aconseja que sean siempre nuevas.</p>

                        <br><br><br>
                </article>
                
                <aside class="col-sm-4 sidebar sidebar-right">
    
                    <div class="widget">
                        <h4></h4>
                        <br> <br>
                        <ul class="list-unstyled list-spaces">
                           <img src="assets/img/Servicios/SerMantenimiento/0.jpg" alt="" width="120%">
                           <br><br>
                           <img src="assets/img/Servicios/SerMantenimiento/1.jpg" alt="" width="120%">
                           <br><br>
                           <img src="assets/img/Servicios/SerMantenimiento/2.jpg" alt="" width="120%">
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