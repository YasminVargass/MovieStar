<?php

class User{

    public $id;
    public $name;
    public $lastName;
    public $password;
    public $email;
    public $img;
    public $bio;
    public $token;


    
    
}

interface UserDaoInterface{

    public function buildUser($data);
    public function create(User $user);
    public function update($user);
    public function verifyToken($protected = false);
    public function setTokenToSession($protected, $redirect = true);
    public function findByEmail($email);
    public function findById($id);
    public function findByToken($token);
    public function changePassword (User $user);
}

?>