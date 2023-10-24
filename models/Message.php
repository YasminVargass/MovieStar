<?php

class Message{

private $url;

public function __construct($url){
    $this->url = $url;
}

public function setMessage($msg, $type, $redirect = "index.php"){
    
$_SERVER["msg"] = $msg;
$_SERVER["type"] = $type;

if($redirect != "back"){

    Header("Location: $this->url" . $redirect);
}else{
    Header("Location: " . $_SERVER["HTTP_REFER"]);
}



}
public function getMessage(){

}
public function clearMessage(){

}


}


?>