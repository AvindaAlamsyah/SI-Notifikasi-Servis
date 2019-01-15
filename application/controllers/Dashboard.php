<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Dashboard extends CI_Controller
{

	function __construct(){
		parent::__construct();

		$this->load->model('MDashboard');
	}
	
	public function index()
	{
		if ($this->session->userdata('user') != null) {
			$this->load->view('VDashboard');
		}else{
			redirect('Login');
		}
	}

	public function tampil()
	{
		$query= $this->MDashboard->tampilData();

		echo json_encode($query);
	}

	public function tampilMen()
	{
		$id = array(
			'idService' => $this->input->get('id')
		);
		
		$query = $this->MDashboard->tampilMenKod($id);

		echo json_encode($query);
	}

	public function selesai()
	{
		$where = array(
				'idService' => $this->input->post('id')
			);

		$query = $this->MDashboard->updateSelesai($where);

		$CEK_DATA_KELUHAN=$this->MDashboard->get_data_keluhan($where['idService']);
		$cekidpelanggan=$CEK_DATA_KELUHAN[0]['Pelanggan_idPelanggan'];
		$cekbiaya=$CEK_DATA_KELUHAN[0]['biaya'];
		$cekkerusakan=$CEK_DATA_KELUHAN[0]['kerusakan'];
		$CEK_DATA_PELANGGAN=$this->MDashboard->get_data_idpelanggan($cekidpelanggan);
		//$AMBIL_NAMA=$this->$CEK_DATA_PELANGGAN[0]['namaPelanggan'];;
        $phone= $CEK_DATA_PELANGGAN[0]['noTelp'];;
		//$AMBIL_ID_SERVICE=$CEK_DATA_KELUHAN[0]['idService'];
        $AMBIL_modelBarang_SERVICE=$CEK_DATA_KELUHAN[0]['modelBarang'];
        //$AMBIL_keluhan_SERVICE=$this->input->post('keluhan');
			
    		$pesan= " BARANG DENGAN NAMA ".$AMBIL_modelBarang_SERVICE." DENGAN KERUSAKAN ".$cekkerusakan." Selesai Dikerjakan. DAN BIAYA YANG HARUS DIBAYAR ".$cekbiaya;
			$kirimsms=$this->MDashboard->smsgateway($phone,$pesan);

		echo json_encode($query);
	}

	public function updateSer()
	{
		/*$data = array(
				'kerusakan' => $this->input->post('kerusakan'),
				'statusService' => $this->input->post('status')
			);
		$where = array(
				'idService' => $this->input->post('id')
			);*/

		//$query = $this->MDashboard->updateData($data, $where);
		$kerusakan = $this->input->post('kerusakan');
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$biaya = $this->input->post('biaya');

		$query = $this->MDashboard->updateData($id, $kerusakan, $status, $biaya);
		
		$CEK_DATA_KELUHAN=$this->MDashboard->get_data_keluhan($id);
		$cekidpelanggan=$CEK_DATA_KELUHAN[0]['Pelanggan_idPelanggan'];
		$CEK_DATA_PELANGGAN=$this->MDashboard->get_data_idpelanggan($cekidpelanggan);
		//$AMBIL_NAMA=$this->$CEK_DATA_PELANGGAN[0]['namaPelanggan'];;
        $phone= $CEK_DATA_PELANGGAN[0]['noTelp'];
        $cekstatus=$CEK_DATA_KELUHAN[0]['statusService'];
		//$AMBIL_ID_SERVICE=$CEK_DATA_KELUHAN[0]['idService'];
        $AMBIL_modelBarang_SERVICE=$CEK_DATA_KELUHAN[0]['modelBarang'];
        //$AMBIL_keluhan_SERVICE=$this->input->post('keluhan');
			
    		$pesan= " BARANG DENGAN NAMA ".$AMBIL_modelBarang_SERVICE." DENGAN KERUSAKAN ".$kerusakan." DENGAN STATUS : ".$cekstatus.". ID SERVICE : ".$id." DAN BIAYA YANG HARUS DIBAYAR ".$biaya;
			$kirimsms=$this->MDashboard->smsgateway($phone,$pesan);
		

//var_export($kirimsms);
		echo json_encode($query);
		//redirect('Dashboard');
		        
     
	}
}
?>