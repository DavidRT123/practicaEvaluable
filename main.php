<?php
	require("vista/vista.php");
	require("modelo.php");
	$titulo = "Listado";
	$conexion = new Conexion("localhost", "root", "root", "virtualmarket");
	cabecera($titulo, $titulo);
	listado($conexion);
	footer($titulo);
?>