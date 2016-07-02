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

						<input name="id" type="hidden" value="0">

						<div class="form-group col-md-4">
							<label>Disciplina</label>
							<input name="ma_nome" class="form-control" type="text">
						</div>

						<div class="form-group col-md-4">
							<label>Professor</label>
							<select name="ma_co_id" class="form-control">
							</select>
						</div>

						<div class="form-group col-md-4">
							<label>Turma</label>
							<select name="ma_tu_id" class="form-control">
							</select>
						</div>

						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</form>
				</div>

			</div>
		</div>

	</div>
</div>