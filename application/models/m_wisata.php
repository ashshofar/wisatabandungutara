<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_wisata extends CI_model{
        
    function getAll(){
        return $this->db->get('wisata');
    }

    function m_create($data)
	{
		$this->db->insert('wisata',$data);
	}

	function m_delete($data)
	{
		$this->db->delete('wisata',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('wisata');
		return $edit->result();
	}

	function m_update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('wisata',$data);
	}

	function getAllKategoris()
    {
        $query = $this->db->query('SELECT kategori FROM kategori');
        return $query->result();
    }

}