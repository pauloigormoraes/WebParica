<?php

include "../model/cargo.php";

class db_cargo extends connect{
    public $model;
    private $query;

    function __construct(){
        parent::__construct();
        $this->model = new cargo();
    }
    public function insert(){
        $this->query = $this->readQuery("insertCargo");
        $this->MySql->beginTransaction();
        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":ca_nome", $this->model->getNome());
            $sql->bindValue(":ca_salario", $this->model->getSalario());
            $sql->bindValue(":ca_turno", $this->model->getTurno());

            $sql->execute();
            $this->MySql->commit();
            print 1;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    public function show(){
        $this->query = "SELECT * FROM cargo ORDER BY ca_id DESC;";
        try{
            $sql = $this->MySql->query($this->query);
            print json_encode($sql->fetchAll());
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
}

?>