UPDATE
  colaborador
SET
  co_nome = :nome,
  co_cpf = :cpf,
  co_rg = :rg,
  cargo_ca_id = :cargo_id
WHERE
  co_id = :id