<?php 
$aindex = 2;
require_once('../../functions/van.php');
view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<main style="background-color:#fff!important;height: 100%" >
	<main class="container">
		<header class="header">
			<h1>Van <?php echo $van['placa']; ?></h1>
			<br>
		</header>
		<hr>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
		<?php endif; ?>

		<div class="col-md-4" style="float: left; margin-bottom: 1em ;">
			<dl class="dl-horizontal">
				<b>Placa:</b><?php echo $van['placa']; ?><br>
				<b>Chassi:</b><?php echo $van['chassi']; ?><br>
				<b>Nº de Bancos:</b><?php echo $van['n_bancos']; ?><br>
				<b>Auxiliar:</b><?php nome($van['id_auxiliar']); 
				if ($van['id_auxiliar'] == 0 || $van['id_auxiliar'] == null) {
					echo 'Não cadastrado';
				}else{
					echo $result['nome'];	
				}
				?><br>

				<b>Motorista:</b><?php nome($van['id_motorista']); 
				if ($van['id_motorista'] == 0 || $van['id_motorista'] == null) {
					echo 'Não cadastrado';
				}else{
					echo $result['nome'];	
				}
				?><br>
			</dl>
		</div>
		
		<div class="col-md-5" style="float: left; margin-bottom: 1em ;">
			<div id="actions" class="row">
				<div class="col-md-12">
					<a href="editar.php?id=<?php echo $van['id']; ?>" class="btn btn-primary">Editar</a>
					<a href="index.php" class="btn btn-default">Voltar</a>
				</div>
			</div>
		</div>
	</main>
	<?php include(FOOTER_TEMPLATE); ?>