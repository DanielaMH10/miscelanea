<?php
include_once 'app/bd/conexion.php';
class User extends DB{
    private $nombres;
    private $username;


    public function userExists($user, $pass){
        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach($query as $currentUser){
            $this->nombres = $currentUser['nombres'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombres;
    }
} 

?>