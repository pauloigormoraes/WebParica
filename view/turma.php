<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg></a></li>
		<li class="active">Nova Turma</li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Nova Turma</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastrar nova Turma</div>
			<div class="panel-body">
				<div class="col-md-12">
					<form id="inserirTurma" onsubmit="return false">
						<input type="hidden" value="0" name="id">

						<div class="form-group col-md-6">
							<label>Nome da turma</label>
							<input name="turma_nome" class="form-control" type="text">
						</div>

						<div class="form-group col-md-3">
							<label>Turno</label>
							<select name="turma_turno" class="form-control">
								<option value="" disabled selected>Selecione</option>
								<option value="0">Matutino</option>
								<option value="1">Vespertino</option>
								<option value="2">Noturno</option>
								<option value="3">Diúrno</option>
							</select>
						</div>

						<div class="form-group col-md-3">
							<label>Ano</label>
							<input name="turma_ano" class="form-control" type="number">
						</div>

						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</form>
				</div>

			</div>
		</div>

	</div>
</div>