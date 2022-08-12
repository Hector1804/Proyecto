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

        <meta http-equiv="refresh" content = "0;Registro.php">
    </head>

    <body>
        <?php
            $Nombre=$_POST["Nombre"];
            $ApelidoPat=$_POST["ApellidoPat"];
            $ApellidoMat=$_POST["ApellidoMat"];
            $Edad=$_POST["Edad"];
            $Correo=$_POST["Correo"];
            $Usuario=$_POST["Usuario"];
            $Contrasena=$_POST["Contrasena"];
            $Calle=$_POST["Calle"];
            $Cruzamiento=$_POST["Cruzamiento"];
            $NoExt=$_POST["NoExt"];
            $CP=$_POST["CP"];
            $Localidad=$_POST["Localidad"];
            $Colonia=$_POST["Colonia"];
            include("conex.php");
            $link=Conectarse();
            mysqli_query($link, "insert into registrousu(Nombre,ApellidoPat,ApellidoMat,Edad,Correo,Usuario,Contrasena,Calle,Cruzamiento,NoExt,CP,Localidad,Colonia) values ('$Nombre','$ApelidoPat','$ApellidoMat','$Edad','$Correo','$Usuario','$Contrasena','$Calle','$Cruzamiento','$NoExt','$CP','$Localidad','$Colonia')");
            echo($Nombre. $ApelidoPat . $ApellidoMat);
        ?>
    </body>

</html>
