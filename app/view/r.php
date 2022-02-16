<!DOCTYPE html>
<html lang="en">
<head>
	
<!--http:/localhost/mio/Proyecto/Registro.html-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/valida.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<title>Registro</title>
</head>
<?php
		include_once 'header.php';
		include_once 'footer.php';

	?>
<body background="img/4545.jpg">
   <div class="container">
       <div class="row vh 100 justify-content-center align-items-center">
           <div class="col-auto bg-light p-5">
               <form class="modificaform" action="anadir.php" onsubmit="return validate(this)">
        	
                   <legend>Añadir Proveedores</legend><br>
                     <div class="form-group">
                          <label>Nombre del proveedor</label>
                          <input type="text" name="Nom" class="form-check">
                      </div>

                     <div class="form-group">
                          <label>Identificacion del proveedor</label>
                          <input type="text" name="Ident" class="form-check">
                      </div>
                      
                     <div class="form-group">
                        <label>Telefono del proveedor</label>
                        <input type="text" name="Tel" class="form-check">
                    </div>
                    
                    <div class="form-group">
                        <label>Direccion del proveedor</label>
                        <input type="text" name="Dire" class="form-check">
                    </div>
                    <br> 
                    <div class="container">
                    <div class="col-auto bg-light p-5">
                         <input class="btn btn-dark" type="submit" value="Añadir">
                    </div>
                    </div>
                    <p>Regresar al <a href = "listar_productos.php">listado</a></p> 
                </form>
           </div>
       </div>
   </div>
</body>
</html>


 

<!--<tr>
                <td colspan="2" align="center">
                    <a href="listado1.php"><input type="button" value="LISTAR 1"></a>
                </td>
</tr>
<tr>
                <td colspan="2" align="center">
                    <a href="listado2.php"><input type="button" value="LISTAR 2"></a>
                </td>
</tr>
<tr>
                <td colspan="2" align="center">
                    <a href="listado3.php"><input type="button" value="LISTAR 3"></a>
                </td>
</tr>-->

<!--<h3>Eliminar Registros</h3>
<br>
<form action="borra.php" method="post">
        <fieldset>
            <legend>Borrado de Usuarios</legend>
            <p>
                <label>
                    Ingrese el correo:
                    <input type="text" name="mail">
                </label>
            </p>
            <input type="submit" value="Buscar y Eliminar Registro">
        </fieldset>
</form>-->