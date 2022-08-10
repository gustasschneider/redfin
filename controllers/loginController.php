<?php
class loginController extends controller {

	public function index() {
		$data = array();

		if(isset($_POST['email']) && !empty($_POST['email'])) {
			$email = addslashes($_POST['email']);
			$pass  = addslashes($_POST['password']);

			$u = new Users();

			if($u->doLogin($email, $pass)) {
				$data['textoRetorno'] = 'Sucesso, vamos entrar!';
				$data['statusRetorno'] = '1';
                header("Location: ".BASE_URL);
			} else {
				$data['textoRetorno'] = 'E-mail e/ou senha errados.';
				$data['statusRetorno'] = '0';
			}
		}

		$this->loadView('login', $data);

	}

	public function logout() {
		$u = new Users();
		$u->logout();
		header("Location: ".BASE_URL);
	}

}