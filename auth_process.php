<?php
require_once ("globals.php");
require_once ("connection.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);

//ressgata o tipo do formulário
$type = filter_input(INPUT_POST, "type");

echo $type;

//verificação do tipo de formulário
if($type === "register"){

$name = filter_input(INPUT_POST, "name");
$lastName = filter_input(INPUT_POST, "lastName");
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");
$confirmPassword = filter_input(INPUT_POST, "confirmPassword");

//Verificação doss dados mínimos
if($name && $lastName && $email && $password){
 
    
}else{
$message->setMessage("Por favor, preencha todos os campos", "error", "back");


}
}else if($type === "login"){

    
}


?>