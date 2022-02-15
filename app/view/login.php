<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assests/css/login.css">
   <!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body>
   <div id="imagen" width="500" height="500" class="imageborder">
      <img src="assests/img/f04.jpeg" width="480" height="480">
   </div>   
   <div id="formulario">
      <form action="" method="POST" >
         <?php
            if(isset($errorLogin)){
               echo $errorLogin;
            }
         ?>
         <h2>Bienvenido!</h2>
         <h3>Inicia sesion con tu cuenta o crea una</h3>
         <input type="text" name="username"  placeholder="Nombre de usuario" autocomplete="off"></p>
         <input type="password" name="password"  placeholder="Password" autocomplete="off"></p><br>
         <p class="center"><input type="submit" value="SIGN IN"></p> 
         <footer id="pie">
         </footer>
      </form>
   </div>
</body>
</html>