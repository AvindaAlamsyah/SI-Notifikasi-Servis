<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Laporan_Transaksi extends CI_Controller
{
	
	function __construct(){
		parent::__construct();

		$this->load->model('MLaporan_Transaksi');
	}
	
	public function index()
	{
		if ($this->session->userdata('user') != null) {
			$this->load->view('VLaporan_Transaksi');
		}else{
			redirect('Login');
		}
	}

	public function tampilSort()
	{
		$tgl = $this->input->post('tamBer');
		$query = $this->MLaporan_Transaksi->sortBulan($tgl);

		echo json_encode($query);
	}
}
?>