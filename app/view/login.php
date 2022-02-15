<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assests/css/login.css">
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
			<a href="">Forgot Password?</a>
         <p class="center"><input type="submit" value="SiGN IN">&nbsp;<input type="button" value="SIGN UP"></p> 
         <footer id="pie">
         <h4 class="center" hold> OR LOGIN WHIT</h4>
         </footer>
      </form>
   </div>
</body>
</html>