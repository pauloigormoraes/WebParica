<?php

include "../model/materia.php";

class db_materia extends connect{
    public $model;
    private $query;

    function __construct(){
        parent::__construct();
        $this->model = new materia();
    }
    public function insert(){
        $this->query = $this->readQuery("insertCargo");
        $this->MySql->beginTransaction();
        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":ma_nome", $this->model->getNome());
            $sql->bindValue(":ma_co_id", $this->model->getColaboradorId());
            $sql->bindValue(":ma_tu_id", $this->model->getTurmaId());

            $sql->execute();
            $this->MySql->commit();
            print 1;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    public function update(){
        $this->query = $this->readQuery("updateCargo");
        $this->MySql->beginTransaction();
        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":ca_id", $this->model->getId());
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