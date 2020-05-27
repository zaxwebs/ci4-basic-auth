<?php namespace App\Controllers;

class Authentication extends BaseController
{
	public function login()
	{
		helper('form');
		echo view('Authentication/login');
	}

	public function register()
	{
		helper('form');

		if($this->request->getMethod() === 'post') {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			$password_confirm = $this->request->getPost('password_confirm');

			dd($email, $password, $password_confirm);

			return redirect()->to('/register');
		}

		echo view('Authentication/register');
	}

	public function logout()
	{
	}
	//--------------------------------------------------------------------

}
