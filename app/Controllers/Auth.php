<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function login(){
		echo view('auth/header');
		echo view('auth/footer');
		return view('auth/login');
	}

	public function register(){
		echo view('auth/header');
		echo view('auth/footer');
		return view('auth/register');
	}

	public function index(){
		echo view('auth/header');
		echo view('auth/footer');
		return view('auth/index');
	}
	public function about()
	{
		echo view('auth/header');
		echo view('auth/footer');
		return view('auth/about');
	}
	public function halamanadmin()
	{
		echo view('auth/header');
		echo view('auth/footer');
		return view('auth/halamanadmin');
	}
	public function detailindex()
	{
		echo view('auth/header');
		echo view('auth/footer');
		return view('auth/detailindex');
	}
	//--------------------------------------------------------------------

}
