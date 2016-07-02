<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg></a></li>
		<li class="active">Nova Matéria</li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Nova Matéria</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Nova Matéria</div>
			<div class="panel-body">
				<div class="col-md-12">
					<form id="inserirMateria" onsubmit="return false">

						<div class="form-group col-md-4">
							<label>Disciplina</label>
							<input name="ma_nome" class="form-control" type="text">
						</div>

						<div class="form-group col-md-4">
							<label>Salário</label>
							<input name="cargo_salario" class="form-control" type="text">
						</div>

						<div class="form-group col-md-4">
							<label>Turno</label>
							<select name="cargo_turno" class="form-control">
								<option value="" disabled selected>Selecione</option>
								<option value="0">Matutino</option>
								<option value="1">Vespertino</option>
								<option value="2">Noturno</option>
								<option value="3">Diúrno</option>
							</select>
						</div>

						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</form>
				</div>

			</div>
		</div>

	</div>
</div>