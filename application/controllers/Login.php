 <?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('MLogin');
	}
	
	public function index()
	{
		if ($this->session->userdata('user') != null) {
			redirect('Dashboard');
		}else{
			$this->load->view('VLogin');
		}
	}

	public function cek(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$where = array(
				'username' => $username,
				'password' => $password
			);

		$query = $this->MLogin->login('login','admin',$where);

		if ($query !== TRUE)
		{
			foreach ($query as $data) {
				$sess_data['id'] = $data->idAdmin;
				$sess_data['user'] = $data->namaPegawai;
				$this->session->set_userdata($sess_data);
			}
				
			redirect('Dashboard');
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Username atau password anda salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('user','');
		redirect('Login');
	}
}
?>