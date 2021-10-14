<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url('css/main.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/signin.css')?>">
    <link rel="stylesheet" href="<?=base_url('font-awesome-4.7.0/css/font-awesome.min.css')?>">

  <title>Login</title>
</head>

<body class="text-center">
  <form class="form-signin" action="<?=site_url('login/logar')?>" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Endereço email" required autofocus>
  
    <label for="senha">Password</label>
    <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    <?php if($erro != ''): ?>
      <span class="text-danger"><?=$erro?></span>
    <?php endif ?>
  </form>

  <!-- Componentes essenciais -->
    <script src="<?=base_url('js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('js/popper.min.js')?>"></script>
    <script src="<?=base_url('js/main.js')?>"></script>
</body>
</html>
