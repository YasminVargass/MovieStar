<?php

require_once ("connection.php");
require_once("../models/User.php");
require_once("../dao/UserDAO.php");


$type = filter_input(INPUT_POST, "type");

echo $type;

if($type === "register"){

$name = filter_input(INPUT_POST, "name");
$lastName = filter_input(INPUT_POST, "lastName");
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");
$confirmPassword = filter_input(INPUT_POST, "confirmPassword");

if($name && $lastName && $email && $password){
 
    
}
}else if($type === "login"){

    
}


?>