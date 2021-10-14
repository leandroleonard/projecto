<?= $this->extend('layout/main.php') ?>
<?= $this->section('content') ?>
	<h3>Cadastro de clientes</h3>

	<hr>
	<div class="row">
		<div class="col-md-6">
			<form action="<?=site_url('cliente/store')?>" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="nome_cliente">Nome: </label>
							<input type="text" maxlength="75" name="cliente" id="nome_cliente" required class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="cpnj">CPNJ:</label>
							<input type="text" name="cpnj" id="cpnj" required maxlength="14" minlength="14" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" name="email" required class="form-control">
						</div>
					</div>
					
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Cadastrar</button>
				</div>
			</form>	
		</div>
		
	</div>
	
<?= $this->endSection() ?>