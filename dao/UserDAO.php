<?php

include_once ("../models/User.php");

class UserDAO implements UserDaoInterface{
    
    private $conn;
    
public function __construct(PDO $conn, $url){
    $this->conn = $conn;
    $this->url = $url;
}
    public function buildUser($data){

        $user = new User();
        
        $id = $data["id"]; 
        $name = $data["name"]; 
        $lastName = $data["lastName"]; 
        $password = $data["password"]; 
        $email = $data["email"]; 
        $img = $data["img"]; 
        $bio = $data["bio"]; 
        $token = $data["token"]; 

        return $user;

    }
    public function create(User $user){}
    public function update($user){}
    public function verifyToken($protected = false){}
    public function setTokenToSession($protected, $redirect = true){}
    public function findByEmail($email){}
    public function findById($id){}
    public function findByToken($token){}
    public function changePassword (User $user){}

}





?>