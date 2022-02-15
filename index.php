<?php
include 'app/bd/config.php';
include 'carrito.php';
include 'app/bd/conexion.php';
include 'app/view/header.php'
?>





<br>
<?php if ($mensaje=""){?>
<div class="alert alert-success" role="alert">
    
    <?php echo($mensaje);?>
    <a href="mostrercarrito.php" class="badge badge-success">Ver carrito</a>
</div>
<?php } ?>
<div class="row">
<?php
$sentencia=$pdo->prepare("SELECT * FROM `productos`");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
<style>
.card{
    margin-top: 30px;
    border-radius:15px;
    border-color:#0071c4;}
</style>
<?php foreach($listaProductos as $producto){?>
    <div class="col-3">
    <div class="card">
        <img class="card-img-top" center
        src="<?php echo $producto['imagen'];?>"
        >
        <div class="card-body">
        <span><?php echo $producto['nombre'];?></span>
            <h5 class="card-title">$<?php echo $producto['descripcion'];?></h5>
            <p class="card-text"><?php echo $producto['cantidad'];?></p>
            
            <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id_producto'],cod,key) ;?>">
            <input type="hidden" name="Nombre_Producto" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],cod,key) ;?>">
            <input type="hidden" name="Descripcion_Producto" id="descripcion" value="<?php echo openssl_encrypt($producto['descripcion'],cod,key) ;?>">
            <input type="hidden" name="Precio_Producto" id="cantidad" value="<?php echo openssl_encrypt($producto['cantidad'],cod,key) ;?>">
            <input type="number" style="width: 40px;" name="cantidad" id="cantidad" value="1">
            <button class="btn btn-primary" 
            name="btnAccion" 
            value="Agregar"
             type="submit"
             style="float: right;">
            agregar al carrito
            
            </button>
            </form>
            
            
        </div>
    </div>
    </div>
    <?php } ?>
    
   

   
</div>
</div>


<script>
var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
  container: 'body'
})
</script>
<?php
include 'app/view/footer.php'
?>


