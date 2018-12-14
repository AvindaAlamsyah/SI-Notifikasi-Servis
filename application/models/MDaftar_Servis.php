<?php

/**
 * 
 */
class MDaftar_Servis extends CI_Model
{
	
	function cekPelanggan($where){
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where($where);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			return TRUE;
		}else{
			return $query->row();
		}
	}

	function cekRiwayat($where){
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->join('service','pelanggan.idPelanggan = service.Pelanggan_idPelanggan');
		$this->db->where($where);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			return TRUE;
		}else{
			return $query->result();
		}
	}

	function simpanDataPelanggan($data){
		$this->db->insert('pelanggan',$data);
		$id = $this->db->insert_id();

		return (isset($id)) ? $id : FALSE;
	}

	function simpanDataServis($data){
		$this->db->insert('service',$data);

		return TRUE;
	}
}

?>