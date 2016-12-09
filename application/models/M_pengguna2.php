<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna2 extends CI_model{
        
    function getAll(){
        return $this->db->get('pengguna');
    }

    function m_create($data)
	{
		$this->db->insert('pengguna',$data);
	}

	function m_delete($data)
	{
		$this->db->delete('pengguna',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('pengguna');
		return $edit->result();
	}

	function m_update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('pengguna',$data);
	}

}