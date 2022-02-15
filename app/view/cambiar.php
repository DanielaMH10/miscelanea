<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style_prin.css">
	<title>Document</title>
</head>
<body>
	<?php
	//incluimos los datos de conexion y las funciones
	include("Conexion.php");
	include("Funciones.php");
	//Verificamos la presencia del codigo esperado
	if (isset($_GET["codigo"]) and $_GET["codigo"] <> "") {
		$codigo = $_GET["codigo"];
		//Nos conectamos:
		if ($con = conectarBase($host, $usuario, $clave, $base)) {
			//transpasamos a una variable local para evitar problemas con las comillas
			$consulta = "SELECT * FROM proveedores WHERE id_proveedor = '$codigo'";
			if ($paquete = consultar($con,$consulta)) {
				$resultado = editarRegistros($paquete);
				echo $resultado;
			}
			else {
				echo "el usuario no se pudo modificar";
			}
		}
			else {
				echo "servicio interrumpido";
			}
		}
			else {
				echo "no se a indicado el registro a modificar";
			}
			
		
	?>
</body>
</html>