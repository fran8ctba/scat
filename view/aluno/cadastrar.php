
<?php 
require_once('../../functions/aluno.php');
add();
?>
<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript">
	var dayGroup = new CheckBoxGroup();
	dayGroup.addToGroup("day");
	dayGroup.setControlBox("alldays");
	dayGroup.setMasterBehavior("all");
</script>

<main style="background-color:#eabc13!important;height: 100%" >
	<form action="cadastrar.php" method="post">
		<div align="center">
			<div class="register">
				<div class="row" style="width: 80%;">
					<div class="col-md-3 register-left cad-aluno" style="text-align: center; margin-top: 10em">
						<i class="fas fa-user-graduate" style=" font-size: 7em;"></i>
						<h3>Cadastro de Aluno</h3>
						<p>Insira os dados dos alunos aqui!</p>
						<div id="actions" class="row">
							<div class="col-md-12">	
								<button type="submit" class="btn btn-primary">Salvar</button>
								<a href="index.php" class="btn btn-default">Cancelar</a>
							</div>
						</div>
					</div>
					<div class="col-md-9 register-right" style="margin-top: 5em">
						<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados do Aluno</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contato</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<h3 class="register-heading" style="margin: 1.5em 0">Todos os campos são obrigarórios</h3>
								<div class="row register-form">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required="required" placeholder="Nome *" name="aluno['nome']" />
										</div>
										<div class="form-group">
											<input type="text" class="form-control" required="required" placeholder="Rg *" name="aluno['rg']" />
										</div>
										<div class="form-group">
											<input type="date" class="form-control" required="required" placeholder="Data de Nascimento *" name="aluno['dt_nascimento']" />
										</div>
										<div class="form-group">
											<div class="maxl" style="text-align: left; float: left;">
												<div style="width: 100%">Sexo:</div>

												<div class="custom-control custom-radio" style="width: 45%; float: left; margin-right: 10%;">
													<input type="radio" class="custom-control-input" id="defaultUnchecked" name="aluno['sexo']" value="1">
													<label class="custom-control-label" for="defaultUnchecked">Masculino</label>
												</div>

												<div class="custom-control custom-radio" style="width: 45%; float: left; ">
													<input type="radio" class="custom-control-input" id="defaultChecked" name="aluno['sexo']" value="2" checked>
													<label class="custom-control-label" for="defaultChecked">Feminino</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" required="required"   placeholder="Nome do Responsavel *" name="aluno['nome_responsavel']" />
										</div>									

										<div class="form-group">
											<input type="number" class="form-control" required="required" placeholder="CPF *" name="aluno['cpf']" />
										</div>
										<div class="form-group">
											<input type="number" class="form-control" required="required" placeholder="Telefone *" name="aluno['telefone']" />
										</div>
										<div class="form-group">
											<input type="email" class="form-control"required="required"  placeholder="Email *" name="aluno['email']" />
										</div>

									</div>
								</div>
							</div>
							<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<h3 class="register-heading" style="margin: 1.5em 0">Todos os campos são obrigarórios</h3>
								<div class="row register-form">
									<div class="col-md-6">

										<div class="form-group">
											<input type="number" id="cep" class="form-control" required="required" placeholder="CEP  *" name="aluno['cep']" />
										</div>	
										<div class="form-group">
											<input type="text" id="rua" class="form-control" required="required" placeholder="Rua  *" name="aluno['rua']" />
										</div>
										<div class="form-group" style="width: 47%; float: left; margin-right: 6%;">
											<input type="text" id="bairro" class="form-control" required="required" placeholder="Bairro *" name="aluno['bairro']" />
										</div>
										<div class="form-group" style="width: 47%;float: left;">
											<input type="text" id="cidade" class="form-control" required="required" placeholder="Cidade *" name="aluno['cidade']" />
										</div>
										<div class="form-group" style="width: 47%; float: left; margin-right: 6%;">
											<input type="text" id="estado" class="form-control" required="required" placeholder="Estado *" name="aluno['estado']" />
										</div>
										<div class="form-group" style="width: 47%;float: left;">
											<input type="number" id="estado" class="form-control"required="required"  placeholder="Número *" name="aluno['numero']" />
										</div>


									</div>
									<div class="col-md-6">

										<div class="form-group" >
											<select class="form-control" required="required" name="aluno['colegio']" >
												<option class="hidden" selected disabled>Selecione Colégio </option>
												<option value="1">Pedro Macedo</option>
												<option value="2">Dom Orione</option>
												<option value="3">Adriano Robino</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control" required="required" name="aluno['turno']" >
												<option class="hidden"  selected disabled>Selecione Turno </option>
												<option value="1">Matutino</option>
												<option value="2">Vespertino</option>											
												<option value="3">Integral</option>											
												<option value="4">Noturno</option>
											</select>
										</div>
										<div class="form-group ">
											Dias da semana:
											<div class="group-dias-semana">
												<!-- Default inline 1-->
												<div class="custom-control custom-checkbox custom-control-inline">
													<input type="checkbox" class="custom-control-input" id="defaultInline2">
													<label class="custom-control-label" for="defaultInline2">seg</label>
												</div>

												<div class="custom-control custom-checkbox custom-control-inline">
													<input type="checkbox" class="custom-control-input" id="defaultInline3">
													<label class="custom-control-label" for="defaultInline3">ter</label>
												</div>
												<div class="custom-control custom-checkbox custom-control-inline">
													<input type="checkbox" class="custom-control-input" id="defaultInline4">
													<label class="custom-control-label" for="defaultInline4">qua</label>
												</div>
												<div class="custom-control custom-checkbox custom-control-inline">
													<input type="checkbox" class="custom-control-input" id="defaultInline5">
													<label class="custom-control-label" for="defaultInline5">qui</label>
												</div>
												<div class="custom-control custom-checkbox custom-control-inline">
													<input type="checkbox" class="custom-control-input" id="defaultInline6">
													<label class="custom-control-label" for="defaultInline6">sex</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<?php include(FOOTER_TEMPLATE); ?>