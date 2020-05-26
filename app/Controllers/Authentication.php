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
	}

	public function logout()
	{
	}
	//--------------------------------------------------------------------

}
