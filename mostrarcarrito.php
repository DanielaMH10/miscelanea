<?php
include 'app/bd/config.php';
include 'carrito.php';
include 'app/view/header.php'


?>
<br>
<style>
    .container{
        margin-top: 15px;
    }
</style>
<div class="container">
    
<h3>Lista de carrito</h3>
<?php if (!empty($_SESSION['CARRITO'])){?>
<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%"> </th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precios</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <tr>
            <td width="40%"><?php echo $producto['Nombre_Producto']?></td>
            <td width="15%" class="text-center"><?php echo $producto['cantidad']?>
           

            </td>
            <td width="20%" class="text-center"><?php echo $producto['Precio_Producto']?> </td>
            <td width="20%" class="text-center"><?php echo number_format( $producto['Precio_Producto']* $producto['cantidad'],2)?></td>
            <td width="5%">

            <form action="" method="post">

            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],cod,key) ;?>">

            
            <button
            class="btn btn-danger"
            type="submit"
            name="btnAccion";
            value="Eliminar">
            

            Eliminar</button>
            </form>
            
            
            
            </td>
        </tr>
        <?php $total=$total+( $producto['Precio_Producto']* $producto['cantidad']);?>
        <?php }?>
        <tr>
        <td colspan="3" align="right"><h3>Total</h3></td>
        <td align="right"><h3><?php echo number_format($total,2)?></h3></td>
        <td></td>
        </tr>
    </tbody>
</table>

<?php }else {?>
<div class="alert alert-success"></div>
    No hay productos en el carrito
<?php } ?>
</div>
<?php include 'app/view/footer.php' ?>
