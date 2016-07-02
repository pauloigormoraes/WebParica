<?php

include "../model/dao/connect.php";
include "../model/dao/db_contato.php";
include "../model/dao/db_aluno.php";
include "../model/dao/db_cargo.php";
include "../model/dao/db_colaborador.php";
include "../model/dao/db_turma.php";
include "../model/dao/db_materia.php";
include "../model/dao/db_boletim.php";

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

    protected function atualizarContato(){
        $dados = $this->json;
        $db = new db_contato();
        $model = $db->model;

        $model->setId($dados->id_ct);
        $model->setLagradouro($dados->lagradouro);
        $model->setNumero($dados->numero);
        $model->setBairro($dados->bairro);
        $model->setCidade($dados->cidade);
        $model->setEstado($dados->estado);
        $model->setEmail($dados->email);
        $model->setTel1($dados->tel_1);
        $model->setTel2($dados->tel_2);

        $db->update();
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
    
    protected function atualizarAlunos(){
        $dados = $this->json;
        $db = new db_aluno();
        $model = $db->model;

        $model->setId($dados->id_al);
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
        $model->setTurmaId($dados->turma_id);
        $model->setDtNasc($dados->dt_nasc);
        $model->setOrgaoExpedidor($dados->orgExp);
        $model->setSituacaoAluno($dados->situacao);
        $model->setEstadoCivil($dados->estadoCivil);

        $db->update();
    }
    
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

        $model->setNome($dados->ma_nome);
        $model->setTurmaId($dados->ma_tu_id);
        $model->setColaboradorId($dados->ma_co_id);

        $db->insert();
    }

    protected function listarMateria(){
        $db = new db_materia();
        header('Content-Type: application/json');
        $db->show();
    }

    protected function atualizarMateria(){
        $dados = $this->json;
        $db = new db_materia();
        $model = $db->model;

        $model->setId($dados->id);
        $model->setNome($dados->ma_nome);
        $model->setTurmaId($dados->ma_tu_id);
        $model->setColaboradorId($dados->ma_co_id);

        $db->update();
    }

    protected function listarBoletim(){
        $dados = $this->json;
        $db = new db_boletim();
        $model = $db->model;

        $model->setAlunoId($dados->id);
        header('Content-Type: application/json');
        $db->listBy();
    }

    protected function cadastrarBoletim(){
        $dados = $this->json;
        $db = new db_boletim();
        $model = $db->model;

        $model->setMateriaId($dados->materia_id);
        $model->setAlunoId($dados->id_al);
        $model->setNotas($dados->n1, $dados->n2, $dados->n3, $dados->n4);
        $model->setFaltas($dados->f1, $dados->f2, $dados->f3, $dados->f4);

        $db->insert();
    }

    protected function atualizarBoletim(){
        $dados = $this->json;
        $db = new db_boletim();
        $model = $db->model;

        $model->setMateriaId($dados->materia_id);
        $model->setAlunoId($dados->id_al);
        $model->setNotas($dados->n1, $dados->n2, $dados->n3, $dados->n4);
        $model->setFaltas($dados->f1, $dados->f2, $dados->f3, $dados->f4);

        $db->update();
    }
    
}

?>