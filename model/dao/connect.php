<?php

class connect{

    private $username;
    private $password;
    private $host;
    private $schema;
    protected $MySql;

    function __construct(){
        $this->setSettings("root", "#123456", "localhost", "parica_db");

        try{
            $this->MySql = new PDO("mysql:host={$this->host}; dbname={$this->schema}; charset=utf8", $this->username, $this->password);
            $this->MySql->exec("SET CHARSET utf8");
            $this->MySql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $error) {
            die($error->getMessage());
        }
    }

    protected function setSettings($user, $pass, $host, $schema){
        $this->username = $user;
        $this->password = $pass;
        $this->host = $host;
        $this->schema = $schema;
    }

    public function readQuery($filename){
        $base = "../model/sql/";
        return file_get_contents($base.$filename.".sql");
    }

}

?>
