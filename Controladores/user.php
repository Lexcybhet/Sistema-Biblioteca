<?php
include_once 'db.php';
class User extends DB {
    private $nombre;
    private $username;
    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM Usuario WHERE Cedula_Usuario = :user AND Contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM Usuario_Usuario WHERE Nombre = :user');
        $query->execute(['user' => $user]);
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['Nombre_Usuario'];
               }
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>