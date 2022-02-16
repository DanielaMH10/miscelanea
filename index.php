<?php
require_once 'app/model/user.php';
include_once 'app/controller/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'app/view/index.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "validacion de Login";

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'app/view/index.php';
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Usuario y/o password incorrectos";
        include_once 'app/view/login.php';
        
    } 
}else{
    //echo "Login";
    include_once 'app/view/login.php';
}
?>



