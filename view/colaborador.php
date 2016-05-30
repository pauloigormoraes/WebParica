<div class="row">
	<ol class="breadcrumb">
		<li><a href="#home"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a></li>
		<li class="active">Colaborador</li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Colaborador</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastrar Colaborador</div>
			<div class="panel-body">
				<div class="col-md-12">
					<form id="inserirColaborador" onsubmit="return false">
						<div class="form-group col-md-4">
							<label>Nome do Colaborador</label>
							<input name="nome" class="form-control" placeholder="Nome Completo" type="text" required>
						</div>

						<div class="form-group col-md-2">
							<label>CPF</label>
							<input name="cpf" class="form-control" type="number" placeholder="Apenas números" required>
						</div>

						<div class="form-group col-md-2">
							<label>RG</label>
							<input name="rg" class="form-control" type="number" placeholder="Apenas números" required>
						</div>

						<div class="form-group col-md-4">
							<label>Cargo</label>
							<select name="cargo_id" id="sl_cargo_n" class="form-control" >
								<option></option>
							</select>
						</div>

						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>