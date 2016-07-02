<?php

include "../model/dao/connect.php";
include "../model/dao/db_contato.php";
include "../model/dao/db_aluno.php";
include "../model/dao/db_cargo.php";
include "../model/dao/db_colaborador.php";
include "../model/dao/db_turma.php";
include "../model/dao/db_materia.php";

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

    protected function listarUltimoContato(){
        $db = new db_contato();
        return $db->showLastOne();
    }

    protected function cadastrarAlunos(){
        
        $dados = $this->json;
        $db = new db_aluno();
        $model = $db->model;

        $this->cadastrarContato();

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
        $model->setContactId($this->listarUltimoContato());
        $model->setOrgaoExpedidor($dados->orgExp);
        $model->setSituacaoAluno($dados->situacao);
        $model->setEstadoCivil($dados->estadoCivil);

        $db->insert();
    }
    
    protected function atualizarAlunos(){}
    
    protected function listarAlunos(){
        $db = new db_aluno();
        header('Content-Type: application/json');
        $db->show();
    }

    protected function cadastrarCargo(){
        $dados = $this->json;
        $db = new db_cargo();
        $model = $db->model;

        $model->setNome($dados->cargo_nome);
        $model->setSalario($dados->cargo_salario);
        $model->setTurno($dados->cargo_turno);

        $db->insert();
    }

    protected function atualizarCargo(){
        $dados = $this->json;
        $db = new db_cargo();
        $model = $db->model;

        $model->setId($dados->id);
        $model->setNome($dados->cargo_nome);
        $model->setSalario($dados->cargo_salario);
        $model->setTurno($dados->cargo_turno);

        $db->update();
    }    

    protected function listarCargo(){
        $db = new db_cargo();
        header('Content-Type: application/json');
        $db->show();
    }

    protected function listarTurma(){
        $db = new db_turma();
        header('Content-Type: application/json');
        $db->show();
    }

    protected function cadastrarTurma(){
        $dados = $this->json;
        $db = new db_turma();
        $model = $db->model;

        $model->setNome($dados->turma_nome);
        $model->setTurno($dados->turma_turno);
        $model->setAno($dados->turma_ano);

        $db->insert();
    }

    protected function atualizarTurma(){
        $dados = $this->json;
        $db = new db_turma();
        $model = $db->model;

        $model->setId($dados->id);
        $model->setNome($dados->turma_nome);
        $model->setTurno($dados->turma_turno);
        $model->setAno($dados->turma_ano);

        $db->update();
    }

    protected function cadastrarColaborador(){
        $dados = $this->json;
        $db = new db_colaborador();
        $model = $db->model;

        $model->setNome($dados->nome);
        $model->setCpf($dados->cpf);
        $model->setRg($dados->rg);
        $model->setCargoId($dados->cargo_id);

        $db->insert();
    }

    protected function atualizarColaborador(){
        $dados = $this->json;
        $db = new db_colaborador();
        $model = $db->model;

        $model->setId($dados->id);
        $model->setNome($dados->nome);
        $model->setCpf($dados->cpf);
        $model->setRg($dados->rg);
        $model->setCargoId($dados->cargo_id);

        $db->update();
    }
    
    protected function listarColaborador(){
        $db = new db_colaborador();
        header('Content-Type: application/json');
        $db->show();
    }

    protected function cadastrarMateria(){
        $dados = $this->json;
        $db = new db_materia();
        $model = $db->model;

        $model->setNome($dados->cargo_nome);
        $model->setSalario($dados->cargo_salario);
        $model->setTurno($dados->cargo_turno);

        $db->insert();
    }    
    
}

?>