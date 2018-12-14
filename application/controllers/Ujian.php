<?php
/**
 * 
 */
class Ujian extends CI_Controller
{
	
	public function index()
	{
		//$this->load->view('VUjian');
		$this->form_validation->set_rules('usernm','EMAILKU','required|callback_cek');

		if ($this->form_validation->run() == TRUE) {
			echo "berhasil";
		}else{
			$this->load->view('VUjian');
		}
	}

	public function cek()
	{
		$user = $this->input->post('usernm');

		if ($user == null) {
			$this->form_validation->set_message('cek','Gagal maning');
			return FALSE;
		}else{
			return TRUE;
		}
	}
}
?>