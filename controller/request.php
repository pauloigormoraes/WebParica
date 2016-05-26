<?php

include "ajax.php";

class request extends ajax{
    function __construct($action, $data){
        if(!$_SESSION["userId"]){
            header("HTTP/1.0 403 Forbidden");
            die("-1");
        }elseif(!method_exists($this, $action)){
            header("HTTP/1.0 404 Not Found");
            die("-2");
        }else{
            $this->json = json_decode(json_encode($data));;
            $this->$action();
        }
    }
}

session_start();
new request($_GET['action'], $_POST);

?>