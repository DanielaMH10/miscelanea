<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style_prin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			$consulta = "DELETE FROM proveedores WHERE id_proveedor = '$codigo'";
			if (mysqli_query($con,$consulta)) {

				echo '<script>alert("el dato ha sido eliminado Satisfactoriamente ' . $codigo . '");</script>';
			?>	
			<p class="satis">
		
				<img src="../img/Check.png" alt="Acceso Concedido" width="50%">
				<legend id="leg1">Borrado Satisfactoriamente</legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php

			}
			else{
			?>	
			<p class="err">
		
				<img src="../img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">No se pudo borrar</legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
		}
			else{
			?>	
			<p class="err">
		
				<img src="../img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">Servicio ininterrumpido</legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
		}
			else{
			?>	
			<p class="err">
		
				<img src="../img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">No se ha indicado el registro a eliminar</legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
			
	?>
</body>
</html>