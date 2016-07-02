UPDATE 
	aluno
SET
	al_nome_aluno = :nome_aluno,
	al_nome_mae = :nome_mae,
	al_nome_pai = :nome_pai,
	al_cpf_aluno = :cpf_aluno,
	al_cpf_mae = :cpf_mae,
	al_cpf_pai = :cpf_pai,
	al_rg_aluno = :rg_aluno,
	al_rg_mae = :rg_mae,
	al_rg_pai = :rg_pai,
	al_cert_nasc = :cert_nasc,
	al_pcd = :pcd,
	al_naturalidade = :naturalidade,
	al_nacionalidade = :nacionalidade,
	al_obs = :obs,
	al_dt_nasc = :dt_nasc,
	al_orgExp = :orgExp,
	al_situacao = :situacao,
	al_estadoCivil = :estadoCivil
WHERE
	al_id = :id
