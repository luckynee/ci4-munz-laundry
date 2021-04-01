<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
  protected $table         = 'm_user';

  public function allData()
  {
    // return $this->db->table('m_user')
    //   ->orderBy('id', 'DESC')
    //   ->get()->getResultArray();

    // return $this->db->select('*')
    //   ->from('m_user')
    //   ->join('m_outlet', 'm_outlet.nama = m_user.id_outlet')
    //   ->get()
    //   ->getResultArray();

    return $this->db->table('m_user')
      ->join('m_outlet', 'm_outlet.id_outlet = m_user.id_outlet')
      ->get()->getResultArray();
  }

  public function add($data)
  {
    $this->db->table('m_user')
      ->insert($data);
  }

  public function edit($data)
  {
    $this->db->table('m_user')
      ->where('id_user', $data['id_user'])
      ->update($data);
  }

  public function delete_data($data)
  {
    $this->db->table('m_user')
      ->where('id_user', $data['id_user'])
      ->delete($data);
  }
}
