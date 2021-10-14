<?php
	namespace App\Controllers;
	use CodeIgniter\Controller;

	use App\Models\Clientes;

	class Cliente extends Controller
	{
		public function novo(){
			if (session()->has('logado') && session()->has('usuario')) {
				return view('cliente/novo_cliente');			
			}else{
				return redirect()->to(site_url('login/index'));
			}
			
		}

		public function store(){

			if ($this->request->getMethod() !== 'post') {
                return redirect()->back();
            }

			$params = [
				'nome_cliente'	=> $this->request->getPost('cliente'),
				'email'			=> $this->request->getPost('email'),
				'cpnj'			=> $this->request->getPost('cpnj')
			];


			$clienteRepository = new Clientes;

			if($clienteRepository->save($params)):
				return redirect()->to(site_url('cliente/view'));
			else:
				echo "<pre>";
				print_r($clienteRepository->errors());
			endif;
		}

		public function view(){
			if (session()->has('logado') && session()->has('usuario')) {
				
				$clienteRepository = new Clientes;

				$clientes = $clienteRepository->findAll();

				return view('cliente/clientes', ['clientes' => $clientes]);			
			}else{
				return redirect()->to(site_url('login/index'));
			}

		}

		public function edit($id){
			$clienteRepository = new Clientes;

			$cliente = $clienteRepository->find($id);
			
			if (isset($cliente)) {
				return view('cliente/updat_cliente', ['dados' => $cliente]);
			}else{
				die("Cliente não encontrado");
			}
				
		}

		public function update(){

			if ($this->request->getMethod() !== 'post') {
                return redirect()->back();
            }

			$params = [
				'id' 			=> $this->request->getPost('id'),
				'nome_cliente'	=> $this->request->getPost('cliente'),
				'email'			=> $this->request->getPost('email'),
				'cpnj'			=> $this->request->getPost('cpnj')
			];


			$clienteRepository = new Clientes;

			if($clienteRepository->save($params)):
				return redirect()->to(site_url('cliente/view'));
			else:
				echo "<pre>";
				print_r($clienteRepository->errors());
			endif;
		}

		public function destroy($id){
			if (session()->has('logado') && session()->has('usuario')) {
				
				$clienteRepository = new Clientes;
				$cliente = $clienteRepository->find($id);

				if (isset($cliente)) {
					if ($clienteRepository->delete($id)) {
						return redirect()->to(site_url('cliente/view'));
					}else{
						die("Ocorreu um erro");
					}
				}else{
					die("Cliente não encontrado");
				}			
			}else{
				return redirect()->to(site_url('login/index'));
			}
			
		}


	}

