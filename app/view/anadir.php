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
	$conn = new mysqli("localhost", "root", "", "miscelanea");
	if($conn->connect_error){
    
    	die ("No se puede conectar al servidor: " . $conn->connect_error);
    
	}


	$query = "INSERT INTO proveedores (nombre, identificacion, telefono, direccion) VALUES('$_REQUEST[Nom]','$_REQUEST[Ident]','$_REQUEST[Tel]','$_REQUEST[Dire]')";
	$result = $conn -> query($query);

	if(!$result) die("Error al acceder a la base de datos" . mysqli_error($conn));
		?>	
		<div class="alerta_satis">
			<p class="satis">
		
			<img src="http://localhost/miscelanea/assests/img/feliz.png" alt="Acceso Concedido" width="100px">
			<legend id="">Proveedor Agregado Correctamente</span></legend>
			<br>
			<a href="listar_proveedores.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			</div>			
		<?php
	
	$conn -> close();

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
