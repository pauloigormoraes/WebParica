<?php

include "../model/dao/connect.php";
include "../model/dao/db_contato.php";
include "../model/dao/db_aluno.php";

class ajax{
    protected $json;

    protected function cadastrarContato(){
        $dados = $this->json;
        $db = new db_contato();
        $model = $db->model;

        $model->setLagradouro($dados->lagradouro);
        $model->setNumero($dados->numero);
        $model->setBairro($dados->bairro);
        $model->setCidade($dados->cidade);
        $model->setEstado($dados->estado);
        $model->setEmail($dados->email);
        $model->setTel1($dados->tel_1);
        $model->setTel2($dados->tel_2);

        $db->insert();
    }

    protected function cadastrarAlunos(){
        
        $dados = $this->json;
        $db = new db_aluno();
        $model = $db->model;

        $model->setNomeAluno($dados->nome_aluno);
        $model->setNomeMae($dados->nome_mae);
        $model->setNomePai($dados->nome_pai);
        $model->setCpfAluno($dados->cpf_aluno);
        $model->setCpfMae($dados->cpf_mae);
        $model->setCpfPai($dados->cpf_pai);
        $model->setRgAluno($dados->rg_aluno);
        $model->setRgMae($dados->rg_mae);
        $model->setRgPai($dados->rg_pai);
        $model->setCertNasc($dados->cert_nasc);
        $model->setPcd($dados->pcd);
        $model->setNaturalidade($dados->naturalidade);
        $model->setNacionalidade($dados->nacionalidade);
        $model->setObs($dados->obs);
        $model->setDtNasc($dados->dt_nasc);
        $model->setDtMatricula(date("Y-m-d H:i:s"));
        //$model->setContactId($dados->ct_id);
        $model->setOrgaoExpedidor($dados->orgExp);
        $model->setSituacaoAluno($dados->situacao);
        $model->setEstadoCivil($dados->estadoCivil);

        print $db->insert();
    }

    protected function buscarAluno() {

    }
}

?>