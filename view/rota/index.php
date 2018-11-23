	
<?php 
require_once('../../functions/rota.php'); ?>

<?php include(HEADER_TEMPLATE); ?>
<main style="background-color:#1d9f69!important;height: 100%" >
	<main class="container">
		<header class="header">
			<h1>Rotas <?php echo $_SESSION['login']; ?></h1>
			<br>
		</header>
		<hr>
		

		<table class="table table-hover" style="width: 23%; margin: 0 1%; float: left;">
			<thead>
				<tr>
					<th>Primeira</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Segunda</td>
				</tr>
			</tbody>
		</table>

		<table class="table table-hover" style="width: 23%; margin: 0 1%; float: left;">
			<thead>
				<tr>
					<th>Segunda</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Segunda</td>
				</tr>
				<tr>
					<td>Segunda</td>
				</tr>
				<tr>
					<td>Segunda</td>
				</tr>
				<tr>
					<td>Segunda</td>
				</tr>
			</tbody>
		</table>

		<table class="table table-hover"style="width: 23%; margin: 0 1%; float: left;">
			<thead>
				<tr>
					<th>Terceira</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Segunda</td>
				</tr>
			</tbody>
		</table>

		<table class="table table-hover"style="width: 23%; margin: 0 1%; float: left;">
			<thead>
					<th>Quarta</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Segunda</td>
				</tr>
			</tbody>
		</table>


	</main>
	<?php include(FOOTER_TEMPLATE); ?>