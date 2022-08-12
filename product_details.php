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
	<?php include("ecb.php");  ?>
	<section>
		<div class="container">
            <div class="row">
				<article class="col-sm-9 maincontent">
					<?php
						$producto=$_GET["producto"];
						//include("conex.php");
						$link=Conectarse();
						$resultado=mysqli_query($link,"select * from productos where ID_Producto=$producto");
						while($row=mysqli_fetch_array($resultado)){
							$idp=$row["ID_Producto"];
							$ResulFoto=mysqli_query($link,"select * from fotos where ID_Producto=$idp limit 0,1");
							$rowf=mysqli_fetch_array($ResulFoto);
										echo ('
											<header class="page-header">
												<h4> </h4>
												<h1 class="page-title"></h1>
											</header>
											<br>
											<br>
											<img src="'.$rowf['URLFoto'].'" alt="" width="80%">
				</article>
										<aside class="col-sm-3 sidebar sidebar-right">
											<div class="widget">
												<header class="page-header">
													<br><br><br><br>
													<h1 class="page-title"> '.$row['Nombre'].' </h1>
													<h3>Marca</h3>
												</header>
												<p>'.$row['Descripcion'].'</p>
												<h1 class="page-title">'.$row['Precio'].'</h1>
											</div>
										</aside>
										');
					   }
					?>					
            </div>
        </div>	<!-- /container -->
	</section>
</body>
</html>