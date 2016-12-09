<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pengguna extends CI_Model {
  function __construct()
  {
    parent::__construct();
    $this->tbl = "pengguna";
  }

  public function getCountPengguna()
  {
      return $this->db->count_all_results('pengguna', FALSE);
  }

  public function getPengguna($page, $size)
  {
      return $this->db->get('pengguna', $size, $page);
  }

  public function insertPengguna($dataPengguna)
  {
      $val = array(
        'name' => $dataPengguna['name'],
        'username' => $dataPengguna['username'],
        'password' => $dataPengguna['password']
      );
      $this->db->insert('pengguna', $val);
  }

  public function updatePengguna($dataPengguna, $id)
  {
    $val = array(
      'name' => $dataPengguna['name'],
      'username' => $dataPengguna['username'],
      'password' => $dataPengguna['password']
    );
    $this->db->where('is', $id);
    $this->db->update('pengguna', $val);
  }

  public function deletePengguna($id)
  {
    $val = array(
      'id' => $id
    );
    $this->db->delete('pengguna', $val);
  }

  function cek_pengguna($username="",$password="")
  {
    $query = $this->db->get_where($this->tbl,array('username' => $username, 'password' => $password));
    $query = $query->result_array();
    return $query;
  }

}