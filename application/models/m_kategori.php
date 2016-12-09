<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kategori extends CI_model{
        
    function getAll(){
        return $this->db->get('kategori');
    }

    function m_create($data)
	{
		$this->db->insert('kategori',$data);
	}

	function m_delete($data)
	{
		$this->db->delete('kategori',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('kategori');
		return $edit->result();
	}

	function m_update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('kategori',$data);
	}

}