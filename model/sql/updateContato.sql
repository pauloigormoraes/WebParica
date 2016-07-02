UPDATE
	contato
SET
	ct_lagradouro = :lagradouro,
	ct_numero = :numero,
	ct_bairro = :bairro,
	ct_cidade = :cidade,
	ct_estado = :estado,
	ct_email = :email,
	ct_tel_1 = :tel_1,
	ct_tel_2 = :tel_2
WHERE
	ct_id = :id