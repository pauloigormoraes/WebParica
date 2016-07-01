SELECT
  colaborador.co_id,
  colaborador.co_nome,
  colaborador.co_cpf,
  colaborador.co_rg,
  colaborador.cargo_ca_id,
  cargo.ca_nome,
  cargo.ca_salario,
  cargo.ca_turno
FROM
  colaborador
  INNER JOIN
    cargo
    ON
      colaborador.cargo_ca_id = cargo.ca_id
ORDER BY
  colaborador.co_id