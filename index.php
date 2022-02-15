
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
        $errorLogin = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error!</strong> Usuario y/o clave incorrectas.</div>";
        include_once 'app/view/login.php';
        
    } 
}else{
    //echo "Login";
    include_once 'app/view/login.php';
}
?>



