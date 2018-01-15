<?php
	//Esta función inserta la cabecera
	function cabecera($titulo, $seccion){
		echo "<!DOCTYPE html>";
		echo "<html lang='es'>";
		echo "<head>";
		echo "<meta charset='UTF-8'>";
		echo "<title>".$titulo."</title>";
		echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
		echo "<link href='vista/css/styles.css' rel='stylesheet'/>";
  		echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>";
  		echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
		echo "</head>";
		echo "<body>";
		echo "<header>";
		echo "<nav class='navbar navbar-default barra'>";
		echo "  <div class='container-fluid'>";
		echo "    <ul class='nav navbar-nav'>";
		switch($seccion){
			case "Home":
				echo "      <li class='active'><a href='main.php'>Home</a></li>";
				echo "      <li><a href='alta.php'>Alta</a></li>";
				echo "      <li><a href='baja.php'>Baja</a></li>";
				echo "      <li><a href='modificacion.php'>Modificación</a></li>";
				echo "      <li><a href='consulta.php'>Consulta</a></li>";
			break;

			case "Alta":
				echo "      <li><a href='main.php'>Home</a></li>";
				echo "      <li class='active'><a href='alta.php'>Alta</a></li>";
				echo "      <li><a href='baja.php'>Baja</a></li>";
				echo "      <li><a href='modificacion.php'>Modificación</a></li>";
				echo "      <li><a href='consulta.php'>Consulta</a></li>";
			break;

			case "Baja":
				echo "      <li><a href='main.php'>Home</a></li>";
				echo "      <li><a href='alta.php'>Alta</a></li>";
				echo "      <li class='active'><a href='baja.php'>Baja</a></li>";
				echo "      <li><a href='modificacion.php'>Modificación</a></li>";
				echo "      <li><a href='consulta.php'>Consulta</a></li>";
			break;

			case "Modificar":
				echo "      <li><a href='main.php'>Home</a></li>";
				echo "      <li><a href='alta.php'>Alta</a></li>";
				echo "      <li><a href='baja.php'>Baja</a></li>";
				echo "      <li class='active'><a href='modificacion.php'>Modificación</a></li>";
				echo "      <li><a href='consulta.php'>Consulta</a></li>";
			break;

			case "Consulta":
				echo "      <li><a href='main.php'>Home</a></li>";
				echo "      <li><a href='alta.php'>Alta</a></li>";
				echo "      <li><a href='baja.php'>Baja</a></li>";
				echo "      <li><a href='modificacion.php'>Modificación</a></li>";
				echo "      <li class='active'><a href='consulta.php'>Consulta</a></li>";
			break;
		}
		echo "    </ul>";
		echo "  </div>";
		echo "</nav>";
		echo "</header>";
	}	
		
	//Esta función rellena el contenido
	function contenido($contenido){
		echo "<section>";
		echo $contenido;
		echo "</section>";	
	}	
	
	//Esta función inserta el pie
	function footer($seccion){
		echo "<footer class='footer' id='pie'>";
		echo "<div class='text-center'>Actualmente te encuentras en la sección: <b>".$seccion."</b></div>";
		echo "</footer>";
		echo "</body>";
		echo "</html>";	
	}	
?>