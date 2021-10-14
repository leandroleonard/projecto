<?php
	namespace App\Controllers;
	use CodeIgniter\Controller;

	class Login extends Controller
	{
		public function index(){
			return view('layout/login', ['erro' => '']);
		}

		public function logar(){
            if ($this->request->getMethod() !== 'post') {
                return redirect()->back();
            }

            $email = $this->request->getPost('email');
            $senha = $this->request->getpost('senha');

            $db = db_connect();
            
            $verificar = $db->table('usuarios')->getWhere(['senha' => $senha, 'email' => $email])->getResultArray();

            if($verificar == true){
                $dados = $db->table('usuarios')->getWhere(['senha' => $senha, 'email' => $email])->getResultArray();


                $user = $dados[0]['usuario'];
                session()->set('usuario', $user);

                session()->set('logado', true);
                return redirect()->to(base_url());
            }else{
                $e = "Usuário ou senha incorreta!";
                return view('layout/login', ['erro' => $e]);
            }
        }

        public function sair(){
            session()->destroy();
            return redirect()->to(base_url());
        }
	}