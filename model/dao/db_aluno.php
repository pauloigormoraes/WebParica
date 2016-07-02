<?php

include "../model/aluno.php";

class db_aluno extends connect{
    public $model;
    private $query;

    function __construct(){
        parent::__construct();
        $this->model = new aluno();
    }

    public function insert(){
        $this->query = $this->readQuery("insertAlunos");
        $this->MySql->beginTransaction();
        try{
            $sql = $this->MySql->prepare($this->query);

            $sql->bindValue(":nome_aluno", $this->model->getNomeAluno());
            $sql->bindValue(":nome_mae", $this->model->getNomeMae());
            $sql->bindValue(":nome_pai", $this->model->getNomePai());
            $sql->bindValue(":cpf_aluno", $this->model->getCpfAluno());
            $sql->bindValue(":cpf_mae", $this->model->getCpfMae());
            $sql->bindValue(":cpf_pai", $this->model->getCpfPai());
            $sql->bindValue(":rg_aluno", $this->model->getRgAluno());
            $sql->bindValue(":rg_mae", $this->model->getRgMae());
            $sql->bindValue(":rg_pai", $this->model->getRgPai());
            $sql->bindValue(":cert_nasc", $this->model->getCertNasc());
            $sql->bindValue(":pcd", $this->model->getPcd());
            $sql->bindValue(":naturalidade", $this->model->getNaturalidade());
            $sql->bindValue(":nacionalidade", $this->model->getNacionalidade());
            $sql->bindValue(":obs", $this->model->getObs());
            $sql->bindValue(":dt_nasc", $this->model->getDtNasc());
            $sql->bindValue(":dt_matricula", $this->model->getDtMatricula());
            $sql->bindValue(":ct_id", $this->model->getContactId());
            $sql->bindValue(":orgExp", $this->model->getOrgaoExpedidor());
            $sql->bindValue(":situacao", $this->model->getSituacaoAluno());
            $sql->bindValue(":estadoCivil", $this->model->getEstadoCivil());

            $sql->execute();
            $this->MySql->commit();
            print 1;
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }

    public function update(){
        $this->query = $this->readQuery("updateAlunos");
        $this->MySql->beginTransaction();
        try{
            $sql = $this->MySql->prepare($this->query);

            $sql->bindValue(":id", $this->model->getId());
            $sql->bindValue(":nome_aluno", $this->model->getNomeAluno());
            $sql->bindValue(":nome_mae", $this->model->getNomeMae());
            $sql->bindValue(":nome_pai", $this->model->getNomePai());
            $sql->bindValue(":cpf_aluno", $this->model->getCpfAluno());
            $sql->bindValue(":cpf_mae", $this->model->getCpfMae());
            $sql->bindValue(":cpf_pai", $this->model->getCpfPai());
            $sql->bindValue(":rg_aluno", $this->model->getRgAluno());
            $sql->bindValue(":rg_mae", $this->model->getRgMae());
            $sql->bindValue(":rg_pai", $this->model->getRgPai());
            $sql->bindValue(":cert_nasc", $this->model->getCertNasc());
            $sql->bindValue(":pcd", $this->model->getPcd());
            $sql->bindValue(":naturalidade", $this->model->getNaturalidade());
            $sql->bindValue(":nacionalidade", $this->model->getNacionalidade());
            $sql->bindValue(":obs", $this->model->getObs());
            $sql->bindValue(":turma_id", $this->model->getTurmaId());
            $sql->bindValue(":dt_nasc", $this->model->getDtNasc());
            $sql->bindValue(":orgExp", $this->model->getOrgaoExpedidor());
            $sql->bindValue(":situacao", $this->model->getSituacaoAluno());
            $sql->bindValue(":estadoCivil", $this->model->getEstadoCivil());

            $sql->execute();
            $this->MySql->commit();
            print 1;
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }

    public function show(){
        $this->query = $this->readQuery("selectAlunos");
        try{
            $sql = $this->MySql->query($this->query);
            print json_encode($sql->fetchAll());
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
    
}

?>