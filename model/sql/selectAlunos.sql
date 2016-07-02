-- al_id, al_nome_aluno, al_nome_mae, al_nome_pai, al_cpf_aluno, al_cpf_mae, al_cpf_pai, al_rg_aluno, al_rg_mae, al_rg_pai, al_cert_nasc, al_pcd, al_naturalidade, al_nacionalidade, al_obs, al_img_aluno, al_dt_nasc, al_dt_matricula, al_ct_id, al_orgExp, al_situacao, al_estadoCivil, ct_id, ct_lagradouro, ct_numero, ct_bairro, ct_cidade, ct_estado, ct_email, ct_tel_1, ct_tel_2, tu_id, tu_nome, tu_turno, tu_ano

SELECT 
    aluno.*, contato.*, turma.*
FROM
    aluno
        LEFT JOIN
    contato ON aluno.al_ct_id = ct_id
        LEFT JOIN
    turma ON turma.tu_id = (SELECT 
            aluno_turma.at_tu_id
        FROM
            aluno_turma
        WHERE
            aluno_turma.at_al_id = aluno.al_id);