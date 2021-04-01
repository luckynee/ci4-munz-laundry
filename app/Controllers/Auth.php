<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->ModelAuth = new ModelAuth();
	}

	public function index()
	{
		$data = [
			'title' => 'Masuk',
			'content' => 'v_login',
		];
		return view('layout/wrapper_auth', $data);
	}

	public function login()
	{
		// Validasi Data
		if (
			$this->validate(
				[
					'username' => [
						'label' => 'Username',
						'rules' => 'required',
						'errors' => [
							'required' => '{field} tidak boleh kosong!',
						],
					],

					'password' => [
						'label' => 'Password',
						'rules' => 'required',
						'errors' => [
							'required' => '{field} tidak boleh kosong!',
						],
					],
				],
			)
		) {
			// Jika valid
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			$user_check = $this->ModelAuth->login_user($username, $password);
			if ($user_check) {
				// Jika data cocok
				session()->set('log', true);
				session()->set('id_user', $user_check['id_user']);
				session()->set('nama_user', $user_check['nama_user']);
				session()->set('username', $user_check['username']);

				$role = $user_check['role'];

				// Account level
				session()->set('role', $user_check['role']);
				if ($role == 'admin') {
					return redirect()->to(base_url('admin'));
				} elseif ($role == 'kasir') {
					echo 'Kasir';
				} elseif ($role == 'owner') {
					echo 'Owner';
				}
			} else {
				// Jika data tidak cocok
				session()->setFlashdata('message', 'Login failed, periksa username dan password anda!');
				return redirect()->to(base_url(''));
			}
		} else {
			// Jika tidak valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url(''));
		}
	}

	public function logout()
	{
		session()->remove('log');
		session()->remove('id_user');
		session()->remove('nama_user');
		session()->remove('username');
		session()->remove('role');
		session()->setFlashdata('logout', 'Logout berhasil!');
		return redirect()->to(base_url(''));
	}

	//--------------------------------------------------------------------

}
