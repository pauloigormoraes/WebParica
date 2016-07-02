
<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><b>Atualizar dados do aluno</b></li>
	</ol>
</div>

	<div id="content">
		<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
			<li class="active"><a href="#dadospessoais" data-toggle="tab">Dados Pessoais</a></li>
			<li><a href="#end" data-toggle="tab">Endereço</a></li>
			<li><a href="#turma" data-toggle="tab">Turma</a></li>
			<li><a href="#boletim" data-toggle="tab">Boletim</a></li>
		</ul>


		<div id="my-tab-content" class="tab-content">
			<div class="tab-pane active" id="dadospessoais">
				<form id="dadospessoais" onsubmit="return false">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">Dados do Aluno</div>
							<div class="panel-body">
								<div class="col-md-12">
									<div class="form-group col-md-6">
										<label>Nome do aluno</label>
										<input name="nome_aluno" class="form-control" type="text" placeholder="Nome completo sem abreviações" required>
									</div>

									<div class="form-group col-md-3">
										<label>Naturalidade</label>
										<input name="naturalidade" class="form-control" type="text" placeholder="Cidade de Nascimento" required>
									</div>

									<div class="form-group col-md-3">
										<label>Nacionalidade</label>
										<input name="nacionalidade" class="form-control" type="text" placeholder="País de Nascimento" required>
									</div>

									<div class="form-group col-md-3">
										<label>CPF</label>
										<input name="cpf_aluno"  class="form-control" type="number" placeholder="Somente números" required>
									</div>

									<div class="form-group col-md-3">
										<label>RG</label>
										<input name="rg_aluno" class="form-control" type="number" placeholder="Somente números" required>
									</div>

									<div class="form-group col-md-3">
										<label>Orgão Expedidor</label>
										<input name="orgExp" class="form-control" type="text" placeholder="Somente a sigla" required>
									</div>

									<div class="form-group col-md-3">
										<label>Data de Nascimento</label>
										<input name="dt_nasc" class="form-control" type="date" required>
									</div>

									<div class="form-group col-md-4">
										<label>Estado Civil</label>
										<select name="estadoCivil" class="form-control" required>
											<option value="" disabled selected>Selecione</option>
											<option value="0">Solteiro</option>
											<option value="1">Casado</option>
											<option value="2">Divorciado</option>
											<option value="3">Viúvo</option>
											<option value="4">Estável</option>
										</select>
									</div>

									<div class="form-group col-md-6">
										<label>Certidão de Nascimento</label>
										<input name="cert_nasc" class="form-control" type="number" placeholder="Somente números" required>
									</div>

									<div class="form-group col-md-2">
										<label>PcD</label>
										<select name="pcd" class="form-control" required>
											<option value="" disabled selected>Selecione</option>
											<option value="0">Sim</option>
											<option value="1">Não</option>
										</select>
									</div>

								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">Dados da Mãe</div>
							<div class="panel-body">
								<div class="col-md-12">
									<div class="form-group col-md-4">
										<label>Nome</label>
										<input name="nome_mae" class="form-control" type="text" required>
									</div>

									<div class="form-group col-md-4">
										<label>CPF</label>
										<input name="cpf_mae" class="form-control" type="number" placeholder="Somente números" required>
									</div>

									<div class="form-group col-md-4">
										<label>RG</label>
										<input name="rg_mae" class="form-control" type="number" placeholder="Somente números" required>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">Dados do Pai</div>
							<div class="panel-body">
								<div class="col-md-12">
									<div class="form-group col-md-4">
										<label>Nome</label>
										<input name="nome_pai" class="form-control" type="text" required>
									</div>

									<div class="form-group col-md-4">
										<label>CPF</label>
										<input name="cpf_pai" class="form-control" type="number" placeholder="Somente números" required>
									</div>

									<div class="form-group col-md-4">
										<label>RG</label>
										<input name="rg_pai" class="form-control" type="number" placeholder="Somente números" required>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default col-md-12">
							<div class="panel-body">
								<button type="submit" style="float: right;" class=" btn btn-primary glyphicon glyphicon-ok-circle"><b class="fonte">   SALVAR</b></button>
							</div>
						</div>

					</div>
				</form>
			</div>

			<div class="tab-pane" id="end">
				<div class="panel panel-default">
					<div class="panel-heading">Endereço</div>
					<div class="panel-body">
						<div class="col-md-12">
							<div class="form-group col-md-7">
								<label>Rua</label>
								<input name="lagradouro" class="form-control" type="text" required>
							</div>

							<div class="form-group col-md-2">
								<label>Número</label>
								<input name="numero" class="form-control" type="number" required>
							</div>

							<div class="form-group col-md-3">
								<label>Bairro</label>
								<input name="bairro" class="form-control" type="text" required>
							</div>

							<div class="form-group col-md-3">
								<label>Cidade</label>
								<input name="cidade" class="form-control" type="text" required>
							</div>

							<div class="form-group col-md-3">
								<label>Estado</label>
								<select name="estado" class="form-control" required>
									<option value="" disabled selected>Selecione</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>

							<div class="form-group col-md-3">
								<label>Telefone 1</label>
								<input name="tel_1" class="form-control" type="tel" required>
							</div>

							<div class="form-group col-md-3">
								<label>Telefone 2</label>
								<input name="tel_2" class="form-control" type="tel">
							</div>

							<div class="form-group col-md-8">
								<label>E-mail</label>
								<input name="email" class="form-control" type="email">
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default col-md-12">
					<div class="panel-body">
						<button type="submit" style="float: right;" class="btn btn-primary glyphicon glyphicon-ok-circle"><b class="fonte">   SALVAR</b></button>
					</div>
				</div>
			</div>


			<div class="tab-pane" id="turma">
				<div class="panel panel-default">
					<div class="panel-heading">Turma</div>
					<div class="panel-body">
						<div class="form-group col-md-12">
							<label>Turma</label>
							<select name="estado" class="form-control" required>
								<option value="" disabled selected>Selecione</option>
							</select>
						</div>
						</div>
				</div>
				<div class="panel panel-default col-md-12">
					<div class="panel-body">
						<button type="submit" style="float: right;" class="btn btn-primary glyphicon glyphicon-ok-circle"><b class="fonte">   SALVAR</b></button>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="boletim">
				<div class="panel panel-default">
					<div class="panel-heading">Boletim</div>
					<div class="panel-body">
						<label>Matéria 1</label>
						<div class="form-group col-md-3">
							<input name="numero" class="form-control" type="number" required>
						</div>
						<div class="form-group col-md-3">
							<input name="numero" class="form-control" type="number" required>
						</div>
					</div>
				</div>
				<div class="panel panel-default col-md-12">
					<div class="panel-body">
						<button type="submit" style="float: right;" class="btn btn-primary glyphicon glyphicon-ok-circle"><b class="fonte">   SALVAR</b></button>
					</div>
				</div>
			</div>

		</div>


	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('#tabs').tab();
		});
	</script>

