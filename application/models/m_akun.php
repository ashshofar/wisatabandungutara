<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class m_akun extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('akun_user', $data);
			return $query;
		}

	}

?>