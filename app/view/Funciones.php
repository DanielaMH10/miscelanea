<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style_prin.css">
	<script src="../js/Eventos.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<?php

function conectarBase($host, $usuario, $clave, $base){
	if (!$enlace = @mysqli_connect($host, $usuario, $clave, $base)){
		return false;

	}
	else{
		return $enlace;
	}
}

function consultar($conexion, $consulta){
	if (!$datos = mysqli_query($conexion, $consulta) or mysqli_num_rows($datos) < 1){
		return false;
	}
	else{
		return $datos;
	}
}


function tabular($datos){
    ?>
    <div class="" id="cuadro2">
    <p class="titulo" >Control Proveedores <a href="r.html"><input class="btn btn-dark" type="button" value="Añadir"></a></p>
    <?php
    $codigo =  '<div class="col-auto bg-dark p-5">';
	$codigo = '<table class="table table-striped" cellpading = "8">';
	$codigo .= '<tr>';
	$codigo .= '<th>ID</th>';
	$codigo .= '<th>Nombre proveedor</th>';
	$codigo .= '<th>Numero identificación </th>';
	$codigo .= '<th>Telefono</th>';
	$codigo .= '<th>Dirección</th>';
	$codigo .= '</tr>';

	while ($fila = @mysqli_fetch_array($datos)){

		$codigo .= '<tr>';
		$codigo .= '<td>' . utf8_encode($fila["id_proveedor"]) . '</td>';
		$codigo .= '<td>' . utf8_encode($fila["nombre"]) . '</td>';
		$codigo .= '<td>' . utf8_encode($fila["identificacion"]) . '</td>';
		$codigo .= '<td>' . utf8_encode($fila["telefono"]) . '</td>';
		$codigo .= '<td>' . utf8_encode($fila["direccion"]) . '</td>';
		

		$codigo .= '<td><a href="Borrado.php?codigo='.$fila["id_proveedor"].'"><input class="btn btn-danger" type="button" value="Borrar"></a></td>';
		$codigo .= '<td><a href="cambiar.php?codigo='.$fila["id_proveedor"].'"><input id="btn-abrir-popup" class="btn btn-success" type="button" value="Modificar"></a></td>';
		$codigo .= '</tr>';
		

	}
	$codigo .= '</table>';
	$codigo .= '<a href="../reporte/index3.php"><input id="btn-abrir-popup" class="btn btn-dark" type="button" value="Descarga PDF"></a>';
    $codigo .= '</div>';    
	return $codigo;
}

?>
</div>

<?php

function editarRegistros ($datos){

	if ($fila = @mysqli_fetch_array($datos)) {
		$codigoActual = utf8_encode($fila["id_proveedor"]);
		$nombreActual = utf8_encode($fila["nombre"]);
		$identificacionActual = utf8_encode($fila["identificacion"]);
		$telefonoActual = utf8_encode($fila["telefono"]);
		$direccionActual = utf8_encode($fila["direccion"]);

		$codigo = '<form class="modificaform" action="Cambiado.php" method="post">
			<fieldset><legend>Puede modificar los datos de este registro</legend>
           	<p><label>Nombre del Producto:
            <input class="field" type="text" name="nomp" value = "'.$nombreActual.'">
            </label></p>
           	
           	<p><label>Numero de identificación:
            <input class="field" type="number" name="id" value = "'.$identificacionActual.'">
            </label></p>

			<p><label>Telefono:
			<input class="field" type="number" name="tel" value = "'.$telefonoActual.'">
			</label></p>

			<p><label>Direccion:
			<input class="field" type="text" name="dir" value = "'.$direccionActual.'">
			</label></p>

            <input type="hidden" name="usecode" value = "'.$codigoActual.'">

            <p> <input  class="modi" type="submit" name="submit" value = "Guardar cambios">
            </p></fieldset>
            <p>Regresar a <a href = "listar_productos.php"> listado </a> </p></form>';
	}
	else{
		$codigo = false;
	}

	return $codigo;

}

?>
</body>
</html>
