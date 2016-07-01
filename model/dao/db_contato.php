<?php

include "../model/contato.php";

class db_contato extends connect{
    public $model;
    private $query;

    function __construct(){
        parent::__construct();
        $this->model = new contato();
    }
    public function insert(){
        $this->query = $this->readQuery("insertContato");
        $this->MySql->beginTransaction();
        try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":lagradouro", $this->model->getLagradouro());
            $sql->bindValue(":numero", $this->model->getNumero());
            $sql->bindValue(":bairro", $this->model->getBairro());
            $sql->bindValue(":cidade", $this->model->getCidade());
            $sql->bindValue(":estado", $this->model->getEstado());
            $sql->bindValue(":email", $this->model->getEmail());
            $sql->bindValue(":tel_1", $this->model->getTel1());
            $sql->bindValue(":tel_2", $this->model->getTel2());

            $sql->execute();
            $this->MySql->commit();
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }
    public function showLastOne(){
        $this->query = "SELECT ct_id FROM contato ORDER BY ct_id DESC LIMIT 1";
        try{
            $sql = $this->MySql->query($this->query);
            return $sql->fetchObject()->ct_id;
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
}

?>