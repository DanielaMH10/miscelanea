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
	if ( isset($_POST["nomp"] , $_POST["id"], $_POST["tel"],$_POST["dir"])){
		if ($con = conectarBase($host, $usuario, $clave, $base)) {
			
			// tarspasamos las variables locales
			$codigo =$_POST["usecode"];
			$nombre = $_POST["nomp"];
			$identificacion = $_POST["id"];
			$telefono = $_POST["tel"];
			$direccion = $_POST["dir"];
			$consulta = "UPDATE proveedores SET nombre = '$nombre', identificacion = '$identificacion', telefono = '$telefono', direccion = '$direccion' WHERE id_proveedor = '$codigo'";
			if (mysqli_query($con,$consulta)) {
			?>	
			<div class="alerta_satis">
			<p class="satis">
		
				<img src="http://localhost/miscelanea/assests/img/feliz.png" alt="Acceso Concedido" width="100px">
				<legend id="leg1">Se actualizo correctamente <br> <span><?php echo $nombre. " " . $identificacion . "";?></span></legend>
				<br>
				<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			</div>
			
			<?php
				
				
			}
			else {
			?>	
			<p class="err">
		
				<img src="../img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">No se pudo modificar <?php echo mysqli_error($con);?></legend>
				<br>
				<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
		}
			else {
			?>	
			<p class="err">
		
				<img src="img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">Servicio interrumpido</legend>
				<br>
				<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
		}
			else {
			?>	
			<p class="err">
		
				<img src="img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">No se ha indicado el registro a modificar</legend>
				<br>
				<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

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