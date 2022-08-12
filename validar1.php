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

        <meta http-equiv="refresh" content = "0;Contactanos.php">
    </head>

    <body>
        <?php
            $Nombre=$_POST["Nombre"];
            $Correo=$_POST["Correo"];
            $Telefono=$_POST["Telefono"];
            $Mensaje=$_POST["Mensaje"];
            include("conex.php");
            $link=Conectarse();
            mysqli_query($link, "insert into mensaje(Nombre,Correo,Telefono,Mensaje) values ('$Nombre','$Correo','$Telefono','$Mensaje')");
            
        ?>
    </body>

</html>
