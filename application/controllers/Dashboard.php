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
		$data = array(
				'biaya' => $this->input->post('biaya')
			);

		$query = $this->MDashboard->updateSelesai($where, $data);

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

		echo json_encode($query);
	}
}
?>