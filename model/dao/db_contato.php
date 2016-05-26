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
        /*try {
            $sql = $this->MySql->prepare($this->query);
            $sql->bindValue(":ct_lagradouro", $this->model->getLagradouro());
            $sql->bindValue(":ct_numero", $this->model->getNumero());
            $sql->bindValue(":ct_bairro", $this->model->getBairro());
            $sql->bindValue(":ct_cidade", $this->model->getCidade());
            $sql->bindValue(":ct_estado", $this->model->getEstado());
            $sql->bindValue(":ct_email", $this->model->getEmail());
            $sql->bindValue(":ct_tel_1", $this->model->getTel1());
            $sql->bindValue(":ct_tel_2", $this->model->getTel2());

            $sql->execute();
            $this->MySql->commit();
            print 1;
        } catch (Exception $e) {
            print $e->getMessage();
        }*/
    }
}

?>