<?php
	require("vista/vista.php");
	$titulo = "Home";
	$seccion = "Home";
	cabecera($titulo, $seccion);
	contenido("Estas en la sección de ".$seccion);
	footer($seccion);
?>