UPDATE
  cargo
SET
  ca_nome = :ca_nome,
  ca_salario = :ca_salario,
  ca_turno = :ca_turno
WHERE
  ca_id = :ca_id