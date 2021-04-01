<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOutlet extends Model
{
  protected $table         = 'm_outlet';
  protected $allowedFields = [];

  // public function allData()
  // {
  //   return $this->db->table('m_outlet')
  //     ->orderBy('id_outlet', 'DESC')
  //     ->get()->getResultArray();
  // }
}
