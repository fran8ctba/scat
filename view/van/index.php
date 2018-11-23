<?php
$aindex = 2;
require_once('../../functions/van.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<main style="background-color:#fff!important;height: 100%" >
	<main class="container">
		<header class="header">
			<div class="row">
				<div class="col-sm-6">
					<h2>Vans</h2>
				</div>
				<div class="col-sm-6 text-right h2">
					<a class="btn btn-primary" href="cadastrar.php"><i class="fa fa-plus"></i> Nova van</a>
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
					<th>ID</th>
					<th >Placa</th>
					<th>Bancos</th>
					<th>Auxiliar</th>
					<th>Motorista</th>
					<th style="text-align: center;">Opções</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($vans) : ?>
					<?php foreach ($vans as $van) : ?>
						<tr>
							<td><?php echo $van['id']; ?></td>
							<td><?php echo $van['placa']; ?></td>
							<td><?php echo $van['n_bancos']; ?></td>
							<td><?php nome($van['id_auxiliar']); 

							if ($van['id_auxiliar'] == 0 || $van['id_auxiliar'] == null) {
								echo 'Não cadastrado';
				 			}else{
								echo  $result['nome'];	
							}
							?></td>
							<td><?php nome($van['id_motorista']); 

							if ($van['id_motorista'] == 0 || $van['id_motorista'] == null) {
								echo 'Não cadastrado';
							}else{
								echo $result['nome'];	
							}?></td>
							<td class="actions text-right">
								<a href="visualizar.php?id=<?php echo $van['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
								<a href="editar.php?id=<?php echo $van['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
								<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-id="<?php echo $van['id']; ?>">
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
							<a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
						</div>
					</div>
				</div>
			</div> <!-- /.modal -->

		</main>



		<?php include(FOOTER_TEMPLATE); ?>



