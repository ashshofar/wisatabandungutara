<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_model{
        
    function getAll(){
        return $this->db->get('user');
    }

    function m_create($data)
	{
		$this->db->insert('user',$data);
	}

	function m_delete($data)
	{
		$this->db->delete('user',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('user');
		return $edit->result();
	}

	function m_update($data,$nik){
		$this->db->where('nik', $nik);
		$this->db->update('user',$data);
	}

}