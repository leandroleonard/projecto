<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;

	use App\Models\Clientes;

	class Home extends Controller
	{
		public function index()
		{	
			if (session()->has('logado') && session()->has('usuario')) {
				$model_clientes		= new Clientes;
				$cliente  			= $model_clientes->findAll(2);
				return view('index', ['clientes' => $cliente]);				
			}else{
				return redirect()->to(site_url('login/index'));
			}
		}

	}
