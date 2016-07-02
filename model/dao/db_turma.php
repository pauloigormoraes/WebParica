<?php

include "../model/turma.php";

class db_turma extends connect{
    public $model;
    private $query;

    function __construct(){
        parent::__construct();
        $this->model = new turma();
    }
    public function insert(){
        $this->query = $this->readQuery("insertTurma");
        $this->MySql->beginTransaction();
        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":tu_nome", $this->model->getNome());
            $sql->bindValue(":tu_turno", $this->model->getTurno());
            $sql->bindValue(":tu_ano", $this->model->getAno());

            $sql->execute();
            $this->MySql->commit();
            print 1;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    public function update(){
        $this->query = $this->readQuery("updateTurma");
        $this->MySql->beginTransaction();
        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":tu_id", $this->model->getId());
            $sql->bindValue(":tu_nome", $this->model->getNome());
            $sql->bindValue(":tu_turno", $this->model->getTurno());
            $sql->bindValue(":tu_ano", $this->model->getAno());

            $sql->execute();
            $this->MySql->commit();
            print 1;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    public function show(){
        $this->query = "SELECT * FROM turma ORDER BY tu_id DESC;";
        try{
            $sql = $this->MySql->query($this->query);
            print json_encode($sql->fetchAll());
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
}

?>