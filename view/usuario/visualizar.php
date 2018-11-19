<?php 
require_once('../../functions/usuario.php');
view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<main style="background-color:#fff!important;height: 100%" >
	<main class="container">
		<header class="header">
			<h1>Usuário <?php echo $usuario['login']; ?></h1>
			<br>
		</header>
		<hr>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
		<?php endif; ?>

		<div class="col-md-4" style="float: left; margin-bottom: 1em ;">
			<dl class="dl-horizontal">
				<b>Login:</b><?php echo $usuario['login']; ?><br>

				<b>Nome:</b>
				<?php echo $usuario['nome']; ?><br>

				<b>CPF:</b>
				<?php echo $usuario['cpf']; ?><br>

				<b>Data de Nascimento:</b>
				<?php 
					$data = strtotime($usuario['dt_nascimento']);
					$data = date("d-m-Y", $data);	
					echo $data; ?><br>

				<b>Telefone:</b>
				<?php echo $usuario['telefone']; ?><br>

				<b>Função:</b>
				<?php switch ($usuario['tipo_user']) {
					case 1:
					echo "Motorista";
					break;
					case 2:
					echo "Auxiliar";
					break;
				}; ?><br>
				<?php if ($usuario['tipo_user'] == 1) {?>
					<b>Telefone:</b>
					<?php echo $usuario['obs']; ?><br>
				<?php }else{ ?>
					<b>Email:</b>
					<?php echo $usuario['n_carteira']; ?><br>
				<?php } ?>

			</dl>
		</div>
		
		<div class="col-md-5" style="float: left; margin-bottom: 1em ;">
			<div id="actions" class="row">
				<div class="col-md-12">
					<a href="editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary">Editar</a>
					<a href="index.php" class="btn btn-default">Voltar</a>
				</div>
			</div>
		</div>
	</main>
	<?php include(FOOTER_TEMPLATE); ?>