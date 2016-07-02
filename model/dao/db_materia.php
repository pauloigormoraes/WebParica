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
        $this->query = $this->readQuery("insertMateria");
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
        $this->query = $this->readQuery("updateMateria");
        $this->MySql->beginTransaction();
        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":ma_id", $this->model->getId());
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
    public function show(){
        $this->query = "SELECT materia.*, colaborador.co_nome, turma.tu_nome FROM materia INNER JOIN colaborador ON materia.ma_co_id = colaborador.co_id INNER JOIN turma ON materia.ma_tu_id = turma.tu_id;
";
        try{
            $sql = $this->MySql->query($this->query);
            print json_encode($sql->fetchAll());
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
}

?>