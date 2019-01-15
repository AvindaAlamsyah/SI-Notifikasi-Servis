<?php 
class Model_home extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	function mobile(){
		
		
		$query = $this->db->query("SELECT COUNT(kategoriBarang) as jumlahmobile FROM service WHERE kategoriBarang='mobile' && statusService='selesai'");
		return $query->result();
	}
	function laptop(){
		
		
		$query = $this->db->query("SELECT COUNT(kategoriBarang) as jumlahlaptop FROM service WHERE kategoriBarang='laptop' && statusService='selesai'");
		return $query->result();
	}
	function board(){
		
		
		$query = $this->db->query("SELECT COUNT(kategoriBarang) as jumlahboard FROM service WHERE kategoriBarang='komputer' && statusService='selesai'");
		return $query->result();
	}
  
  public function cari($cari)
	{
		
		$data = $this->db->query("SELECT statusService from service where idService = '$cari' ");
		return $data->result();
	}
}

?>