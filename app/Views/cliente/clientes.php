<?= $this->extend('layout/main.php') ?>
<?= $this->section('content') ?>
	<h3>Cadastro de clientes</h3>

	<hr>
	<div class="row">
		<div class="col">
			<div class="table">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nome do cliente</th>
							<th>Email</th>
							<th>CPNJ</th>
							<th><i class="fa fa-cog"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($clientes as $cliente): ?>
							<tr>
								<td><?= $cliente['id'] ?> </td>
								<td><?= $cliente['nome_cliente'] ?> </td>
								<td><?= $cliente['email'] ?> </td>
								<td><?= $cliente['cpnj'] ?> </td>
								<td>
									<a href="<?=site_url('cliente/edit')?>/<?=$cliente['id']?>">
										<i class="mr-2 fa fa-edit text-primary"></i>
									</a>
									<a href="<?=site_url('cliente/destroy')?>/<?=$cliente['id']?>">
										<i class="mr-2 fa fa-trash text-danger"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
	
<?= $this->endSection() ?>