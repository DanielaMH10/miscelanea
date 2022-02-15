<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Login</title>
</head>
<body>
<?php
require_once 'app/model/user.php';
include_once 'app/controller/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'inicio.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "validacion de Login";

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'inicio.php';
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        echo ("<script>swal('Error','Nombre de usuario y/o password es incorrecto','error')</script>");
        //echo $errorLogin;
        include_once 'app/view/login.php';
    }
}else{
    //echo "Login";
    include_once 'app/view/login.php';
}
?>

</body>
</html>

