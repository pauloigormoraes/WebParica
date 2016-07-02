SELECT
	boletim.bo_id,
    turma.tu_id,
    aluno.al_id,
    materia.ma_id,
    turma.tu_nome,
    colaborador.co_nome,
    materia.ma_nome,
    boletim.bo_n1,
    boletim.bo_n2,
    boletim.bo_n3,
    boletim.bo_n4,
    boletim.bo_f1,
    boletim.bo_f2,
    boletim.bo_f3,
    boletim.bo_f4
FROM 
	materia 
	LEFT JOIN turma 
		ON materia.ma_tu_id = turma.tu_id 
	LEFT JOIN aluno
		ON turma.tu_id = aluno.al_tu_id
	LEFT JOIN colaborador
		ON colaborador.co_id = materia.ma_co_id
	LEFT JOIN boletim 
		ON materia.ma_id = boletim.bo_ma_id
WHERE
	aluno.al_id = :al_id;