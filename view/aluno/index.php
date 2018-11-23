<?php
require_once('../../functions/aluno.php');
index();
?>

<!-- turnos
1 matutino
2 vespertino 
3 integral
4 noturno
-->
<?php include(HEADER_TEMPLATE); ?>

<main style="background-color:#fff!important;height: 100%" >
	<main class="container">
		<header class="header">
			<div class="row">
				<div class="col-sm-6">
					<h2>Alunos</h2>
				</div>
				<div class="col-sm-6 text-right h2">
					<a class="btn btn-primary" href="cadastrar.php"><i class="fa fa-plus"></i> Novo aluno</a>
					<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
				</div>
			</div>
		</header>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $_SESSION['message']; ?>
			</div>
			<?php clear_messages(); ?>
		<?php endif; ?>

		<hr>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Colégio</th>
					<th>Turno</th>
					<th>Responsável</th>
					<th style="text-align: center;">Opções</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($alunos) : ?>
					<?php foreach ($alunos as $aluno) : ?>
						<tr>
							<td><?php echo $aluno['nome']; ?></td>		
							<td><?php 	
							switch ($aluno['colegio']) {
								case 1:
								echo "Pedro Macedo";
								break;
								case 2:
								echo "Dom Orione";
								break;
								case 3:
								echo "Adriano Robino";
								break;
							};
							?></td>
							<td><?php 
							switch ($aluno['turno']) {
								case 1:
								echo "Matutino";
								break;
								case 2:
								echo "Vespertino";
								break;
								case 3:
								echo "Integral";
								break;
								case 4:
								echo "Noturno";
								break;
							};?></td>
							<td><?php echo $aluno['nome_responsavel']; ?></td>
							<td class="actions text-right">
								<a href="visualizar.php?id=<?php echo $aluno['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
								<a href="editar.php?id=<?php echo $aluno['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
								<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-id="<?php echo $aluno['id'];?>">
									<i class="fa fa-trash"></i> Excluir
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
					<?php else : ?>
						<tr>
							<td colspan="6">Nenhum registro encontrado.</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>



			<!-- Modal de Delete-->
			<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="modalLabel">Excluir Item</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							Deseja realmente excluir este item?
						</div>
						<div class="modal-footer">
							<a id="confirm" class="btn btn-primary" href="#">Sim</a>
							<a id="cancel" class="btn btn-default" data-dismiss="modal">Não</a>
						</div>
					</div>
				</div>
			</div> <!-- /.modal -->

			<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="modalLabel">Cliente <?php echo $aluno['id']; ?></h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="col-md-4" style="float: left; margin-bottom: 1em ;">
								<dl class="dl-horizontal">
									<b>Nome</b> : <?php echo $aluno['nome']; ?>

									<b>RG:</b>
									<?php echo $aluno['rg']; ?><br>

									<b>Data de Nascimento:</b>
									<?php echo $aluno['dt_nascimento']; ?><br>

									<b>Sexo:</b>
									<?php echo $aluno['sexo']; ?><br>

									<b>Responsável:</b>
									<?php echo $aluno['nome_responsavel']; ?><br>

									<b>CPF:</b>
									<?php echo $aluno['cpf']; ?><br>

									<b>Telefone:</b>
									<?php echo $aluno['telefone']; ?><br>
									<b>Email:</b>
									<?php echo $aluno['email']; ?><br>

									<b>CEP:</b>
									<?php echo $aluno['cep']; ?><br>
								</dl>

							</div>
							<div class="col-md-4" style="float: left; margin-bottom: 1em ;">
								<dl class="dl-horizontal">

									<b>Rua:</b>
									<?php echo $aluno['rua']; ?><br>

									<b>Bairro:</b>
									<?php echo $aluno['bairro']; ?><br>

									<b>Cidade:</b>
									<?php echo $aluno['cidade']; ?><br>

									<b>Estado:</b>
									<?php echo $aluno['estado']; ?><br>

									<b>Nº:</b>
									<?php echo $aluno['numero']; ?><br>

									<b>Turno:</b>
									<?php switch ($aluno['turno']) {
										case 1:
										echo "Matutino";
										break;
										case 2:
										echo "Vespertino";
										break;
										case 3:
										echo "Integral";
										break;
										case 4:
										echo "Noturno";
										break;
									}; ?><br>

									<b>Colégio:</b>
									<?php switch ($aluno['turno']) {
										case 1:
										echo "Pedro Macedo";
										break;
										case 2:
										echo "Dom Orione";
										break;
										case 3:
										echo "Adriano Robino";
										break;
									}; ?><br>
								</dl>
							</div>

							<div class="col-md-5" style="float: left; margin-bottom: 1em ;">
								<div id="actions" class="row">
									<div class="col-md-12">
										<a href="editar.php?id=<?php echo $aluno['id']; ?>" class="btn btn-primary">Editar</a>
										<a href="index.php" class="btn btn-default">Voltar</a>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a id="confirm" class="btn btn-primary" href="#">Sim</a>
							<a id="cancel" class="btn btn-default" data-dismiss="modal">Não</a>
						</div>
					</div>
				</div>
			</div> <!-- /.modal -->
		</main>

		<?php include(FOOTER_TEMPLATE); ?>



