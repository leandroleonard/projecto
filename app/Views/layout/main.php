<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro de clientes</title>
    <link rel="stylesheet" href="<?=base_url('css/main.css')?>">
    <link rel="stylesheet" href="<?=base_url('font-awesome-4.7.0/css/font-awesome.min.css')?>">
    <style>body{background-color: #e5e5e5;}</style>
</head>
<body>
    <nav class="navbar navbar-expand bg-danger navbar-dark fixed-top">
        <a href="<?=base_url()?>" class="navbar-brand"><strong> <i class="fa"></i> SCC</strong></a>
        
        <div class="ml-auto">
            <a href="<?=site_url('cliente/novo')?>"><i class="fa fa-plus fa-fw fa-lg ml-2 text-white"></i></a>
            
            
            <a href="<?=site_url('login/sair')?>"><i class="fa fa-sign-out fa-fw fa-lg ml-2 text-white"></i></a>
        </div>
    </nav>

    <main class="app container my-5">
        <div class="tile">
            <div class="tile-body">
                <?= $this->renderSection('content')?>
            </div>
        </div>
    </main>
    

    <!-- Componentes essenciais -->
    <script src="<?=base_url('js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('js/popper.min.js')?>"></script>
    <script src="<?=base_url('js/main.js')?>"></script>
</body>
</html>