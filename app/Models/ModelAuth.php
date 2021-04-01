<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
  public function login_user($username, $password)
  {
    return $this->db->table('m_user')->where([
      'username' => $username,
      'password' => $password,
    ])->get()->getRowArray();
  }
}
