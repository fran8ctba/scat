<?php 
require_once('../../functions/aluno.php');
view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<main style="background-color:#fff!important;height: 100%" >
	<main class="container">
		<header class="header">
			<h1>Cliente <?php echo $aluno['id']; ?></h1>
			<br>
		</header>
		<hr>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
		<?php endif; ?>

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
	</main>
	<?php include(FOOTER_TEMPLATE); ?>