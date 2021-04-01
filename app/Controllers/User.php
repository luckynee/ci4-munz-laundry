<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelOutlet;

class User extends BaseController
{
  public function __construct()
  {
    helper('form');
    $this->ModelUser = new ModelUser();
    $this->ModelOutlet = new ModelOutlet();
  }

  public function index()
  {
    $data = [
      'title' => 'Akun',
      'user' => $this->ModelUser->allData(),
      'outlet' => $this->ModelOutlet->findAll(),
      'content' => 'admin/v_user',
    ];
    return view('layout/wrapper', $data);
  }

  public function add()
  {
    $data = [
      'nama_user' => $this->request->getPost('nama_user'),
      'username' => $this->request->getPost('username'),
      'password' => $this->request->getPost('password'),
      'id_outlet' => $this->request->getPost('id_outlet'),
      'role' => $this->request->getPost('role'),
    ];
    $this->ModelUser->add($data);
    session()->setFlashdata('message', 'User berhasil ditambahkan!');
    return redirect()->to(base_url('user'));
  }

  public function edit($id)
  {
    $data = [
      'id_user' => $id,
      'nama' => $this->request->getPost('nama'),
      'username' => $this->request->getPost('username'),
      'password' => $this->request->getPost('password'),
      'nama_outlet' => $this->request->getPost('nama_outlet'),
      'role' => $this->request->getPost('role'),
    ];
    $this->ModelUser->edit($data);
    session()->setFlashdata('message', 'User berhasil di-update!');
    return redirect()->to(base_url('user'));
  }

  public function delete($id)
  {
    $data = [
      'id_user' => $id,
    ];
    $this->ModelUser->delete_data($data);
    session()->setFlashdata('delete', 'User berhasil dihapus!');
    return redirect()->to(base_url('user'));
  }

  //--------------------------------------------------------------------

}
