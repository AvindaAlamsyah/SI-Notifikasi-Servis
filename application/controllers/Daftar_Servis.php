<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Daftar_Servis extends CI_Controller
{

	function __construct(){
		parent::__construct();

		//$this->load->model('MLogin');
		$this->load->model('MDaftar_Servis');
	}
	
	public function index()
	{
		if ($this->session->userdata('user') != null) {
			$this->load->view('VDaftar_Servis');
		}else{
			redirect('Login');
		}
	}

	public function riwayat()
	{
		$where = array(
				'namaPelanggan' => $this->input->post('nama'),
				'noTelp' => $this->input->post('noTelp'),
				'statusService' => 'Selesai'
			);
		$queryRiw = $this->MDaftar_Servis->cekRiwayat($where);
		echo json_encode($queryRiw);
	}

	public function daftar()
	{
		$daftar = array(
				'kategoriBarang' => $this->input->post('kategori'),
				'modelBarang' => $this->input->post('model'),
				'kelengkapanBarang' => $this->input->post('kelengkapan'),
				'keluhan' => $this->input->post('keluhan'),
				'estimasiHarga' => $this->input->post('perkiraan'),
				'Pelanggan_idPelanggan' => '',
				'Admin_idAdmin' => $this->session->userdata('id'),
				'tanggalMasuk' => date('Y-m-d'),
				'statusService' => 'Belum'
			);


		$where = array(
				'namaPelanggan' => $this->input->post('nama'),
				'noTelp' => $this->input->post('noTelp')
				);

		$queryPel = $this->MDaftar_Servis->cekPelanggan($where);

		if ($queryPel !== TRUE) {
			$idPel = $queryPel->idPelanggan;

			if ($idPel !== null) {
				$daftar['Pelanggan_idPelanggan'] = $idPel;

				$querySer = $this->MDaftar_Servis->simpanDataServis($daftar);

				if ($querySer == TRUE) {
					$this->session->set_flashdata('errors','<div class="alert alert-success">Data servis berhasil disimpan</div>');
					redirect('Daftar_Servis');
				}else{
					$this->session->set_flashdata('errors','<div class="alert alert-warning">Data servis tidak tersimpan bro</div>');
					redirect('Daftar_Servis');
				}
			}else{
				$this->session->set_flashdata('errors','<div class="alert alert-warning">Gagal ambil nilai ID</div>');
				redirect('Daftar_Servis');
			}

		}else{
			$idPel = $this->MDaftar_Servis->simpanDataPelanggan($where);

			if ($idPel !== FALSE) {
				$daftar['Pelanggan_idPelanggan'] = $idPel;

				$querySer = $this->MDaftar_Servis->simpanDataServis($daftar);

				if ($querySer == TRUE) {
					$this->session->set_flashdata('errors','<div class="alert alert-success">Data serrvis berhasil disimpan</div>');
					redirect('Daftar_Servis');
				}else{
					$this->session->set_flashdata('errors','<div class="alert alert-warning">Data servis tidak tersimpan bro</div>');
					redirect('Daftar_Servis');
				}
			}else{
				$this->session->set_flashdata('errors','<div class="alert alert-warning">Data pelanggan tidak tersimpan</div>');
				redirect('Daftar_Servis');
			}

		}
	}
}