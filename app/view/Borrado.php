<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		include_once 'header.php';
		include_once 'footer.php';

?>
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

				//echo "el dato ha sido eliminado Satisfactoriamente";
			?>	
			<div class="alerta_satis">
			<p class="satis">
			<img src="http://localhost/miscelanea/assests/img/feliz.png" alt="Acceso Concedido" width="100px">
				<legend id="leg1">Borrado Satisfactoriamente</legend>
				<br>
				<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			</div>
			<?php

			}
			else{
			?>	
			<p class="err">
		
				<img src="../img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">No se pudo borrar</legend>
				<br>
				<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

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
				<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

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
	<style>
		body{
			text-align: center;
		}
		.alerta_satis{
			display: block;
			margin: 100px;
			border: 1px solid #0f0;
		}
	</style>
</body>
</html>