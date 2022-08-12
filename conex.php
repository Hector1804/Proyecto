	<?php 
	function Conectarse(){
		if(!($link=mysqli_connect("localhost","root","123456789"))){
			echo("ERROR conectando a la base de datos");
			exit();
		}
		if(!mysqli_select_db($link,"pagina")){
			echo("Error seleccionando la base de datos");
			exit();
		}
		return($link);
	}
	?>