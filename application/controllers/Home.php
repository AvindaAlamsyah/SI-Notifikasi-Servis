<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_home');
        //$this->load->model('User_Model');
        //$this->model = $this->Model_Mahasiswa;
	}
	public function index(){
		$isi['mobile']=$this->Model_home->mobile();
		$isi['laptop']=$this->Model_home->laptop();
		$isi['board']=$this->Model_home->board();
		$this->load->view("View_home",$isi);
		
		
	}

 
	public function hasil()
	{
		$id= $this->input->POST('idService');
		$query= $this->Model_home->cari($id);
		foreach ($query as $key) {
			# code...
			$data=array(
				'statusService'=>$key->statusService
				);
			
		}
		echo json_encode($data);
	}
  }
?>