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
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }
    public function list(){
        $this->query = $this->readQuery("insertCargo");
    }
}

?>