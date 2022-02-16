	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>

	<?php
		include_once 'header.php';
		include_once 'footer.php';

	?>
	<?php

	//Incluimos los datos de la conexion y las funciones://
	include("Conexion.php");
	include("Funciones.php");
	//Usamos esas variables

	if($conexion = conectarBase($host, $usuario, $clave, $base)){

		//Preparamos la orden sql
		$consulta = "SELECT * FROM proveedores";
		//Ejecutar la orden y obtener datos...devuelve $enlace//
		if($paquete = consultar($conexion, $consulta)){
			//Aqui llamaremos una funcion que muestre los datos//
			$codigoTable = tabular($paquete);
			echo $codigoTable;
		}
		else{
			echo "<p>No se encontraron datos";
		}
	}

		else{
			echo "<p>No se conoce el usuario";
		}
	
?>
		
</body>
</html>