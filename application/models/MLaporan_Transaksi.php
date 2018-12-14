<?php
/**
 * 
 */
class MLaporan_Transaksi extends CI_Model
{
	
	function sortBulan($tgl){
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('pelanggan','pelanggan.idPelanggan = service.Pelanggan_idPelanggan');
		$this->db->like('tanggalSelesai',$tgl,'after');
		$query = $this->db->get();

		return $query->result();
	}
}
?>