<?php

include "../model/boletim.php";

class db_boletim extends connect{
    public $model;
    private $query;

    function __construct(){
        parent::__construct();
        $this->model = new boletim();
    }
    public function insert(){
        $this->query = $this->readQuery("insertBoletim");
        $this->MySql->beginTransaction();

        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":bo_ma_id", $this->model->getMateriaId());
            $sql->bindValue(":bo_al_id", $this->model->getAlunoId());
            $sql->bindValue(":bo_n1", $this->model->getNotas(1));
            $sql->bindValue(":bo_n2", $this->model->getNotas(2));
            $sql->bindValue(":bo_n3", $this->model->getNotas(3));
            $sql->bindValue(":bo_n4", $this->model->getNotas(4));
            $sql->bindValue(":bo_f1", $this->model->getFaltas(1));
            $sql->bindValue(":bo_f2", $this->model->getFaltas(2));
            $sql->bindValue(":bo_f3", $this->model->getFaltas(3));
            $sql->bindValue(":bo_f4", $this->model->getFaltas(4));

            $sql->execute();
            $this->MySql->commit();
            print 1;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    public function update(){
        $this->query = $this->readQuery("updateBoletim");
        $this->MySql->beginTransaction();

        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":bo_ma_id", $this->model->getMateriaId());
            $sql->bindValue(":bo_al_id", $this->model->getAlunoId());
            $sql->bindValue(":bo_n1", $this->model->getNotas(1));
            $sql->bindValue(":bo_n2", $this->model->getNotas(2));
            $sql->bindValue(":bo_n3", $this->model->getNotas(3));
            $sql->bindValue(":bo_n4", $this->model->getNotas(4));
            $sql->bindValue(":bo_f1", $this->model->getFaltas(1));
            $sql->bindValue(":bo_f2", $this->model->getFaltas(2));
            $sql->bindValue(":bo_f3", $this->model->getFaltas(3));
            $sql->bindValue(":bo_f4", $this->model->getFaltas(4));

            $sql->execute();
            $this->MySql->commit();
            print 1;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    public function listBy(){
        $this->query = $this->readQuery("selectBoletim");
        try{
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":al_id", $this->model->getAlunoId());
            $sql->execute();
            print json_encode($sql->fetchAll());
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
}

?>