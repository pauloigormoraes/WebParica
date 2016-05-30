<?php

include "../model/colaborador.php";

class db_colaborador extends connect{
    public $model;
    private $query;

    function __construct(){
        parent::__construct();
        $this->model = new colaborador();
    }

    public function insert(){
        $this->query = $this->readQuery("insertColaborador");
        $this->MySql->beginTransaction();
        try{
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":nome", $this->model->getNome());
            $sql->bindValue(":cpf", $this->model->getCpf());
            $sql->bindValue(":rg", $this->model->getRg());
            $sql->bindValue(":cargo_id", $this->model->getCargoId());
            $sql->execute();
            $this->MySql->commit();
            print 1;
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
}

?>