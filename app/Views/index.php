<?= $this->extend('layout/main.php') ?>
<?= $this->section('content') ?>
	<h3>Bem vindo ao sistema</h3>

	<hr>

	<h5>Clientes cadastros</h5>

	<div class="table">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome do cliente</th>
					<th>Email</th>
					<th>CPNJ</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($clientes as $cliente): ?>
					<tr>
						<td><?= $cliente['id'] ?> </td>
						<td><?= $cliente['nome_cliente'] ?> </td>
						<td><?= $cliente['email'] ?> </td>
						<td><?= $cliente['cpnj'] ?> </td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<a href="<?=site_url('cliente/view')?>">ver todos</a>
	</div>
<?= $this->endSection() ?>