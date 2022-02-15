<?php

session_start();
$mensaje="";


if (isset($_POST['btnAccion'])){
    
    switch($_POST['btnAccion']){

        case 'Agregar':
           

            if(is_numeric(openssl_decrypt($_POST['id'],cod,key) )){
                $ID=openssl_decrypt($_POST['id'],cod,key);
                $mensaje.= "ok id correcto".$ID. "<br>";

            }else{
                $mensaje.= "f id incorrecto".$ID."<br>";
            }

            if(is_string(openssl_decrypt($_POST['Nombre_Producto'],cod,key) )){
                $Nombre_Producto=openssl_decrypt($_POST['Nombre_Producto'],cod,key);
                $mensaje.= "ok nombre correcto ".$Nombre_Producto."<br>";

            }else{
                $mensaje.= "f nombre incorrecto ".$Nombre_Producto."<br>";break;
            }

            if(is_numeric($_POST['cantidad']) ){
                $cantidad=$_POST['cantidad'];
                $mensaje.= "ok cantidad correcto ".$cantidad."<br>";

            }else{
                $mensaje.= "f cantidad incorrecto ".$cantidad."<br>";break;
            }

            
            if(is_string(openssl_decrypt($_POST['Descripcion_Producto'],cod,key) )){
                $Descripcion_Producto=openssl_decrypt($_POST['Descripcion_Producto'],cod,key);
                $mensaje.= "ok Descripcion correcto ".$Descripcion_Producto."<br>";

            }else{
                $mensaje.= "f Descripcion incorrecto ".$Descripcion_Producto."<br>";break;
            }

            if(is_numeric(openssl_decrypt($_POST['Precio_Producto'],cod,key) )){
                $Precio_Producto=openssl_decrypt($_POST['Precio_Producto'],cod,key);
                $mensaje.= "ok id correcto ".$Precio_Producto."<br>";

            }else{
                $mensaje.= "f id incorrecto ".$Precio_Producto."<br>";
            }
        if (!isset($_SESSION['CARRITO'])){

            $producto=array(
            'ID'=>$ID,
            'Nombre_Producto'=>$Nombre_Producto,
            'cantidad'=>$cantidad,
            'Descripcion_Producto'=>$Descripcion_Producto,
            'Precio_Producto'=>$Precio_Producto,
            );
            $_SESSION['CARRITO'][0]=$producto;
            $mensaje= "Producto agregado al carrito";
        }else{
            $idProductos=array_column($_SESSION['CARRITO'],"ID");
            if (in_array($ID,$idProductos)){
                echo "<script>alert('El producto ya ha sido seleccionado')</script>";
            }else {
               
            
            $NumeroProductos=count($_SESSION['CARRITO']);
            $producto=array(
                'ID'=>$ID,
                'Nombre_Producto'=>$Nombre_Producto,
                'cantidad'=>$cantidad,
                'Descripcion_Producto'=>$Descripcion_Producto,
                'Precio_Producto'=>$Precio_Producto,
                );
                $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                $mensaje= "Producto agregado al carrito";
            }
        }
        //$mensaje= print_r( $_SESSION,true);
        
        break;
        case "Eliminar":
            if(is_numeric(openssl_decrypt($_POST['id'],cod,key) )){
                $ID=openssl_decrypt($_POST['id'],cod,key);
               
                 foreach($_SESSION['CARRITO'] as $indice=>$producto){ 
                    if($producto['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);
                        echo "<script>alert('Elemento borrado')</script>";

                    }

                 } 

            }else{
                $mensaje.= "f id incorrecto".$ID."<br>";
            }
            

        break;


    }





}

?>