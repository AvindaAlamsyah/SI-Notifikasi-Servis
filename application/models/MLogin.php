<?php
/**
 * 
 */
class MLogin extends CI_Model
{

	function login($tabel,$join,$where){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->join($join,'login.idLogin=admin.Login_idLogin');
		$this->db->where($where);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			return TRUE;
		}else{
			return $query->result();
		}
	}
}